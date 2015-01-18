<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<div id="wrapper">
    <header>
        @include('includes.navbar')
    </header>
    <!-- main content -->
    <div id="content" class="container">
        @section('content')
            <div class="jumbotron">
                <h1>Marketing stuff!</h1>

                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac
                    cursus
                    commodo,
                    tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>

                <p>
                    <a class="btn btn-lg btn-success" href="{{ URL::route('register') }}" role="button">Get started today</a>
                </p>
            </div>
        @show
    </div>
</div>
<div id="footer">
    @include('includes.footer')
</div>
</body>
</html>
