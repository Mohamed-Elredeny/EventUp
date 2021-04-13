<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('admin.dashboard')}}">
            <center>Dashboard</center>
            <img src="{{asset('assets/vendors/images/cancel.svg')}}" alt="" class="dark-logo">
            <img src="{{asset('assets/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <!--Categories-->
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Halls</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('halls.index')}}">View all</a></li>
                        <li><a href="{{route('halls.create')}}">Add New Hall</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon  dw dw-happy"></span><span class="mtext">Events</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('events.index')}}">View all</a></li>
                        <li><a href="{{route('events.create')}}">Add New Event</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
