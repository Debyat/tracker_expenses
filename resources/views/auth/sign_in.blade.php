@extends('auth.index')
@section('title','Sign In')
@section('content')
    <div class="content">
        <div class="logo-container">
            <div class="logo">
            </div>
        </div>
        <div class="container">
            @if($errors->has('msg'))
                <div class="error msg-box">
                    {{ $errors->first('msg') }}
                </div>
            @endif
            @if(session('success'))
                <div class="success msg-box">
                    {{ session('success') }}
                </div>
            @endif
            <div class="title">
                <h3>Sign In</h3>
            </div>
            <form action="{{ route('sign_in.store') }}" method="post">
                @csrf
                <div class="body">
                    <div class="row">
                        <div class="col">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'input-error' : '' }}">
                            @if($errors->has('email'))
                                <span class="error_msg">
                                    *{{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <div class="col">
                            <label for="">Password</label>
                            <input type="password" name="password" class="{{ $errors->has('password') ? 'input-error' : '' }}">
                            @if($errors->has('password'))
                                <span class="error_msg">
                                    *{{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="button">
                        <button type="submit">Sign In</button>
                    </div>
                    <div class="label">
                        <a href="{{ route('forgot.password') }}" class="left">Forgot Password</a>
                        <a href="{{ route('sign_up') }}" class="right">Sign Up</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
