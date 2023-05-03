<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Dashboard</a>
    </li>
    @auth
    <li class="nav-item">
      <a class="nav-link {{ request()->is('/posts/barang') ? 'active' : '' }}" href="/posts/barang">MyBarang</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">MyBorrowing</a>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link disabled">MyBarang</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled">MyBorrowing</a>
    </li>
    @endauth
</ul>