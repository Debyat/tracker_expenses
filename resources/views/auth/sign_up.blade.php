@extends('auth.index')
@section('title','Sign Up')
@section('content')
    <div class="content">
        <div class="container">
            <div class="title">
                <h3>Sign Up</h3>
            </div>
            <form action="{{ route('sign_up.store') }}" method="post">
                @csrf
                <div class="body">
                    <div class="row">
                        <div class="col">
                            <label for="">First Name</label>
                            <input type="text" name="email">
                        </div>
                        <div class="col">
                            <label for="">Last Name</label>
                            <input type="text" name="email">
                        </div>
                        <div class="col">
                            <label for="">Email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="col">
                            <label for="">Password</label>
                            <input type="password" name="password">
                        </div>
                        <div class="col">
                            <label for="">Re-enter Password</label>
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
                        <a href="{{ route('sign_in') }}" class="right">Sign In</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
