@extends('auth.index')
@section('title','Forgot Password')
@section('content')
    <div class="content">
        <div class="container">
            @if($errors->has('msg'))
                <div class="error">
                    {{ $errors->first('msg') }}
                </div>
            @endif
            <div class="title">
                <h3>Create New Password</h3>
            </div>
            <form action="{{ route('create.password.store') }}" method="post">
                @csrf
                <div class="body">
                    <div class="row">
                        <div class="col">
                            <label for="">New Password</label>
                            <input type="password" name="password" value="{{ old('password') }}" class="{{ $errors->has('password') ? 'input-error' : '' }}">
                            @if($errors->has('password'))
                                <span class="error_msg">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                        <div class="col">
                            <label for="">Confirm Password</label>
                            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="{{ $errors->has('password_confirmation') ? 'input-error' : '' }}">
                            @if($errors->has('password_confirmation'))
                                <span class="error_msg">
                                    {{ $errors->first('password_confirmation') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="button">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
