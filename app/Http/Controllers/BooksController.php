<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Author;
use App\Publisher;
use App\Book;
use App\BookAuthor;
use Auth;

class BooksController extends Controller
{
    public function show($slug)
    {
    	$book = Book::where('slug', $slug)->first();
    	
    	if (!is_null($book)) {
    		return view('frontend.pages.books.show', compact('book'));
    	}
    	return redirect()->route('index');
    }    

    public function create()
    {
    	$categories = Category::all();
        $publishers = Publisher::all();
        $authors = Author::all();
        $books = Book::where('is_approved', 1)->get();

        return view('frontend.pages.books.create', compact('categories', 'publishers', 'authors', 'books'));
    }

    public function index()
    {
        $books = Book::orderBy('id', 'desc')->where('is_approved', 1)->paginate(10);
        return view('frontend.pages.books.index', compact('books'));

    }

    public function search(Request $request)
    {
        $searched = $request->s;
        if (empty($searched)) {
            return $this->index();
        }

        $books = Book::orderBy('id', 'desc')->where('is_approved', 1)
        ->where('title', 'like', '%'.$searched.'%')
        ->orWhere('description', 'like', '%'.$searched.'%')
        ->paginate(10);

        foreach ($books as $book) {
            $book->increment('total_search');
        }

        return view('frontend.pages.books.index', compact('books', 'searched'));
    }

    public function advanceSearch(Request $request)
    {
        $searched = $request->t;
        $searched_publisher = $request->p;
        $searched_category = $request->c;
        if (empty($searched) && empty($searched_publisher) && empty($searched_category)) {
            return $this->index();
        }

        if (empty($searched) && empty($searched_category) && !empty($searched_publisher)) {
            $books = Book::orderBy('id', 'desc')->where('is_approved', 1)
            ->where('publisher_id', $searched_publisher)
            ->paginate(10);
        }else if (empty($searched) && empty($searched_publisher) && !empty($searched_category)) {
            $books = Book::orderBy('id', 'desc')->where('is_approved', 1)
            ->where('category_id', $searched_category)
            ->paginate(10);
        }else{
            $books = Book::orderBy('id', 'desc')->where('is_approved', 1)
            ->where('title', 'like', '%'.$searched.'%')
            ->orWhere('description', 'like', '%'.$searched.'%')
            ->orWhere('category_id', $searched_category)
            ->orWhere('publisher_id', $searched_publisher)
            ->paginate(10);
        }

        

        foreach ($books as $book) {
            $book->increment('total_search');
        }

        return view('frontend.pages.books.index', compact('books', 'searched'));
    }

    public function store(Request $request)
    {
    	if (!Auth::check()) {
    		abort(403, 'Unauthorized action');
    	}

        $request->validate([
            'title' => 'required|max:50',
            'category_id' => 'required',
            'publisher_id' => 'required',
            'slug' => 'nullable|unique:books',
            'description' => 'nullable',
            'image' => 'required|image|max:2048'
        ],
        [
            'title.required' => 'Please give book title',
            'image.max' => 'Image size can not be greater than 2MB'
        ]);

        $book = new Book();
        $book->title = $request->title;
        if (empty($request->slug)) {
            $book->slug = str_slug($request->title);
        }else{
            $book->slug = $request->slug;
        }
        
        $book->category_id = $request->category_id;
        $book->publisher_id = $request->publisher_id;
        $book->publish_year = $request->publish_year;
        $book->description = $request->description;
        $book->user_id = Auth::id();
        $book->is_approved = 0;
        $book->isbn = $request->isbn;
        $book->quantity = $request->quantity;
        $book->translator_id = $request->translator_id;
        $book->price = $request->price;
        $book->save();

        // Image Upload
        if ($request->image) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = time().'-'.$book->id.'.'.$ext;
            $path = "images/books";
            $file->move($path, $name);
            $book->image = $name;
            $book->save();
        }

        // Book Authors
        foreach ($request->author_ids as $id) {
            $book_author = new BookAuthor();
            $book_author->book_id = $book->id;
            $book_author->author_id = $id;
            $book_author->save();
        }
        

        session()->flash('success', 'Book has been created !!');
        return redirect()->route('index');
    }


    public function topBorrowed()
    {
        // Fetch the top 10 most borrowed books
        $books = Book::orderBy('total_borrowed', 'desc')->take(10)->get();

        return view('topBorrowed', compact('books'));
    }
    public function topSearchBooks()
    {
        $books = Book::orderBy('total_search', 'desc')->take(10)->get(); // Top 10 searched books
        return view('topsearchbooks', ['books' => $books]);
    }
}
