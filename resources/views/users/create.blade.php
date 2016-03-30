@extends('layout')

@section('content')
    <a href="{{ route('admin.users.index') }}">List</a>
    <form action="{{ route('admin.users.index') }}" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" />
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" />
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="radio" name="status" value="0" /> Inactive
            <input type="radio" name="status" value="1" /> Active
        </div>
        <div class="form-group">
            <label>Role</label>
            <input type="radio" name="role" value="1" /> User
            <input type="radio" name="role" value="2" /> Admin
        </div>
        <div class="form-group">
            <label for="expires">Role</label>
            <input type="date" name="expires" id="expires" />
        </div>
        <input type="submit" name="submit">
    </form>
@endsection