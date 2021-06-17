@extends('layouts.app')


@section('content')
    @include('layouts.side')   
    <div class="col-md-10">
        <div class="panel panel-primary">
            <div class="panel-heading">2FA Secret Key</div>

            <div class="panel-body">
                2FA has been removed
                <br /><br />
                <a href="{{ url('/home') }}">Go Home</a>
            </div>
        </div>
    </div>  
@endsection