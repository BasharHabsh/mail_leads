@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron bg-dark text-center">
        <h1 class="display-4">Welcome to Mail Leads</h1>
        <p class="lead">This is a simple application to manage and send emails to company leads.</p>
        <hr class="my-4">
        @guest
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a>
            <a class="btn btn-secondary btn-lg" href="{{ route('register') }}" role="button">Register</a>
        @else
            <a class="btn btn-primary btn-lg" href="{{ route('dashboard') }}" role="button">Go to Dashboard</a>
        @endguest
    </div>
@endsection
