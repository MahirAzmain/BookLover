@extends('frontend.layouts.app')

@section('content')

<div class="main-content">

  <div class="login-area page-area">
    <div class="container">
      <div class="row">
          <div class="col-md-12 p-1">
            <div class="profile-tab border p-2">
              <h3 class="">
                User: {{ $user->name }}
              </h3>
              <p>
                <strong> Uploaded Books: </strong>
              </p>
              <hr>

              @include('frontend.pages.books.partials.list')
              <div class="books-pagination mt-5">
                {{ $books->links() }}
              </div>
            </div>
            <div style="height:400px;" id="map"></div>
    <button onclick="showMap({{$user->lat}}, {{$user->lon}})"> Show Map</button>  
  
    <script type="text/javascript">
       
        function showMap(lat, lng) {
          const myLatLng = { lat: lat, lng: lng };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: myLatLng,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello",
          });
        }  
    </script>

<script>
  (function (window, document) {
      var loader = function () {
          var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
          script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
          tag.parentNode.insertBefore(script, tag);
      };
  
      window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
  })(window, document);
</script>
  
   <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries" >
</script>
          </div>
      </div>
    </div>
  </div>

</div>
@endsection