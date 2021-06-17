@extends('layouts.app')


@section('content')
    @include('layouts.side')   
    <div class="col-md-10">
        <div class="panel panel-primary">
            <div class="panel-heading">2FA Secret Key</div>

            <div class="panel-body">
                Open up your 2FA mobile app and scan the following QR barcode:
                <br />
                <img alt="Image of QR barcode" src="{{ $image }}" />

                <br />
                If your 2FA mobile app does not support QR barcodes, 
                enter in the following number: <code>{{ $secret }}</code>
                <br /><br />
                <a href="{{ url('/home') }}">Go Home</a>
            </div>
        </div>
    </div>
@endsection