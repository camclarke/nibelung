@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div>
        <h1>User: {{$user->name}}</h1>
        </div>
        <div class="d-flex">
            <div class="pr-5"><strong>125</strong> First value</div>
            <div class="pr-5"><strong>456</strong> Second value</div>
            <div class="pr-5"><strong>789</strong> Third value</div>
        </div>
    </div>
@endsection
