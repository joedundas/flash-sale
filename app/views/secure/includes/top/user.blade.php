<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="images/user2-160x160.jpg" class="user-image rounded-circle" alt="User Image">
    </a>
    <ul class="dropdown-menu scale-up">
        <!-- User image -->
        <li class="user-header">
            <img src="images/user2-160x160.jpg" class="rounded float-left" alt="User Image">

            <p>
                NAME HERE
                {{--<small>Member since DATE HERE</small>--}}
            </p>
        </li>

        <!-- Menu Body -->
        <li class="user-body">
            <div class="row">
                <div class="col text-center">
                    <a href="#">Connections</a>
                </div>
                {{--<div class="col text-center">--}}
                {{--<a href="#">Friends</a>--}}
                {{--</div>--}}
                {{--<div class="col text-center">--}}
                {{--<a href="#">Settings</a>--}}
                {{--</div>--}}
            </div>
            <!-- /.row -->
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" class="btn btn-block btn-primary">Profile</a>
            </div>
            <div class="pull-right">
                <a onclick="controller.page.logout()" class="btn btn-block btn-danger">Sign out</a>
            </div>
        </li>
    </ul>
</li>
