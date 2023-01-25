<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
		        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        <title>Our Marbles</title>
       
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
    </head>
    <body>
        <div id="app">
            <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-12">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Manage Accounts / Designs</h1>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    @yield('breadcrumbs')
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
            <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
            @yield('scripts')
        </div>
    </body>
</html>
