<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        @include('secure.includes.sidebar.user')

        <!-- sidebar menu: : style can be found in sidebar.less -->
        @include('secure.includes.sidebar.navigation')
    </section>
    <!-- /.sidebar -->
    @include('secure.includes.sidebar.footer')
</aside>