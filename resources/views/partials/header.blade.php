<header class="container py-3 d-flex justify-content-between align-items-center overflow-hidden">
    <div class="logo">
      <img src="/img/dc-logo.png" alt="Logo DC">
    </div>
    <nav>
        <ul class="d-flex gap-3 ">
            <a href="#">
        <li>Characters</li>
      </a>
            <a class="@if (url()->current() === route('comics.index'))
                activelink
            @endif" href="{{route('comics.index')}}">
        <li>Comics</li>
      </a>
            <a href="#">
        <li>Movies</li>
      </a>
            <a href="#">
        <li>Tv</li>
      </a>
            <a href="#">
        <li>Games</li>
      </a>
            <a href="#">
        <li>Collectibles</li>
      </a>
            <a href="#">
        <li>Videos</li>
      </a>
            <a href="#">
        <li>Fans</li>
      </a>
            <a href="#">
        <li>News</li>
      </a>
            <a class="@if (url()->current() === route('admin.panel'))
                activelink
            @endif" href="{{route('admin.panel')}}">
        <li>Admin</li>
      </a>

  </ul>

    </nav>
  </header>


