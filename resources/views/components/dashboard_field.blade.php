{{-- Dashboad field --}}
@switch($field)

{{-- Navbar content --}}

    {{-- メッセージメニュー --}}
    @case('messages_menu')
        <li class="dropdown messages-menu">

            {{-- Menu toggle button --}}
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
            </a>

            {{-- Dropdown menu --}}
            <ul class="dropdown-menu">
                
                {{-- Header title --}}
                <li class="header">You have 4 messages</li>
                
                {{-- Content --}}
                <li>
                    <ul class="menu">
                        <li>
                            
                            {{-- Message item --}}
                            <a href="#">
                                
                                {{-- User Image(160x160) --}}
                                <div class="pull-left">
                                    <img src="@if(isset(Auth::user()->email)) {{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email) }} @else asset('/img/user2-160x160.jpg' @endif" class="img-circle" alt="User Image"/>
                                </div>
                                
                                {{-- Message title and timestamp --}}
                                <h4>
                                    Support Team
                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                </h4>
                                
                                {{-- The message --}}
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Footer --}}
                <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
        </li>
        @break

    {{-- 通知メニュー --}}
    @case('notifications_menu')
        <li class="dropdown notifications-menu">
            
            {{-- Menu toggle button --}}
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
            </a>

            {{-- Dropdown menu --}}
            <ul class="dropdown-menu">

                {{-- Header title --}}
                <li class="header">You have 10 notifications</li>
                
                {{-- Content --}}
                <li>
                    <ul class="menu">
                        <li>
                            
                            {{-- Notification item --}}
                            <a href="#">
                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Footer --}}
                <li class="footer"><a href="#">View all</a></li>
            </ul>
        </li>
        @break

    {{-- チケットメニュー --}}
    @case('ticketits_menu')
        <li class="dropdown tasks-menu">
            
            {{-- Menu toggle button --}}
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
            </a>

            {{-- Dropdown menu --}}
            <ul class="dropdown-menu">

                {{-- Header title --}}
                <li class="header">You have 9 tasks</li>

                {{-- Content --}}
                <li>
                    <ul class="menu">
                        <li>

                            {{-- ticketit item --}}
                            <a href="#">
                                
                                {{-- ticketit title and progress text --}}
                                <h3>
                                    Design some buttons
                                    <small class="pull-right">20%</small>
                                </h3>
                                
                                {{-- The progress bar --}}
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                                                role="progressbar"
                                                                                aria-valuenow="20"
                                                                                aria-valuemin="0"
                                                                                aria-valuemax="100">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Footer --}}
                <li class="footer">
                    <a href="#">View all tasks</a>
                </li>
            </ul>
        </li>
        @break

    {{-- ユーザアカウントメニュー --}}
    @case('user_menu')
        <li class="dropdown user user-menu">
            
            {{-- Menu toggle button --}}
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
                {{-- User image(160x160) --}}
                <img src="{{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email) }}" class="user-image" alt="User Image"/>
                
                {{-- User name, hides on small devices --}}
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>

            {{-- Dropdown menu --}}
            <ul class="dropdown-menu">

                {{-- Header --}}
                <li class="user-header">
                    
                    {{-- User image(160x160) --}}
                    <img src="{{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email) }}" class="img-circle" alt="User Image" />
                    <p>
                        {{ Auth::user()->name }}
                        <?php
                        $datec = Auth::user()['created_at'];
                        ?>
                        <small>Member since <?php echo date("M. Y", strtotime($datec)); ?></small>
                    </p>
                </li>
                
                {{-- Content --}}
                {{-- @role("SUPER_ADMIN") --}}
                <li class="user-body">
                    <div class="col-xs-6 text-center mb10">
                        <a href="{{ url(config('laraadmin.adminRoute') . '/laeditor') }}"><i class="fa fa-code"></i> <span>Editor</span></a>
                    </div>
                    <div class="col-xs-6 text-center mb10">
                        <a href="{{ url(config('laraadmin.adminRoute') . '/modules') }}"><i class="fa fa-cubes"></i> <span>Modules</span></a>
                    </div>
                    <div class="col-xs-6 text-center">
                        <a href="{{ url(config('laraadmin.adminRoute') . '/la_menus') }}"><i class="fa fa-bars"></i> <span>Menus</span></a>
                    </div>
                </li>
                {{-- @endrole --}}
                
                {{-- Footer --}}
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="{{ url(config('laraadmin.adminRoute') . '/users/') .'/'. Auth::user()->id }}" class="btn btn-default btn-flat">{{ trans('message.profile') }}</a>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">{{ trans('message.signout') }}</a>
                    </div>
                </li>
            </ul>
        </li>
        @break


{{-- Control sidebar content --}}

    {{-- Recent Activity --}}
    @case('recent_activity')

        {{-- Header title --}}
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        
        {{-- Content --}}
        <ul class='control-sidebar-menu'>
            <li>
                <a href='javascript::;'>
                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                    <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                        <p>Will be 23 on April 24th</p>
                    </div>
                </a>
            </li>
        </ul>
        @break

    {{-- Tasks Progress --}}
    @case('tasks_progress')

        {{-- Content header --}}
        <h3 class="control-sidebar-heading">Tasks Progress</h3>

        {{-- Content body --}}
        <ul class='control-sidebar-menu'>
            <li>
                <a href='javascript::;'>
                    <h4 class="control-sidebar-subheading">
                        Custom Template Design
                        <span class="label label-danger pull-right">70%</span>
                    </h4>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                    </div>
                </a>
            </li>
        </ul>
        @break

    {{-- General Settings --}}
    @case('general_settings')
        <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>
            <div class="form-group">
                <label class="control-sidebar-subheading">
                    Report panel usage
                    <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                    Some information about this general settings option
                </p>
            </div>
        </form>
    @break


{{-- Sidebar --}}

    {{-- ユーザー情報パネル --}}
    @case('user-panel')
        <div class="user-panel">

            {{-- User image(160x160) --}}
            <div class="pull-left image">
                <img src="{{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email) }}" class="img-circle" alt="User Image" />
            </div>

            {{-- Online status --}}
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        @break

    {{-- 検索フォーム --}}
    @case('search_form')
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        @break

    {{-- メニューリスト --}}
    @case('menu_list')
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MODULES</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url(config('laraadmin.adminRoute')) }}"><i class='fa fa-home'></i> <span>Dashboard</span></a></li>
            <?php
            $menuItems = Dwij\Laraadmin\Models\Menu::where("parent", 0)->orderBy('hierarchy', 'asc')->get();
            ?>
            @foreach ($menuItems as $menu)
                @if($menu->type == "module")
                    <?php
                    $temp_module_obj = Module::get($menu->name);
                    ?>
                    {{-- @la_access($temp_module_obj->id) --}}
                        @if(isset($module->id) && $module->name == $menu->name)
                            <?php echo LAHelper::print_menu($menu ,true); ?>
                        @else
                            <?php echo LAHelper::print_menu($menu); ?>
                        @endif
                    {{-- @endla_access --}}
                @else
                    <?php echo LAHelper::print_menu($menu); ?>
                @endif
            @endforeach
        </ul>
        @break

    {{-- スライダーメニューリスト --}}
    @case('slider_menu_list')
        <li class="treeview">
            <a href="#"><i class='fa fa-link'></i> <span>{{ trans('message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">{{ trans('message.linklevel2') }}</a></li>
                <li><a href="#">{{ trans('message.linklevel2') }}</a></li>
            </ul>
        </li>
        @break
@endswitch