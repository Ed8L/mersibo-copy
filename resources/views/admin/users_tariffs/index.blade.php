@extends('layouts.admin')
@section('content')
    <div class="container mt-3">

        <div style="display: flex; justify-content: space-between">
            <h1>User Tariffs</h1>
            <a href="{{ route('admin.users_tariffs.create') }}">Create User Tariff</a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">UID</th>
                <th scope="col">Tariff type</th>
                <th scope="col">Tariff id</th>
                <th scope="col">End time</th>
                <th scope="col">Created at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users_tariffs as $user_tariff)
                <tr>
                    <th scope="row">{{ $user_tariff->user_id }}</th>
                    <td>{{ $user_tariff->tariff_type }}</td>
                    <td>{{ $user_tariff->tariff_id }}</td>
                    <td>{{ $user_tariff->end_time }}</td>
                    <td>{{ $user_tariff->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
