<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<div id="wrapper">
    <header class="row">
        @include('includes.navbar')
    </header>
    <div class="container">
        <div class="row">
            <!-- sidebar content -->
            <div id="sidebarLeft" class="col-md-3 sidebar">
                @yield('sidebarLeft')
            </div>

            <!-- main content -->
            <div id="content" class="col-md-9">
                @yield('content')
            </div>

        </div>

        <footer>
            @include('includes.footer')
        </footer>
    </div>
</div>
</body>
</html>
