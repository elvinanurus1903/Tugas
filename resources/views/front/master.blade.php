<html>
 <head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>@yield('title')</title>
 </head>
 <body>
 	@include('layout.header')
     @yield('main')
     @include('layout.footer')
 </body>
</html>