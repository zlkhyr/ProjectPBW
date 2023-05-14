<nav class="navbar navbar-expand-xl" style=" width:100%; background-color: #e3f2fd; box-shadow: 2px 0px 4px #198754; position:fixed; z-index: 9999; top:0">
    <div class="container-fluid mx-4">
      @include('componen.web-icon')
      <a href="/" class="navbar-brand" style="font-size: 30px">Pinjam.com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @include('componen.nav-menu')
        @include('componen.search')
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
              @include('componen.user-icon')
            </a>
            <ul class="dropdown-menu p-4">
              <li>
                <a class="nav-link" href="/profile">
                  @include('componen.profile-icon')
                  Profile
                </a>
              </li>
              <li>
                <a class="nav-link" href="/posts/barang">
                  @include('componen.profile-icon')
                  MyBarang
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
        @include('componen.login&register')
        @endauth
      </div>
    </div>
</nav>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Sigmar&display=swap');
  .namaWeb{
    font-family: 'Sigmar', cursive;
  }
</style>