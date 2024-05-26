
<!-- Footer Start -->
<div class="footer-area">
  <div class="container">
    <div class="row">
      
      <div class="col-md-3">
        <img src="{{ asset('images/logo.jpg') }}" class="logo-image">
        <p>
          <address>
            Azimpur, Dhaka-1205
            <br>
            Dhaka
          </address>
          <a href="mailto:mahirazmain7@gmail.com">mahirazmain7@gmail.com</a>
        </p>
      </div>



      <div class="col-md-4">
        <h4>Top Links</h4>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Create New Account</a></li>
          <li><a href="">Privacy Policy</a></li>
        </ul>
      </div>


    

    </div>

    <p class="text-center">
      &copy; 2024 all rights reserved
    </p>
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
</div>