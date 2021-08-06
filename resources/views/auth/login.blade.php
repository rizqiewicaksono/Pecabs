@extends('layouts.auth')

@section('title')
<title>Login</title>
@endsection

@section('content')

<div class="login-box mx-auto">
    <form action="{{ route('login') }}" method="post" class="login-form">
        @csrf
        <h1>Login</h1>
        <div class="form-group textbox">

            <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
            type="text"
            name="email"
            placeholder="Email"
            value="{{ old('email') }}"
            autofocus
            required>
        </div>
        <div class="form-group textbox">

            <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
            type="password"
            name="password"
            placeholder="Password"
            required>
        </div>
        <div class="row">
            @if (session('error'))
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            </div>
            @endif
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Login</button>
        </div>
    </form>
</div>



@endsection
