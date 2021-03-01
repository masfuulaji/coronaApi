<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('style/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    @yield('css')
</head>

<body>

    <div class="wrapper">
        {{-- sidebar --}}
        @include('layout.sidebar')

        <section class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </section>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @yield('js')
</body>
</html>
