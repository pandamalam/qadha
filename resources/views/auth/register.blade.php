@extends('layouts.nav')

@section('content')
<form method="POST" action="{{ route('register') }}" class="uk-position-center uk-form-horizontal">
                        @csrf

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Name</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" name="name" value="{{ old('name') }}"required autofocus>
            @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="email" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
            <script>UIkit.notification({message: 'The email has already been taken.', pos: 'bottom-center'})</script>
                                @endif
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="password" name="password" required>
            @if ($errors->has('password'))
            <script>UIkit.notification({message: 'The password confirmation does not match.', pos: 'bottom-center'})</script>
                                @endif
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Password Confirm</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="password" name="password_confirmation" required>
        </div>
    </div>
     <button  type="submit" class="uk-button uk-button-primary uk-width-expand">{{ __('Register') }}</button>
 </form>

<!-- 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
