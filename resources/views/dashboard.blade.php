@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="text-center">
        <h1>Selamat Login</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>
@endsection
