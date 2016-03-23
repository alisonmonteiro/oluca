@extends('auth.layout')

@section('content')
    @include('partials.alerts')

    <form role="form" method="POST" action="{{ url('admin/auth') }}">
        <div class="form-group">
            <input type="email" name="email" placeholder="E-mail" class="form-control input-lg" required autofocus>
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Senha" class="form-control input-lg" required>
        </div>

        <div class="checkbox">
            <label class="pull-left">
                <input type="checkbox" name="remember">Lembrar de mim
            </label>

            <div class="clearfix"></div>
        </div>

        <input type="submit" value="Entrar" class="btn btn-primary btn-block btn-lg">

        <a href="{{ url('admin/password') }}" title="Forgot password" class="auth__forgot-pass">Esqueci minha senha</a>
    </form>
@endsection