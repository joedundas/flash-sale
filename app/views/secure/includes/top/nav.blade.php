<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            @include('secure.includes.top.messages')

            <!-- Notifications: style can be found in dropdown.less -->
            @include('secure.includes.top.notifications')

            <!-- Tasks: style can be found in dropdown.less -->
            @include('secure.includes.top.tasks')

            <!-- User Account: style can be found in dropdown.less -->
            @include('secure.includes.top.user')

        </ul>
    </div>
</nav>