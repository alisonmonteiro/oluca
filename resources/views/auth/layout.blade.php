<!doctype html>
<html lang="pt-br" class="auth-page">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="{{ url("styles/admin.css") }}">
</head>
<body>
<div class="auth__container">
    <div class="auth__content">
        <div class="clearfix"></div>

        @yield('content')
    </div>
</div>
</body>
</html>