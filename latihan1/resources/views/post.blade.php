@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $article->title }}</h2>
    
    {{-- Menjalankan php echo tanpa escape character (tag html dijalankan)--}}
    {!! $article->body !!}
</article>

<button class="btn"><a href="/posts">Back to Post</a></button>
@endsection