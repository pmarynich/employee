<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layout.partials.head')
 </head>
 <body>
@include('layout.partials.nav')
@include('layout.partials.header')
@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>