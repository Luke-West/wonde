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

                    @if ($wonde_user_id === null)
                        <p>{{ __("You first need to authenticate with Wonde. Please enter your passcode here") }}<br>
                        <small>({{ __("The employee's ID") }})</small></p>
                    @endif

                    <input id="wonde-id" type="text" class="form-control" placeholder="Wonde ID" value="{{ $wonde_user_id }}">
                    <br>
                    <button class="btn btn-success save-wonde-id" type="button">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
