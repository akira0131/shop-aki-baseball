{{-- Control sidebar --}}
<aside class="control-sidebar control-sidebar-dark">
    
    {{-- Create the tabs --}}
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    
    {{-- Tab panes --}}
    <div class="tab-content">

        {{-- Home tab --}}
        <div class="tab-pane active" id="control-sidebar-home-tab">
            
            {{-- Recent Activity --}}
            @component('components.dashboard_field')
                @slot('field', 'recent_activity')
            @endcomponent

            {{-- Tasks Progress --}}
            @component('components.dashboard_field')
                @slot('field', 'tasks_progress')
            @endcomponent
        </div>

        {{-- Stats tab --}}
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>

        {{-- Settings tab content --}}
        <div class="tab-pane" id="control-sidebar-settings-tab">
            
            {{-- General Settings --}}
            @component('components.dashboard_field')
                @slot('field', 'general_settings')
            @endcomponent
        </div>
    </div>
</aside>

<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>