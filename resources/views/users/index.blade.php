@extends('layout')

@section('content')
    <a href="{{ route('admin.users.create') }}">Create</a>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="#">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection