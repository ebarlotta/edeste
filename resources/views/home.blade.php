{{-- @extends('layouts.app') --}}
@extends('adminlte::page')
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

                    {{ __('You are logged in!') }}

                    <h2>FELICITACIONES MASTER!!!</h2>
                    <h2>FELICITACIONES MASTERsssssss of the universe!!!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
