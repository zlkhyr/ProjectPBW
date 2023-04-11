<nav class="navbar navbar-expand-xl" style=" width:100%; background-color: #e3f2fd; box-shadow: 2px 2px 4px #198754; position:relative; z-index: 999">
    <div class="container-fluid mx-4">
      <a href="/">
         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="52" height="52" viewBox="0 0 32 32">
            <polygon fill="#79b5ba" points="24.99,13 29.99,15.95 25,19.14 24.99,23.24 16,29 7.01,23.24 7,19.14 2.01,15.95 7.01,13 2.01,10.05 11,4.3 16,7.24 21,4.3 29.99,10.05"></polygon><polygon fill="#fff" points="24.221,13.695 16,8.428 7.779,13.695 7.24,12.853 16,7.24 24.76,12.853"></polygon><polygon fill="#fff" points="16,19.234 7.24,13.621 7.779,12.779 16,18.046 24.221,12.779 24.76,13.621"></polygon><polygon fill="#fff" points="11.359,21.958 7.24,19.319 7.779,18.477 11.381,20.785 15.746,18.209 16.254,19.071"></polygon><polygon fill="#fff" points="20.641,21.958 15.746,19.071 16.254,18.209 20.619,20.785 24.221,18.477 24.76,19.319"></polygon><path fill="#302529" d="M16,30.188l-9.989-6.399l-0.01-4.1L0.1,15.916L5.042,13l-4.941-2.916l10.878-6.957L16,6.08 l5.021-2.953l10.878,6.957L26.958,13l4.942,2.916l-5.901,3.772l-0.01,4.1L16,30.188z M8.009,22.692L16,27.813l7.991-5.12 l0.01-4.101l4.079-2.607L23.022,13l5.059-2.984l-7.103-4.543L16,8.4l-4.979-2.928l-7.103,4.543L8.978,13L3.92,15.984l4.079,2.607 L8.009,22.692z"></path>
          </svg>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex mb-3 mt-3" role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="border-top-right-radius: 0px; border-bottom-right-radius:0px; width: 800px; display:flex">
          <button class="btn btn-outline-success" type="submit" style="border-top-left-radius: 0px; border-bottom-left-radius:0px;">Search</button>
        </form>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
              @include('componen.user-icon')
            </a>
            <ul class="dropdown-menu p-4">
              <li>
                <button type="submit" class="dropdown-item">
                  @include('componen.profile-icon')
                  Profile
                </button>
              </li>
              <li>
                <a class="nav-link" href="/posts/barang">
                  @include('componen.profile-icon')
                  Barang saya
                </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    @include('componen.logout-icon')
                    Logout
                  </button>
                </form>
              </li>
            </ul>
          </li>  
          @else
        </ul>
        <div class="d-flex justify-content-center ms-auto column-gap-2">
            <a class="btn btn-outline-success" href="/login" role="button">Login</a>
            <a class="btn btn-success" href="/register" role="button">Register</a>
        </div>
        @endauth
      </div>
    </div>
</nav>