<nav class="navbar navbar-expand-lg bg-body-tertiary px-2 py-2 fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="{{route('Homepage')}}">{{config("app.name")}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end px-2" id="navbarNav">
      <ul class="navbar-nav">
      @foreach($links as $key => $link)
        <li class="nav-item">
          <a class="nav-link" href="{{$key}}">{{$link}}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>