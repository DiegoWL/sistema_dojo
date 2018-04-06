<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
      <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
    </ul>
    {{-- <div class="search-element">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn" type="submit"><i class="ion ion-search"></i></button>
    </div> --}}
  </form>
  <ul class="navbar-nav navbar-right">

    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
      <i class="ion ion-android-person d-lg-none"></i>
      <div class="d-sm-none d-lg-inline-block">Hola {{ Auth::user()->name}}</div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="{{route('logout')}}" class="dropdown-item has-icon">
          <i class="ion ion-log-out"></i> Salir
        </a>
      </div>
    </li>
  </ul>
</nav>
