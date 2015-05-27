        <div class="left-side">

            <!--logo and iconic logo start-->
            {{--<div class="logo">--}}
                {{--<a href=""><img src="images/logo.png" alt=""></a>--}}
            {{--</div>--}}

            {{--<div class="logo-icon text-center">--}}
                {{--<a href=""><img src="images/logo.png" alt=""></a>--}}
            {{--</div>--}}
            <!--logo and iconic logo end-->


            <div class="left-side-inner">

                <!-- visible to small devices only -->
                <div class="visible-xs hidden-sm hidden-md hidden-lg">
                    <div class="media logged-user">
                        <img alt="" src="images/photos/user-avatar.png" class="media-object">
                        <div class="media-body">
                            <h4>{{ Auth::user()->name }}</h4>
                        </div>
                    </div>
                    <ul class="nav nav-pills nav-stacked custom-nav">
                        <li><a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                    </ul>
                </div>

                <!--sidebar nav start-->

                <ul class="nav nav-pills nav-stacked custom-nav">
                 @if(Auth::user()->department_id < 4)
                    <li><a href="{{ url('home') }}"><i class="fa fa-home"></i> <span> Dashboard</span></a></li>
                    <li><a href="{{ url('clients') }}"><i class="fa fa-book"></i> <span> Clients</span></a></li>
                    <li class=""><a href="{{ url('products') }}"><i class="fa fa-laptop"></i> <span> Freight Processing</span></a></li>
                    <li><a href="{{ route('mails') }}"><i class="fa fa-envelope"></i> <span> Mail</span></a>
                    </li>
                    @if(Auth::user()->privilege == 1)
                    <li><a href="{{ url('home/index') }}"><i class="fa fa-truck"></i> <span> Transportation Status</span></a></li>
                    <li class="menu-list"><a href=""><i class="fa fa-archive"></i> <span> Warehousing</span></a>
                        <ul class="sub-menu-list">
                            <li><a href="{{ url('home/index') }}"> Storage Processing</a></li>
                            <li><a href="{{ url('home/index') }}"> Inventory List</a></li>
                            <li><a href="{{ url('home/index') }}"> Ware Dispatch Authorisation</a></li>
                            <li><a href="{{ url('home/index') }}"> Loss Or Damage Report</a></li>
                            <li><a href="{{ url('home/index') }}"> Generation Of Report</a></li>
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->privilege == 3)
                    <li><a href="{{ url('home/index') }}"><i class="fa fa-table"></i> <span>Reports</span></a></li>
                    <li><a href="{{ url('home/index') }}"><i class="fa fa-comment"></i> <span>Freight Claim Processing</span></a></li>
                    @endif
                @endif()
                @if(Auth::user()->privilege == 4)
                <li><a href="{{ url('') }}"><i class="fa fa-gear"></i> <span>Settings</span></a></li>
                <li><a href="{{ url('admin/users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
                @endif
                </ul>

                <!--sidebar nav end-->

            </div>
        </div>