<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hydro Planters</title>

        @include('partials.stylesheetlte')

        @include('partials.script')
    </head>



    <body class="hold-transition sidebar-mini">

        <div class="wrapper">
            
            @include('layouts.headerlte')
            
            @include('layouts.sidebarlte')

            @yield('content')

            @include('layouts.footerlte')




        </div>
    </body>


</html>