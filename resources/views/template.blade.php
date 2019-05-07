<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blast Furnace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ url('css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ url('js/jquery_2_2_1.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
</head>
<body>
<div class="container">
    @section('navbar')
        @include('navbar')
    @show

    @yield('content')
</div>
</body>


@stack('custom-scripts')

</html>
