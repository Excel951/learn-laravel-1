{{-- @dd('$articles') --}}

@extends('layouts.main')

@section('container')
    <h3 class="text-center">Authors</h3>
    <ul>
        @foreach ($authors as $author)
            <li>
                <div class="row align-items-end justify-content-between">
                    <div class="col-6">
                        <h5> <a href='/authors/{{$author->name}}'> {{ $author->name }} </a> </h5>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection