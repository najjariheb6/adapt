<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">
@include('layouts.dashbord.head')

<body class="page-home">
    @include('layouts\dashbord\svg')
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        @include('layouts.dashbord.header')
            @yield('sub_header')
        @include('layouts.dashbord.sideBar')
        
        @yield('main')
    </div>
    @yield('modals')
    @include('layouts.dashbord.scripts')
</body>

</html>