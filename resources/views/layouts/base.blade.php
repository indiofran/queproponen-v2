<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="¿Qué Proponen?">
    <meta property="og:description" content="Todas las propuestas y programas electorales de los Candidatos a Presidente de la Nación 2019.">
{{--    <meta property="og:image" content="http://euro-travel-example.com/thumbnail.jpg">--}}
    <meta property="og:url" content="https://queproponen.com.ar/">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <navbar-component></navbar-component>
    <router-view></router-view>
    <add-proposal></add-proposal>
{{--    <div class="footer center blue lighten-4">--}}
{{--        <p>Hecho con <3 por Pares del Partido de la Red</p>--}}
{{--    </div>--}}
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
