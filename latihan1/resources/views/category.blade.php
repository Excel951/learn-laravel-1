{{-- @dd('$articles') --}}

@extends('layouts.main')

@section('container')
    <h2 class="text-center mb-5">Category : {{$page_name}}</h2>
    @foreach ($articles as $article)
    <article class="mb-5 border-bottom pb-3">
        <div class="row align-items-end justify-content-between mb-3">
            <div class="col-6">
                <h3> <a href='/posts/{{$article->slug}}' class="text-decoration-none"> {{ $article->title }} </a> </h3>
                <h5>By <a href="/authors/{{$article->user->name}}" class="text-decoration-none">{{$article->user->name}}</a> in <a href="/categories/{{$article->category->slug}}" class="text-decoration-none">{{ $article->category->name }}</a></h5>
            </div>
        </div>
        <p class="text-truncate">{!! $article->excerpt !!}</p>
        <a href='/posts/{{$article->slug}}' class="text-decoration-none"> Read more ... </a>
    </article>
    @endforeach
@endsection