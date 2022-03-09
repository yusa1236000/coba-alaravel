@extends('layouts.main')

@section('container')
    
<h1 class="mb-5">Post Categories</h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/posts?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="http://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0, 0.7)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
         </div>
        @endforeach
    </div>
</div>

@endsection



{{-- Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => 3,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime,',
    'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime, quam laborum est quod atque eius beatae explicabo provident,</p> <p>ipsam autem voluptate nemo? Quod expedita et magnam ducimus mollitia nisi delectus debitis, voluptatum architecto accusantium deserunt. Aut dolorum tempore fuga sunt unde, odit vel in! Dicta odit laudantium, assumenda voluptatem commodi excepturi iste consequuntur repellat provident ab, maxime asperiores neque ipsam eos. Velit voluptatem enim facilis, molestias aperiam minima vel similique repellendus nostrum molestiae voluptates quaerat natus ab culpa.</p>'
]) --}}