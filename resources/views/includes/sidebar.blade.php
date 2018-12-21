<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{$user->first_name.' '.$user->middle_name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>


                    @if($user->user_type==1)
                <li class="treeview">
                        <a href="{{route('dashboard')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                                <span class="pull-right-container">
                                     <i class="fa fa-angle-left pull-right"></i>
                                </span>
                        </a>
                </li>
                    @elseif($activation == 1)
                <li class="treeview">
                        <a href="{{route('orders')}}">
                            <i class="fa fa-list"></i>
                            <span>Orders</span>
                                <span class="pull-right-container">
                                </span>
                        </a>
                    </li>
                <li class="treeview">
                        <a href="{{route('menu')}}">
                            <i class="fa fa-book"></i>
                            <span>Menus</span>
                                <span class="pull-right-container">
                                </span>
                        </a>
                </li>
                <li class="treeview">
                        <a href="{{route('customers')}}">
                            <i class="fa fa-users"></i>
                            <span>Customers</span>
                                <span class="pull-right-container">
                                </span>
                        </a>
                </li>
                    @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>