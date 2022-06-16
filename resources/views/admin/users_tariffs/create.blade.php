@extends('layouts.admin')
@section('content')
    <div class="container mt-3">
        <h1>Create User</h1>
        <form action="{{ route('admin.users_tariff.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="mukambetov6@gmail.com">
            </div>

            <div class="mb-3">
                <label for="tariff_type" class="form-label">Tariff Type</label>
                <select class="form-select" name="tariff_type" id="tariff_type">
                    <option value="tariff">Tariff</option>
                    <option value="tariff_option">Tariff Option</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tariff_id" class="form-label">Tariff ID</label>
                <select class="form-select" name="tariff_id" id="tariff_id">
                    <option value="start">Start</option>
                    <option value="standard">Standard</option>
                    <option value="premium">Premium</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="end_time" class="form-label">End Time</label>
                <input type="date" class="form-control" name="end_time" id="end_time">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
