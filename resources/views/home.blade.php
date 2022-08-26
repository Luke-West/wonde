@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-warning valid-id-error" role="alert">
                        {{ __("Please enter a valid ID") }}
                    </div>

                    @if ($wonde_user_id === null)
                        <p>{{ __("You first need to authenticate with Wonde. Please enter your passcode here") }}<br>
                        <small>({{ __("The employee's ID") }})</small></p>
                    @endif

                    <input id="wonde-id" type="text" class="form-control" placeholder="Wonde ID" value="{{ $wonde_user_id }}">
                    <br>
                    <button class="btn btn-success save-wonde-id" type="button">{{ __('Save') }}</button>
                    @if ($wonde_user_id)
                        <hr>
                        <a href="{{ url('/classes') }}" class="btn btn-info text-white">{{ __('My Classes') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
