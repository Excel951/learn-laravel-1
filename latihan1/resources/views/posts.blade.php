{{-- @dd(@isset($page_name)) --}}

@extends('layouts.main')

@section('container')
<h2 class="text-center mt-3 mb-5">
	{{ $page_name ?? '' }}
</h2>

@if ($articles->count())
<div class="card mb-3">
	<img src="https://source.unsplash.com/1200x400/?{{ $articles[0]->category->name }}" class="card-img-top" alt="...">
	<div class="card-body text-center">
		<h3 class="card-title">
			<a href="/posts/{{ $articles[0]->slug }}" class="text-decoration-none text-black">
				{{ $articles[0]->title }}
			</a>
		</h3>
		<small class="text-body-secondary">
				<p>
						By <a href="/authors/{{$articles[0]->user->username}}" class="text-decoration-none">{{$articles[0]->user->name}}</a> in <a href="/categories/{{$articles[0]->category->slug}}" class="text-decoration-none"> {{ $articles[0]->category->name }} </a> | 
						{{ $articles[0]->created_at->diffForHumans() }}
				</p>
		</small>
		<p class="card-text">{{ $articles[0]->excerpt }}</p>
		<a href='/posts/{{$articles[0]->slug}}' class="text-decoration-none btn btn-primary"> Read more ... </a>
	</div>
</div>
@else
<p class="text-center fs-4">No post found..</p>
@endif

<div class="container">
	<div class="row">
		@foreach ($articles->skip(1) as $article)
		<div class="col-md-4 mb-3">
			<div class="card">
				<div class="position-absolute px-3 py-1" style="background-color: rgba(0,0,0,0.5)"><a href="/categories/{{$article->category->slug}}" class="text-decoration-none text-white"> {{ $article->category->name }}</a></div>
				<img src="https://source.unsplash.com/1200x400/?{{ $article->category->name }}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">
						<a href='/posts/{{$article->slug}}' class="text-decoration-none">
							{{ $article->title }} 
						</a>
					</h5>
					<small>
						By <a href="/authors/{{$article->user->username}}" class="text-decoration-none">{{$article->user->name}}</a>
						<br>
						{{$article->created_at->diffForHumans() }} 
					</small>
					<p class="card-text text-truncate">
						{!! $article->excerpt !!}
					</p>
					<a href="/posts/{{$article->slug}}" class="btn btn-primary">Read more...</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection