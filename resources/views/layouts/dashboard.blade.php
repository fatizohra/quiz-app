<!DOCTYPE html>
<html lang="en">
<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

    <title>Quiz app</title>

     <!-- Bootstrap core CSS -->
     <link href="{{asset('assets/front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

 
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                background-color: #ffffff;
            }

            .header {
                text-align: center;
                margin-bottom: 20px;
            }

            .header img {
                height: 50px;
            }

        
            /* .buttons {
                margin-top: 20px;
            }

            .buttons a {
                display: inline-block;
                text-decoration: none;
                font-size: 16px;
                padding: 10px 20px;
                border-radius: 5px;
                margin: 5px;
            }

            .get-started {
                background-color: #58cc02;
                color: white;
            }

            .site-countries {
            margin-left: 60px;
                top: 10px;
                right: 10px;
                font-size: 14px;
                color: #777;
            } */
        </style>
    @yield('style')
       <!-- Plugin CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   @livewireStyles
</head>

<body id="page-top">

   @include('includes.header')
    @yield('content')
    @livewireScripts

  <script src="{{asset('assets/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

