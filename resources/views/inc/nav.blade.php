<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          @if (Session::has('user'))
          <li class="nav-item">
            <a class="{{'/user/home' == request()->path() ? 'nav-link active' : 'nav-link'}}" aria-current="page" href="{{route('userdash')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="{{'logout' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('logout')}}">logout</a>
          </li>
          @else
          <li class="nav-item">
            <a class="{{'/' == request()->path() ? 'nav-link active' : 'nav-link'}}" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="{{'login' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('login')}}">login</a>
          </li>
          <li class="nav-item">
            <a class="{{'register' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('register')}}">register</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>