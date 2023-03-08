<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="../css/jquery.fileupload.css" />
    <link rel="stylesheet" href="../css/jquery.fileupload-ui.css" />

    <!-- Styles -->
    <link href="../css/app.css" rel="stylesheet">
    <link href="../css/tutor.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">


</head>
<body>
   
      <header>
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
    <div class="position-sticky">

      <div class="list-group side-nav-logo-container side-bar-list list-group-flush mx-3 mt-4">
        <img src="../img/coldigifylogo.png" loading="lazy" width="80" height="80" class="site-logo"/>
      </a>
    <!--
        <form class="d-none d-md-flex input-group w-auto my-auto">
        <input autocomplete="off" type="search" class="form-control rounded"
          placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px;" />
        <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
      </form> -->
      <!-- Search form -->
      @if(empty($users->avatar))
        <img src="../profile_avatar/default.jpg"
              height="100" class="img-circle avatar img-rounded" alt="Avatar" loading="lazy" />
        @else
        <img src="../profile_avatar/{{$users->avatar}}"
              height="100" width="100" class="img-circle avatar img-rounded" alt="Avatar" loading="lazy" />
        @endif
            <small>{{ Auth::guard('admin')->user()->name}}</small>
            <small>{{ Auth::guard('admin')->user()->email}}</small>
      </div>
     <div class="list-group m-2 tutor-list-profile">
       <a  href="{{route('main_dashboard')}}" class="list-group-item list-group-item-action main py-2 ripple" aria-current="true">
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
        </a>
        <a href="{{route('admin_dashboard')}}" class="list-group-item list-group-item-action profile py-2 ripple active">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Profile</span>
        </a>
        <a href="{{route('exam')}}" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-lock fa-fw me-3"></i><span>Examine</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-chart-line fa-fw me-3"></i><span>Payment</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>Settings</span>
        </a>
     </div>
    </div>
  </nav>
      <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="#">

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">
        <li class="nav-item dropdown">
          <a onclick="dropDown()" class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            {{ Auth::guard('admin')->user()->name}}
             @if(empty($users->avatar))
        <img src="../profile_avatar/default.jpg"
              height="22" alt="Avatar" loading="lazy" />
        @else
        <img src="../profile_avatar/{{$users->avatar}}"
              height="22" class="img-circle img-rounded" alt="Avatar" loading="lazy" />
        @endif
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="{{route('main_dashboard')}}">Main Dashboard</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('admin_dashboard')}}">Profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('admin_logout')}}">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>-->
</header>
 <main class="py-4">
            @yield('content')
</main>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
  function dropDown(){
    $(".dropdown-menu").toggle();
  }
</script>
</body>

</html>
