@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $article['title'] }}</h2>
    <h6>By: {{$article['author']}}</h6>
    <p>{{ $article['body'] }}</p>
</article>

<button class="btn"><a href="/posts">Back to Post</a></button>
@endsection