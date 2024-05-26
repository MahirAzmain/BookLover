@extends('frontend.layouts.app')

@section('content')

<div class="main-content">



  <script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

  <div class="book-show-area">
    <div class="container">
      @include('frontend.layouts.partials.messages')
      <div class="row">

        <div class="col-md-3">
          
          <img src="{{ asset('images/books/'.$book->image) }}" class="img img-fluid" />
        </div>
        <div class="col-md-9">
          <h3>{{ $book->title }}</h3>
          <p class="text-muted">Written By 

            @foreach ($book->authors as $book_author)
              <span class="text-primary">{{ $book_author->author->name }}</span>
            @endforeach
             <span class="text-info">{{ $book->category->name }}</span>
          </p>
          <hr>

          <p><strong>Uploaded By: </strong> {{ $book->user->name }}</p>
          <p><strong>Uploaded at: </strong> {{ $book->created_at->diffForHumans() }}</p>
          <p>
            <strong>Published at</strong> {{ $book->publish_year }}, 
            <strong>Publisher: </strong> {{ $book->publisher->name }},
            <strong>ISBN: </strong> {{ $book->isbn }}
          </p>
          
          <div class="book-description">
            {!! $book->description !!}
          </div>
          @if($book->user_id==1)
          <div class="modal-body">
            <h2>Price: {{$book->price}} Tk</h2>
          </div>
          @endif

          <div class="book-buttons mt-4">
              {{-- <a href="" class="btn btn-outline-success"><i class="fa fa-check"></i> Already Read</a>
              <a href="book-view.html" class="btn btn-outline-warning"><i class="fa fa-cart-plus"></i> Add to Cart</a>
              <a href="" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Add to Wishlist</a> --}}
              
           <!-- Inside the book-buttons div -->
@auth
@if ($book->quantity > 0 || !is_null(App\User::bookRequest($book->id)) && App\User::bookRequest($book->id)->status == 4)
  @if (!is_null(App\User::bookRequest($book->id)))
    @php $request = App\User::bookRequest($book->id); @endphp

    @if ($request->status == 1)
      <span class="badge badge-success" style="padding: 12px;border-radius: 0px;font-size: 14px;">
        <i class="fa fa-check"></i> Already Requested
      </span>
    @endif

    @if ($request->status == 2)
      <span class="badge badge-success" style="padding: 12px;border-radius: 0px;font-size: 14px;">
        <i class="fa fa-check"></i> Owner Confirmed
      </span>
    @endif

    @if ($request->status == 3)
      <span class="badge badge-danger" style="padding: 12px;border-radius: 0px;font-size: 14px;">
        <i class="fa fa-times"></i> Owner Rejected
      </span>
    @endif

    @if ($request->status == 4)
      <span class="badge badge-success" style="padding: 12px;border-radius: 0px;font-size: 14px;">
        <i class="fa fa-check"></i> Reading...
      </span>
      <a href="#returnBookModal{{ $book->id }}" class="btn btn-outline-warning" data-toggle="modal"><i class="fa fa-arrow-right"></i> Return Book</a>
    @endif

    <div class="modal fade" id="returnBookModal{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">
              Return <mark>{{ $book->title }}</mark>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('books.return.store', $request->id) }}" method="post">
              @csrf
              <p>Are you sure to return the book?</p>
              <button type="submit" class="btn btn-success mt-4">
                <i class="fa fa-send"></i> Send Return Request
              </button>
              <button type="button" class="btn btn-secondary mt-4" data-dismiss="modal">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    @if ($request->status == 1)
      <a href="#requestUpdateModal{{ $book->id }}" class="btn btn-outline-success" data-toggle="modal"><i class="fa fa-check"></i> Update Request</a>
      <form action="{{ route('books.request.delete', $request->id) }}" method="post" style="display: inline-block;">
        @csrf 
        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> Cancel Request</button>
      </form>
      <div class="modal fade" id="requestUpdateModal{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">
                Update Request for <mark>{{ $book->title }}</mark>
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('books.request.update', $request->id) }}" method="post">
                @csrf
                <p>Update your request to the owner of this book?</p>
                <textarea name="user_message" id="user_message" class="form-control" rows="5" placeholder="Enter your message to the owner (Keep empty if there is no message)">{{ $request->user_message }}</textarea>
                <button type="submit" class="btn btn-success mt-4">
                  <i class="fa fa-send"></i> Send Request Now
                </button>
                <button type="button" class="btn btn-secondary mt-4" data-dismiss="modal">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @endif
  @else
    <a href="#requestModal{{ $book->id }}" class="btn btn-outline-success" data-toggle="modal"><i class="fa fa-check"></i> Send Request</a>
  @endif
@else
  @php $request = App\User::bookRequest($book->id); @endphp
  @if ($request && $request->status == 4)
    <span class="badge badge-success" style="padding: 12px;border-radius: 0px;font-size: 14px;">
      Reading...
    </span>
    <a href="#returnBookModal{{ $book->id }}" class="btn btn-outline-warning" data-toggle="modal"><i class="fa fa-arrow-right"></i> Return Book</a>
  @else
    <span class="badge badge-success" style="padding: 12px;border-radius: 0px;font-size: 14px;">
      Someone is reading this book or has bought the book...
    </span>
  @endif
@endif
@endauth


             

             

              <div class="modal fade" id="requestModal{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">
                        Request for <mark>{{ $book->title }}</mark>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <div class="modal-body">
                      <form action="{{ route('books.request', $book->slug) }}" method="post">
                        @csrf
                        
                        <p>
                          Send a request to the owner of this book ?
                        </p>
                        <textarea name="user_message" id="user_message" class="form-control" rows="5" placeholder="Enter your message to the owner (Keep empty if there is no message)" ></textarea>

                        <button type="submit" class="btn btn-success mt-4">
                          <i class="fa fa-send"></i> Send Request Now
                        </button>
                        <button type="button" class="btn btn-secondary mt-4" data-dismiss="modal">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              
              @if($book->user_id==1 && $book->quantity>0) 
             <form action="{{url('/example2/'.$book->id)}}" method="get" class="btn-image-form">
              <button type="submit" class="btn-image">
                 <img src="{{asset('admin-asset/img/files/sslcommerz.png')}}" alt="SSLCommerz logo"
              class="btn-icon">
              </button>
            </form>
            @endif




          </div>
        </div>

      </div>
    </div>
  </div>

</div>
@endsection