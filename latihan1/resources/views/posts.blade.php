{{-- @dd(@isset($page_name)) --}}

@extends('layouts.main')

@section('container')
<h2 class="text-center mt-3 mb-5">
  {{ $page_name ?? '' }}
</h2>

@if ($articles->count())
<div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{ $articles[0]->title }}</h3>
    <small class="text-body-secondary">
        <p>
            By <a href="/authors/{{$articles[0]->user->username}}" class="text-decoration-none">{{$articles[0]->user->name}}</a> in <a href="/categories/{{$articles[0]->category->slug}}" class="text-decoration-none"> {{ $articles[0]->category->name }} </a>
            {{ $articles[0]->created_at->diffForHumans() }}
        </p>
    </small>
    <p class="card-text">{{ $articles[0]->excerpt }}</p>
    <a href='/posts/{{$articles[0]->slug}}' class="text-decoration-none"> Read more ... </a>
  </div>
</div>
@else
<p class="text-center fs-4">No post found..</p>
@endif

@foreach ($articles as $article)
<article class="mb-5 border-bottom pb-3">
  <div class="row align-items-end justify-content-between mb-3">
    <div class="col-6">
      <h3> <a href='/posts/{{$article->slug}}' class="text-decoration-none">
          {{ $article->title }} </a> </h3>
      <h5>By <a href="/authors/{{$article->user->username}}" class="text-decoration-none">{{$article->user->name}}</a> in <a href="/categories/{{$article->category->slug}}" class="text-decoration-none">
          {{ $article->category->name }}</a></h5>
    </div>
  </div>
  <p class="text-truncate">{!! $article->excerpt !!}</p>
  <a href='/posts/{{$article->slug}}' class="text-decoration-none"> Read more ... </a>
</article>
@endforeach
@endsection