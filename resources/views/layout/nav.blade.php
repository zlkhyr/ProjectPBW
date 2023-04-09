<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd; box-shadow: 2px 2px 4px #198754; position: relative; z-index: 999">
    <div class="container-fluid mx-4">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
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
          <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="border-top-right-radius: 0px; border-bottom-right-radius:0px; width: 800px">
          <button class="btn btn-outline-success" type="submit" style="border-top-left-radius: 0px; border-bottom-left-radius:0px;">Search</button>
        </form>
        <div class="d-flex justify-content-center ms-auto column-gap-2">
            <a class="btn btn-outline-success" href="/login" role="button">Login</a>
            <a class="btn btn-success" href="/register" role="button">Register</a>
        </div>
      </div>
    </div>
</nav>