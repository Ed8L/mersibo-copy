@extends('layouts.admin')
@section('content')
    <div class="container mt-3">

        <h1>Users</h1>

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <table>

            <tbody>

            </tbody>

        </table>

    </div>
@endsection
