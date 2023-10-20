@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $article->title }}</h2>
    
    <h5>By Deo in <a href="/categories/{{$article->category->slug}}">{{ $article->category->name }}</a></h5>

    {{-- Menjalankan php echo tanpa escape character (tag html dijalankan)--}}
    {!! $article->body !!}
</article>

<button class="btn"><a href="/posts">Back to Post</a></button>
@endsection