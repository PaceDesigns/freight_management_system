<div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--search start-->
        <form class="searchform" action="index.html" method="post">
            <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
        </form>
        <!--search end-->

        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('images/photos/user-avatar.png') }}" alt="" />
                        {{ Auth::user()->name }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="{{ url('/admin/users', ['id'=>Auth::id()]) }}"><i class="fa fa-sign-out"></i> My Profile</a></li>
                        @if(Auth::id == 4)
                        <li><a href="{{ url('/admin/users') }}"><i class="fa fa-sign-out"></i> Settings</a></li>
                        @endif
                        <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--notification menu end -->

        </div>