@extends('layouts.default')
@section('content')
    @component('components.user.navbar')
    @endcomponent
    @admin
        @component('components.admin.navbar')
        @endcomponent
    @endadmin

    <div>
        This is dashboard
    </div>

@endsection
