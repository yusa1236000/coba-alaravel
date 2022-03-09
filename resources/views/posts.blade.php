@extends('layouts.main')

@section('container')
    
<h1 class="mb-3 text-center">{{ $title }}</h1>

  <div class="container">
    <div class="row justify-content-center b-3">
      <div class="col-md-6">
        <form action="/posts">
          @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
  </div>


@if ($posts->count())

<div class="card mb-3">
    <img src="http://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        
        <p>
        <small>
              By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}
        </small>
        </p>
        
          <p class="card-text">{{ $posts[0]->excerpt }}</p>

          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
  </div>
  
  <div class="container">
      <div class="row">
          @foreach($posts->skip(1) as $post)
          <div class="col-md-4 mb-3">
            <div class="card">
            <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0.3)"><a href="//posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                <img src="http://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                    <small>
                          By. <a href="/posts?author=/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>{{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else 
<p class="text-center fs-4">No Post Found</p>
@endif

<div class="d-flex justify-content-end">
  {{ $posts->links() }}
</div>

@endsection



{{-- Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => 3,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime,',
    'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime, quam laborum est quod atque eius beatae explicabo provident,</p> <p>ipsam autem voluptate nemo? Quod expedita et magnam ducimus mollitia nisi delectus debitis, voluptatum architecto accusantium deserunt. Aut dolorum tempore fuga sunt unde, odit vel in! Dicta odit laudantium, assumenda voluptatem commodi excepturi iste consequuntur repellat provident ab, maxime asperiores neque ipsam eos. Velit voluptatem enim facilis, molestias aperiam minima vel similique repellendus nostrum molestiae voluptates quaerat natus ab culpa.</p>'
]) --}}