
@switch($navbar-content)

    {{-- メッセージメニュー --}}
    @case('message-dropdown')
        <li class="dropdown messages-menu">

            {{-- Toggle button --}}
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
            </a>

            <ul class="dropdown-menu">

                {{-- Message header --}}
                <li class="header">You have 4 messages</li>
                <li>
                    <ul class="menu">
                        <li>

                            {{-- Message body --}}
                            <a href="#">

                                {{-- User image --}}
                                <div class="pull-left">
                                    <img src="@if(isset(Auth::user()->email)) {{ Gravatar::fallback(asset('la-assuser2-160x160.jpg'))->get(Auth::user()->email) }} @else asset('/img/user2-160x160.jpg' @endi="img-circle" alt="User Image"/>
                                </div>

                                {{-- Message title and timestamp --}}
                                <h4>
                                    Support Team
                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                </h4>

                                {{-- Message --}}
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Message footer --}}
                <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
        </li>
        @break

    {{-- 通知メニュー --}}
    @case('notification-dropdown')
        <li class="dropdown notifications-menu">

            {{-- Toggle button --}}
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
            </a>

            <ul class="dropdown-menu">

                {{-- Message Header --}}
                <li class="header">You have 10 notifications</li>
                <li>
                    <ul class="menu">
                        <li>

                            {{-- Message body --}}
                            <a href="#">
                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Message footer --}}
                <li class="footer"><a href="#">View all</a></li>
            </ul>
        </li>
        @break

    {{-- チケットメニュー --}}
    @case('ticketit-menu')
        <li class="dropdown tasks-menu">
            
            {{-- Toggle button --}}
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
            </a>

            <ul class="dropdown-menu">

                {{-- Message header --}}
                <li class="header">You have 9 tasks</li>
                <li>
                    <ul class="menu">
                        <li>

                            {{-- Message body --}}
                            <a href="#">

                                {{-- Ticketit title and progress text --}}
                                <h3>
                                    Design some buttons
                                    <small class="pull-right">20%</small>
                                </h3>

                                {{-- Progress bar --}}
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

                {{-- Message footer --}}
                <li class="footer">
                    <a href="#">View all tasks</a>
                </li>
            </ul>
        </li>
        @break

    {{-- ユーザアカウントメニュー --}}
    @case('user-menu')
        <li class="dropdown user user-menu">
            
            {{-- Toggle button --}}
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
                {{-- User image --}}
                <img src="{{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email) }}" class="user-image" alt="User Image"/>
                
                {{-- User name, hide on samll devices --}}
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
                
                {{-- Message header --}}
                <li class="user-header">

                    {{-- User image --}}
                    <img src="{{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email) }}" class="img-circle" alt="User Image" />
                    <p>
                        {{ Auth::user()->name }}
                        <?php
                        $datec = Auth::user()['created_at'];
                        ?>
                        <small>Member since <?php echo date("M. Y", strtotime($datec)); ?></small>
                    </p>
                </li>
                
                {{-- Message body --}}
                {{-- @role("SUPER_ADMIN") --}}
                <li class="user-body">
                    <div class="col-xs-6 text-center mb10">
                        <a href="{{ url('/laeditor') }}"><i class="fa fa-code"></i> <span>Editor</span></a>
                    </div>
                    <div class="col-xs-6 text-center mb10">
                        <a href="{{ url('/modules') }}"><i class="fa fa-cubes"></i> <span>Modules</span></a>
                    </div>
                    <div class="col-xs-6 text-center">
                        <a href="{{ url('/la_menus') }}"><i class="fa fa-bars"></i> <span>Menus</span></a>
                    </div>
                </li>
                {{-- @endrole --}}

                {{-- Message footer --}}
                <li class="user-footer">
                    
                    {{-- プロファイルボタン --}}
                    <div class="pull-left">
                        <a href="{{ url('/users') .'/'. Auth::user()->id }}" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    
                    {{-- サインアウトボタン --}}
                    <div class="pull-right">
                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                </li>
            </ul>
        </li>
        @break
@endswitch

@switch($tab-content)

    {{-- Recent Activity --}}
    @case('recent-activity')
        <h3 class="control-sidebar-heading">Recent Activity</h3>
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
    @case('task-progress')
        <h3 class="control-sidebar-heading">Tasks Progress</h3>
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
    @case('general-settings')
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
@endswitch

@switch($sidebar-content)

    {{-- ユーザー情報パネル --}}
    @case('user-panel')
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email) }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        @break

    {{-- 検索フォーム --}}
    @case('search-form')
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
    @case('menu-list')
        <ul class="sidebar-menu">
            <li class="header">MODULES</li>
            <li><a href="{{ url('/dashboard')) }}"><i class='fa fa-home'></i> <span>Dashboard</span></a></li>
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
@endswitch