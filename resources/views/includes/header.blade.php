
<header class="main-header">

    <a href="{{route('dashboard')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>M</b>A<b>E</b>D</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>MAED </b> Food Ordering</span>
    </a>

    <nav class="navbar nnavbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    @if(\Illuminate\Support\Facades\Auth::user())

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="{{route('logout')}}">Logout</a></li>
              @if($user->user_type == 2)
              <li><a href="{{route('account')}}">Account</a></li>
              @endif
      </ul>
    </div><!-- /.navbar-collapse -->
    @endif
  </div><!-- /.container-fluid -->
</nav>
</header>