<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="INDO MABES CLAN">
        <title> @yield('title') </title>
        <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
    </head>
    <body>
        <div class="header">
            @include('includes.topnav')
        </div>
        <div id="wrapper">
            <div class="container">
                <div class="page-title text-center">
                    @yield('page-title')
                </div>
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
