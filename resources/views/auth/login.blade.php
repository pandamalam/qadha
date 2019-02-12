@extends('layouts.nav')

@section('content')
<form class="uk-position-center" method="POST" action="{{ route('login') }}">
                        @csrf
    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" type="email" name="email" value="{{ old('email') }}" required autofocus>
             @if ($errors->has('email'))
              <script>UIkit.notification({message: 'Email or Password Invalid', pos: 'bottom-center'})</script>

                                @endif
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
            <input class="uk-input" type="password" name="password" required>

                                @if ($errors->has('password'))
                                   <script>UIkit.notification({message: 'Email or Password Invalid', pos: 'bottom-center'})</script>
                                @endif
        </div>
    </div>
        <button  type="submit" class="uk-button uk-button-primary uk-width-expand">{{ __('Login') }}</button>
</form>
@endsection
