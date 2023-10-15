{{-- @dd('$articles') --}}

@extends('layouts.main')

@section('container')
    @foreach ($articles as $article)
        <article>
            <div class="row align-items-end justify-content-between">
                <div class="col-6">
                    <h3> <a href='posts/{{$article['slug']}}'> {{ $article['title'] }} </a> </h3>
                </div>
                <div class="col-2">
                    <h6>By: {{ $article['author'] }}</h6>
                </div>
            </div>
            <p>{{ $article['body'] }}</p>
        </article>
    @endforeach
@endsection