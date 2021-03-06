@inject('sidebar', 'App\Services\SidebarService')

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="{{ $sidebar->admin('dashboard') }}">
                <a href="{{ route('admin.home') }}"><i class="fa fa-th-large"></i> <span>{{ __('sidebar.dashboard') }}</span></a>
            </li>
            <li class="{{ $sidebar->admin('campaigns') }}">
                <a href="{{ route('admin.campaigns.index') }}"><i class="fa fa-globe"></i> <span>{{ __('sidebar.campaigns') }}</span></a>
            </li>
            <li class="{{ $sidebar->admin('patrons') }}">
                <a href="{{ route('admin.patrons.index') }}"><i class="fab fa-patreon"></i> <span>Patrons</span></a>
            </li>
            <li class="{{ $sidebar->admin('community-votes') }}">
                <a href="{{ route('admin.community-votes.index') }}"><i class="fas fa-check-square"></i> <span>Community Votes</span></a>
            </li>
        </ul><!-- /.sidebar-menu -->

    </section>
    <!-- /.sidebar -->
</aside>
