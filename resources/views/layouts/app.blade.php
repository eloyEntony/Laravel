<html>

<head>
    <title>App Name - @yield('title')</title>

    <!-- Bootstrap -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .whole-page-overlay {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            position: fixed;
            background: rgba(0, 0, 0, 0.6);
            width: 100%;
            height: 100% !important;
            z-index: 1050;
            display: none;
        }

        .whole-page-overlay .center-loader {
            top: 50%;
            left: 47%;
            position: absolute;
            color: white;
        }
    </style>
</head>

<body style="background: #050801; color:white">


    <div class="whole-page-overlay" id="whole_page_loader">
        <img class="center-loader" style="height:100px;" src="storage/files/loader.gif" />
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">MAIN PAGE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects.index') }}">Proects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cars.index') }}">Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('photos.index') }}">Cars API</a>
                </li>

            </ul>
        </div>
    </nav>
    @section('sidebar')

    @show

    <div class="container">


        @yield('content')
    </div>

</body>

</html>