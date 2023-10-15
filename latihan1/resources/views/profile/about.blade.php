@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col text-center">
            <h1>Page Profile</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <img src="{{$image}}" alt="{{$name}}" class="img-thumbnail rounded-circle" style="height: 300px; width: 300px">
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <h4>{{$name}}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>{{$email}}</h6>
        </div>
    </div>
@endsection