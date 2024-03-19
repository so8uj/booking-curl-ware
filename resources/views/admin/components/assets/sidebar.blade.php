<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="adjust-nav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-white" style="color: #fff" href="{{ url('/admin/dashboard') }}">
                Booking Website <br> Admi Panel

            </a>
        </div>
    </div>
</div>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="{{ (request()->is('admin/dashboard') ? 'active-link' : '') }}"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="{{ (request()->is('admin/hotels*') ? 'active-link' : '') }}"><a href="{{ url('/admin/hotels') }}"><i class="fa fa-home"></i>Hotels</a></li>
            <li class="{{ (request()->is('admin/booking-request') ? 'active-link' : '') }}"><a href="{{ url('/admin/booking-request') }}"><i class="fa fa-home"></i>Booking Requests @if (get_booking_requests() > 0)
                <span class="badge">{{ get_booking_requests() }}</span>
            @endif </a></li>
            <li class="{{ (request()->is('admin/bookings') ? 'active-link' : '') }}"><a href="{{ url('/admin/bookings') }}"><i class="fa fa-home"></i>All Bookings </a></li>
            <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i>Logout</a></li>

        </ul>
    </div>

</nav>