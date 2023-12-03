{{-- @dd('$articles') --}}

@extends('layouts.main')

@section('container')
    <h3 class="text-center">Categories</h3>
    <ul>
        @foreach ($categories as $category)
            <div class="card text-bg-dark">
                <img src="https://source.unsplash.com/1200x400/?{{$category->name}}" class="card-img" alt="...">
                <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small>Last updated 3 mins ago</small></p>
                </div>
            </div>
            <li>
                <div class="row align-items-end justify-content-between">
                    <div class="col-6">
                        <h5> <a href='/categories/{{$category->slug}}'> {{ $category->name }} </a> </h5>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection