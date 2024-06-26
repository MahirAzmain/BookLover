@extends('frontend.layouts.app')


@section('content')

<div class="main-content">
 
  <div class="top-body pt-4 pb-4">
    <div class="container">
      
      @if(Session::has('status'))
        <div class="alert alert-success">
            <p>
                {{ Session::get('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </p>

        </div>
    @endif
    </div>
  </div> <!-- End Top Body Links -->


  <div class="book-list-sidebar">
    <div class="container">
      <div class="row">

        <div class="col-md-9">
          <h3>
            @if (isset($searched))
                Searched Books By - <mark>{{ $searched }} </mark>
            @else
              @if (Route::is('categories.show'))
                <mark>{{ $category->name }}</mark> Category Books
              @else
                Recent Uploaded Books
              @endif
                
            @endif
            
          </h3>

          @include('frontend.pages.books.partials.list')

          <div class="books-pagination mt-5">
            {{ $books->links() }}
          </div>

        </div> <!-- Book List -->

        <div class="col-md-3">
          <div class="widget">
            <h5 class="mb-2 border-bottom pb-3">
              Categories
            </h5>

            @include('frontend.pages.books.partials.category-sidebar')

          </div> <!-- Single Widget -->

        </div> <!-- Sidebar -->

      </div>
    </div>
  </div>
</div>



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

@endsection