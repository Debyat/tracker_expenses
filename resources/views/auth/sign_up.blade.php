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
                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="{{ $errors->has('first_name') ? 'input-error' : '' }}">
                            @if($errors->has('first_name'))
                                <span class="error_msg">
                                    *{{ $errors->first('first_name') }}
                                </span>
                            @endif
                        </div>
                        <div class="col">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" value="{{ old('last_name') }}" class="{{ $errors->has('last_name') ? 'input-error' : '' }}">
                            @if($errors->has('last_name'))
                                <span class="error_msg">
                                    *{{ $errors->first('last_name') }}
                                </span>
                            @endif
                        </div>
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
                        <div class="col">
                            <label for="">Re-enter Password</label>
                            <input type="password" name="password_confirmation" class="{{ $errors->has('password_confirmation') ? 'input-error' : '' }}">
                            @if($errors->has('password_confirmation'))
                                <span class="error_msg">
                                    *{{ $errors->first('password_confirmation') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="button">
                        <button type="submit">Sign Up</button>
                    </div>
                    <div class="label">
                        <a href="{{ route('sign_in') }}" class="right">Sign In</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
