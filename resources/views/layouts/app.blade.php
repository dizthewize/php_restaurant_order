<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AllUCanEat') }}</title>

    <!-- Styles -->

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/foundation.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('styles')


</head>
<body>

    @include('partials.header')

    <div class="container">

      @include('inc.messages')

      @yield('content')

    </div>

    @include('partials.footer')


    <!-- Scripts -->
    <script src="https://js.stripe.com/v3/"></script>

    <script type="text/javascript" src="{{ asset('js/stripe.js') }}">
    </script>

    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

    <script src="{{ asset('js/foundation.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/matchheight.js') }}"></script>

    <script src="jquery.matchHeight.js" type="text/javascript"></script>

</body>
</html>
