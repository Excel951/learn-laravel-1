@extends('layouts.main')

@section('container')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 my-5">
			<h2>{{ $article->title }}</h2>

			<small>By <a href="/authors/{{$article->user->username}}">{{$article->user->name}}</a> in <a href="/categories/{{$article->category->slug}}">{{ $article->category->name }}</a></small>

			<img src="https://source.unsplash.com/1200x400/?{{ $article->category->name }}" class="img-fluid my-3" alt="...">

			{{-- Menjalankan php echo tanpa escape character (tag html dijalankan)--}}
			<article>
				{!! $article->body !!}
			</article>

			<a href="/posts"><button class="btn btn-primary">Back to Post</button></a>
		</div>
	</div>
</div>

@endsection