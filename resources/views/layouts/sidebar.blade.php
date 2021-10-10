<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
        <li class="{{ Request::is('dashboard/index-0') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/index-0">General Dashboard</a></li>
        <li class="{{ Request::is('dashboard/index') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/index">Ecommerce Dashboard</a></li>
        </ul>
    </li>
    <li class="menu-header">Starter</li>
    <li class="nav-item dropdown {{ Request::is('layout*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
        <ul class="dropdown-menu">
        <li class="{{ Request::is('layout/default') ? 'active' : '' }}"><a class="nav-link" href="/layout/default">Default Layout</a></li>
        <li class="{{ Request::is('layout/transparent') ? 'active' : '' }}"><a class="nav-link" href="/layout/transparent">Transparent Sidebar</a></li>
        <li class="{{ Request::is('layout/top-navigation') ? 'active' : '' }}"><a class="nav-link" href="/layout/top-navigation">Top Navigation</a></li>
        </ul>
    </li>
    <li class="{{ Request::is('blank') ? 'active' : '' }}"><a class="nav-link" href="/blank"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
    <li class="nav-item dropdown {{ Request::is('bootstrap*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
        <ul class="dropdown-menu">
        <li class="{{ Request::is('bootstrap/alert') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/alert">Alert</a></li>
        <li class="{{ Request::is('bootstrap/badge') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/badge">Badge</a></li>
        <li class="{{ Request::is('bootstrap/breadcrumb') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/breadcrumb">Breadcrumb</a></li>
        <li class="{{ Request::is('bootstrap/buttons') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/buttons">Buttons</a></li>
        <li class="{{ Request::is('bootstrap/card') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/card">Card</a></li>
        <li class="{{ Request::is('bootstrap/carousel') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/carousel">Carousel</a></li>
        <li class="{{ Request::is('bootstrap/collapse') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/collapse">Collapse</a></li>
        <li class="{{ Request::is('bootstrap/dropdown') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/dropdown">Dropdown</a></li>
        <li class="{{ Request::is('bootstrap/form') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/form">Form</a></li>
        <li class="{{ Request::is('bootstrap/list-group') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/list-group">List Group</a></li>
        <li class="{{ Request::is('bootstrap/media-object') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/media-object">Media Object</a></li>
        <li class="{{ Request::is('bootstrap/modal') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/modal">Modal</a></li>
        <li class="{{ Request::is('bootstrap/nav') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/nav">Nav</a></li>
        <li class="{{ Request::is('bootstrap/navbar') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/navbar">Navbar</a></li>
        <li class="{{ Request::is('bootstrap/pagination') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/pagination">Pagination</a></li>
        <li class="{{ Request::is('bootstrap/popover') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/popover">Popover</a></li>
        <li class="{{ Request::is('bootstrap/progress') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/progress">Progress</a></li>
        <li class="{{ Request::is('bootstrap/table') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/table">Table</a></li>
        <li class="{{ Request::is('bootstrap/tooltip') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/tooltip">Tooltip</a></li>
        <li class="{{ Request::is('bootstrap/typography') ? 'active' : '' }}"><a class="nav-link" href="/bootstrap/typography">Typography</a></li>
        </ul>
    </li>
    <li class="menu-header">Stisla</li>
    <li class="nav-item dropdown {{ Request::is('components*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
        <ul class="dropdown-menu">
        <li class="{{ Request::is('components/article') ? 'active' : '' }}"><a class="nav-link" href="/components/article">Article</a></li>
        <li class="{{ Request::is('components/avatar') ? 'active' : '' }}"><a class="nav-link beep beep-sidebar" href="/components/avatar">Avatar</a></li>
        <li class="{{ Request::is('components/chat-box') ? 'active' : '' }}"><a class="nav-link" href="/components/chat-box">Chat Box</a></li>
        <li class="{{ Request::is('components/empty-state') ? 'active' : '' }}"><a class="nav-link beep beep-sidebar" href="/components/empty-state">Empty State</a></li>
        <li class="{{ Request::is('components/gallery') ? 'active' : '' }}"><a class="nav-link" href="/components/gallery">Gallery</a></li>
        <li class="{{ Request::is('components/hero') ? 'active' : '' }}"><a class="nav-link beep beep-sidebar" href="/components/hero">Hero</a></li>
        <li class="{{ Request::is('components/multiple-upload') ? 'active' : '' }}"><a class="nav-link" href="/components/multiple-upload">Multiple Upload</a></li>
        <li class="{{ Request::is('components/pricing') ? 'active' : '' }}"><a class="nav-link beep beep-sidebar" href="/components/pricing">Pricing</a></li>
        <li class="{{ Request::is('components/statistic') ? 'active' : '' }}"><a class="nav-link" href="/components/statistic">Statistic</a></li>
        <li class="{{ Request::is('components/tab') ? 'active' : '' }}"><a class="nav-link" href="/components/tab">Tab</a></li>
        <li class="{{ Request::is('components/table') ? 'active' : '' }}"><a class="nav-link" href="/components/table">Table</a></li>
        <li class="{{ Request::is('components/user') ? 'active' : '' }}"><a class="nav-link" href="/components/user">User</a></li>
        <li class="{{ Request::is('components/wizard') ? 'active' : '' }}"><a class="nav-link beep beep-sidebar" href="/components/wizard">Wizard</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown {{ Request::is('forms*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
        <ul class="dropdown-menu">
        <li class="{{ Request::is('forms/advanced-form') ? 'active' : '' }}"><a class="nav-link" href="/forms/advanced-form">Advanced Form</a></li>
        <li class="{{ Request::is('forms/editor') ? 'active' : '' }}"><a class="nav-link" href="/forms/editor">Editor</a></li>
        <li class="{{ Request::is('forms/validation') ? 'active' : '' }}"><a class="nav-link" href="/forms/validation">Validation</a></li>
        </ul>
    </li>
    {{-- <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
        <ul class="dropdown-menu">
        <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
        <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
        <li><a href="gmaps-geocoding.html">Geocoding</a></li>
        <li><a href="gmaps-geolocation.html">Geolocation</a></li>
        <li><a href="gmaps-marker.html">Marker</a></li>
        <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
        <li><a href="gmaps-route.html">Route</a></li>
        <li><a href="gmaps-simple.html">Simple</a></li>
        </ul>
    </li> --}}
    <li class="nav-item dropdown {{ Request::is('modules*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
        <ul class="dropdown-menu">
        <li class="{{ Request::is('modules/calendar') ? 'active' : '' }}"><a class="nav-link" href="/modules/calendar">Calendar</a></li>
        <li class="{{ Request::is('modules/chartjs') ? 'active' : '' }}"><a class="nav-link" href="/modules/chartjs">ChartJS</a></li>
        <li class="{{ Request::is('modules/datatables') ? 'active' : '' }}"><a class="nav-link" href="/modules/datatables">DataTables</a></li>
        <li class="{{ Request::is('modules/flag') ? 'active' : '' }}"><a class="nav-link" href="/modules/flag">Flag</a></li>
        <li class="{{ Request::is('modules/font-awesome') ? 'active' : '' }}"><a class="nav-link" href="/modules/font-awesome">Font Awesome</a></li>
        <li class="{{ Request::is('modules/ion-icon') ? 'active' : '' }}"><a class="nav-link" href="/modules/ion-icon">Ion Icons</a></li>
        <li class="{{ Request::is('modules/owl-carousel') ? 'active' : '' }}"><a class="nav-link" href="/modules/owl-carousel">Owl Carousel</a></li>
        <li class="{{ Request::is('modules/sparkline') ? 'active' : '' }}"><a class="nav-link" href="/modules/sparkline">Sparkline</a></li>
        <li class="{{ Request::is('modules/sweet-alert') ? 'active' : '' }}"><a class="nav-link" href="/modules/sweet-alert">Sweet Alert</a></li>
        <li class="{{ Request::is('modules/toastr') ? 'active' : '' }}"><a class="nav-link" href="/modules/toastr">Toastr</a></li>
        <li class="{{ Request::is('modules/vector-map') ? 'active' : '' }}"><a class="nav-link" href="/modules/vector-map">Vector Map</a></li>
        <li class="{{ Request::is('modules/weather-icon') ? 'active' : '' }}"><a class="nav-link" href="/modules/weather-icon">Weather Icon</a></li>
        </ul>
    </li>
    <li class="menu-header">Pages</li>
    <li class="nav-item dropdown {{ Request::is('auth*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
        <ul class="dropdown-menu">
        <li class="{{ Request::is('auth/forgot-password') ? 'active' : '' }}"><a href="/auth/forgot-password">Forgot Password</a></li>
        <li class="{{ Request::is('auth/login') ? 'active' : '' }}"><a href="/auth/login">Login</a></li>
        <li class="{{ Request::is('auth/login-2') ? 'active' : '' }}"><a class="beep beep-sidebar" href="/auth/login-2">Login 2</a></li>
        <li class="{{ Request::is('auth/register') ? 'active' : '' }}"><a href="/auth/register">Register</a></li>
        <li class="{{ Request::is('auth/reset-password') ? 'active' : '' }}"><a href="/auth/reset-password">Reset Password</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown {{ Request::is('errors*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
        <ul class="dropdown-menu">
        <li class="{{ Request::is('errors/503') ? 'active' : '' }}"><a class="nav-link" href="/errors/503">503</a></li>
        <li class="{{ Request::is('errors/403') ? 'active' : '' }}"><a class="nav-link" href="/errors/403">403</a></li>
        <li class="{{ Request::is('errors/404') ? 'active' : '' }}"><a class="nav-link" href="/errors/404">404</a></li>
        <li class="{{ Request::is('errors/500') ? 'active' : '' }}"><a class="nav-link" href="/errors/500">500</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown {{ Request::is('features*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
        <ul class="dropdown-menu">
        <li class="{{ Request::is('features/activities') ? 'active' : '' }}"><a class="nav-link" href="/features/activities">Activities</a></li>
        <li class="{{ Request::is('features/post-create') ? 'active' : '' }}"><a class="nav-link" href="/features/post-create">Post Create</a></li>
        <li class="{{ Request::is('features/posts') ? 'active' : '' }}"><a class="nav-link" href="/features/posts">Posts</a></li>
        <li class="{{ Request::is('features/profile') ? 'active' : '' }}"><a class="nav-link" href="/features/profile">Profile</a></li>
        <li class="{{ Request::is('features/settings') ? 'active' : '' }}"><a class="nav-link" href="/features/settings">Settings</a></li>
        <li class="{{ Request::is('features/setting-detail') ? 'active' : '' }}"><a class="nav-link" href="/features/setting-detail">Setting Detail</a></li>
        <li class="{{ Request::is('features/tickets') ? 'active' : '' }}"><a class="nav-link" href="/features/tickets">Tickets</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown {{ Request::is('utilities*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
        <ul class="dropdown-menu">
        <li class="{{ Request::is('utilities/contact') ? 'active' : '' }}"><a href="/utilities/contact">Contact</a></li>
        <li class="{{ Request::is('utilities/invoice') ? 'active' : '' }}"><a class="nav-link" href="/utilities/invoice">Invoice</a></li>
        <li class="{{ Request::is('utilities/subcribe') ? 'active' : '' }}"><a href="/utilities/subcribe">Subscribe</a></li>
        </ul>
    </li>
    <li class="{{ Request::is('credits') ? 'active' : '' }}"><a class="nav-link" href="/credits"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
</ul>