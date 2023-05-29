<header class="container py-3 d-flex justify-content-between align-items-center overflow-hidden">
    <div class="logo">
      <img src="/img/dc-logo.png" alt="Logo DC">
    </div>
    <nav>
      <ul class="d-flex gap-3 ">
        @foreach ($navlinks as $navlinks)
        <a href="{{$navlinks['url']}}">
            <li>{{ $navlinks['text'] }}</li>
          </a>
        @endforeach

      </ul>
    </nav>
  </header>


