@extends('auth.index')
@section('title','Sign In')
@section('content')
    <div class="content">
        <div class="logo-container">
            <div class="logo">
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h3>Sign In</h3>
            </div>
            <form action="{{ route('sign_in.store') }}" method="post">
                @csrf
                <div class="body">
                    <div class="row">
                        <div class="col">
                            <label for="">Email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="col">
                            <label for="">Password</label>
                            <input type="password" name="password">
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="button">
                        <button type="submit">Sign In</button>
                    </div>
                    <div class="label">
                        <a href="#" class="left">Forgot Password</a>
                        <a href="{{ route('sign_up') }}" class="right">Sign Up</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
