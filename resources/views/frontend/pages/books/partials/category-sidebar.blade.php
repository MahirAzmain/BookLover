<div class="list-group mt-3">
  @foreach (App\Category::all() as $cat)
    <a href="{{ route('categories.show', $cat->slug) }}" class="list-group-item list-group-item-action">
    {{ $cat->name }}
  </a>
  @endforeach


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