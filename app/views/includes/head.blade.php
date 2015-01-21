<meta charset="UTF-8">
<title>@yield('title') - G-ZERO CMS</title>
@section('head')
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/jquery.metisMenu.css">
    <link rel="stylesheet" href="/css/main.css">
    <style>
        body {
            background-color : #f5f5f5;
        }

        .user-nav .dropdown-toggle {
            padding : 6px 20px;
        }

        .user-nav .dropdown-toggle img {
            margin-right       : 6px;
            width              : 35px;
            height             : 35px;
            -webkit-box-shadow : 0 2px 2px 0 rgba(0, 0, 0, 0.25);
            -moz-box-shadow    : 0 2px 2px 0 rgba(0, 0, 0, 0.25);
            box-shadow         : 0 2px 2px 0 rgba(0, 0, 0, 0.25);
        }

        .user-nav .dropdown-menu li a i {
            color : #efefef;
        }

        .user-nav .dropdown-menu li a:hover i {
            color : #686868;
        }

        .user-nav .dropdown-menu li.active a:hover i {
            color : #FFF;
        }

        .nav-stacked li {
            border-bottom : 1px solid #e7e7e7;

        }

        .nav-stacked ul li:last-child {
            border-bottom : none;

        }

        .nav-stacked li a {
            padding : 10px 20px;
        }

        .nav-stacked ul a {
            padding    : 10px 30px;
            background : #FAFAFA;
        }

        .nav-stacked ul li.active a {
            background-color : #EEE;
        }

        #wrapper {
            background-color : #FFF;
            padding-bottom   : 40px;
        }

        #footer {
            width  : 100%;
            height : 60px;
        }

        .container .text-muted {
            margin : 20px 0;
        }

        /* Main marketing message and sign up button */
        .jumbotron {
            text-align       : center;
            background-color : transparent;
        }

        .jumbotron .btn {
            padding   : 14px 24px;
            font-size : 21px;
        }
    </style>
@show
