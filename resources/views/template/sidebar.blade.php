<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " id="navigation" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        
            <li class="nav-item @if($page=='dashboard') {{'start active open'}} @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    @if($page == 'dashboard')
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                    @else
                    <span class="arrow"></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if($page=='dashboard') {{'start active open'}} @endif">
                        <a href="{{route('/')}}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Charts</span>
                            @if($page=='dashboard')
                            <span class="selected"></span>
                            @endif
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item @if($page=='family_table') {{'start active open'}} @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Family Information</span>
                    @if($page == 'family_table')
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                    @else
                    <span class="arrow"></span>\
                    @endif
                </a>
                <ul class="sub-menu">

                    <li class="nav-item  @if($page=='family_table') {{'start active open'}} @endif">
                        <a href="{{route('dt')}}" class="nav-link ">
                            <span class="title">Tables</span>
                            @if($page=='family_table') 
                                <span class="selected"></span> 
                            @endif
                        </a>
                    </li>
                </ul>
            </li>
           <li class="nav-item @if($page=='laravel_path') {{ 'start active open' }} @endif">
               <a href="javascript:;" class="nav-link nav-toggle">
                   <i class="icon-puzzle"></i>
                   <span class="title">Laravel RoadMap</span>
                   @if($page=='laravel_path')
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                   @else
                        <span class="arrow"></span>
                   @endif
               </a>
               <ul class="sub-menu">
                   <li class="nav-item  @if($page=='laravel_path') {{ 'start active open' }} @endif">
                       <a href="" class="nav-link ">
                           <span class="title">RoadMap List</span>
                           @if($page=='laravel_path') 
                                <span class="selected"></span>  
                           @endif
                       </a>
                   </li>
               </ul>
           </li>       
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
