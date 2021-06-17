@extends('layouts.app')


@section('content')
    @include('layouts.side')   
    <div class="col-md-10">
        <div class="panel panel-primary">
            <div class="panel-heading">Two Factor Authentication</div>

            <div class="panel-body">
                @if (Auth::user()->google2fa_secret)
                <a href="{{ url('2fa/disable') }}" class="btn btn-warning">Disable 2FA</a>
                @else
                <a href="{{ url('2fa/enable') }}" class="btn btn-primary">Enable 2FA</a>
                @endif
            </div>
        </div>
    </div>
@endsection