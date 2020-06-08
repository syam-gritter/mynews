<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title')</title>
    
    <script src="{{ secure_asset('js/app.js')}}"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway:300,400,600">
    
    <!--style-->
    <link href="{{ secure_asset( 'css/app.css')}}" rel="stylesheet">
    <link href="{{ secure_asset( 'css/admin.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expend-md navbar-dark navbar-laravel">
            
            <div class="container">
                <a class="navbar-brand" href="{{ url('/')}}">
                    {{ config('app.name','Laravel')}}
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-lavel="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!--Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                        
                    </ul>
                    
                     <!--Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        
                    </ul>
                    
                </div>
                
            </div>
            
        </nav>
        
        <main class="py-4">
            
            @yield('content')
        </main>
        
    </div>
    
</body>
</html>