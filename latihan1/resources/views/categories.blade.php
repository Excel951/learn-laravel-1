{{-- @dd('$articles') --}}

@extends('layouts.main')

@section('container')
    <h3 class="text-center">Categories</h3>
    <ul>
        @foreach ($categories as $category)
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