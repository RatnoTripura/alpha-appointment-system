<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="{{ asset('ui/frontend') }}/Assets/Images/specialities-05.svg"
                                width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">Victoria Baker</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Contents</div> <i class="icon-menu"
                        title="Main"></i>
                </li>

                <li class="nav-item">
                    <a href="{{ route('roles.index') }}"
                        class="nav-link @if ($title == 'Roles') active @endif">
                        <i class="icon-home4"></i>
                        <span>
                            Roles
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.users') }}"
                        class="nav-link @if ($title == 'Users') active @endif">
                        <i class="icon-home4"></i>
                        <span>
                            Users
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.messages') }}"
                        class="nav-link @if ($title == 'Messages') active @endif">
                        <i class="icon-home4"></i>
                        <span>
                            Messages
                        </span>
                    </a>
                </li>

                <!-- /main -->
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
