<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-user">
      <div class="sidebar-user-picture">
        <img alt="image" src="/assets/img/logo.png" width="30px">
      </div>
      <div class="sidebar-user-details">
        <div class="user-name">{{Auth::user()->name }}</div>
        <div class="user-role">
          Administrador
        </div>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="active">
        <a href="{{route('admin.dashboard')}}"><i class="ion ion-speedometer"></i><span>Inicio</span></a>
      </li>

      <li class="menu-header">Menú</li>
      <li>
        <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Alumnos</span></a>
        <ul class="menu-dropdown">
          <li><a href="{{route('alumno.index')}}"><i class="ion ion-ios-circle-outline"></i> Ver Alumnos</a></li>
          <li><a href="{{route('alumno.create')}}"><i class="ion ion-ios-circle-outline"></i>Registrar alumno</a></li>

        </ul>
      </li>
      <li>
        <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Examen</span></a>
        <ul class="menu-dropdown">
          <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i>Ver Examenes</a></li>
        </ul>
      </li>
      <li>
        <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Competidor</span></a>
        <ul class="menu-dropdown">
          <li><a href="{{route('competidor.index')}}"><i class="ion ion-ios-circle-outline"></i>Ver Competidores</a></li>
          <li><a href="{{route('competidor.create')}}"><i class="ion ion-ios-circle-outline"></i>Registrar Competidor</a></li>
        </ul>
      </li>
      <li>
        <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Pagos</span></a>
        <ul class="menu-dropdown">
          <li><a href="{{route('competidor.index')}}"><i class="ion ion-ios-circle-outline"></i>Pagos Relizados</a></li>
          <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i>Registrar Pago</a></li>
        </ul>
      </li>
  </aside>
</div>
