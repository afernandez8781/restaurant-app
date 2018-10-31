<ul class="nav">
  <li class="nav-item {{ Request::is('admin') ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('admin.dashboard') }}">
      <i class="material-icons">dashboard</i>
      <p>Dashboard</p>
    </a>
  </li>

  <li class="nav-item {{ Request::is('admin/home*') ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('home.index')}}">
      <i class="material-icons">home</i>
      <p>Vista Home</p>
    </a>
  </li>

  <li class="nav-item {{ Request::is('admin/about*') ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('about.index')}}">
      <i class="material-icons">assignment_ind</i>
      <p>Vista about</p>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#0">
      <i class="material-icons">dashboard</i>
      <p>Dashboard</p>
    </a>
  </li>
</ul>