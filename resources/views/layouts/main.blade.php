<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('page-title')</title>
        @include('partials.head-import')
    </head>
    <body>
       
        @include('partials.main-header')

        <main>
            @yield('main-content')
        </main>

        @include('partials.main-footer')

        @include('partials.body-import')
    </body>
</html>