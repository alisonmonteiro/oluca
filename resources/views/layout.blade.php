<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Oluca - Admin</title>

    <link rel="stylesheet" href="{{ url("css/app.css") }}">
</head>
<body>
    @include('partials.header')

    <main class="main-content">
        @yield('content')
    </main>

    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>