@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('News') }}</div>

                <div class="card-body">
                    <div>Ini halaman news {{$id}} <br> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
