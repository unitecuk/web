@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    This Dashboard is only from Administrative use and available to fixed accounts.
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('nav')
    @include('navbars.login')
@endsection

