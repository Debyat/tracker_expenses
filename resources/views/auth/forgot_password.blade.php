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
                <h3>Forgot Password</h3>
            </div>
            <form action="{{ route('forgot.check') }}" method="post">
                @csrf
                <div class="body">
                    <div class="row">
                        <div class="col">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'input-error' : '' }}">
                            @if($errors->has('email'))
                                <span class="error_msg">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="button">
                        <button type="submit">Submit</button>
                    </div>
                    <div class="label">
                        <a href="{{ route('sign_in') }}" class="left">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
