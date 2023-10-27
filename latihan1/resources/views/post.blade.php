@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $article->title }}</h2>
    
    <h5>By <a href="/authors/{{$article->user->username}}">{{$article->user->name}}</a> in <a href="/categories/{{$article->category->slug}}">{{ $article->category->name }}</a></h5>

    {{-- Menjalankan php echo tanpa escape character (tag html dijalankan)--}}
    {!! $article->body !!}
</article>

<a href="/posts"><button class="btn">Back to Post</button></a>
@endsection