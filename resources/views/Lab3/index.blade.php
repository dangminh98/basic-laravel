@extends('master')

@section('title', 'Login')

@section('content')
    {{-- main title  --}}
    <div class="main-title">
        <h1> Login </h1>
        <p> Home / Login</p>
    </div>
    {{-- end main title --}}

    {{-- show products --}}
    <div class="main-content">
        <div class="log-title">Login</div>
        <div class="title-form">
            <form action="{!! route('input.post') !!}" method="post">
                @csrf
                <p>Username</p>
                <input type="text" name="userName">
                <p>Password</p>
                <input type="password" name="password">
                <a href="">Doesn't have account yet? Register here</a> <br> <br>
                <button type="submit"> Login </button>
            </form>
        </div>
    </div>
    {{-- end show products --}}


@endsection