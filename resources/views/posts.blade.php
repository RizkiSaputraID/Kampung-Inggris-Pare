@extends('layouts.main')

@section('container')

    <h1 class="mb-5">Kampung Inggris</h1>

<div class="container">
    <div class="row">
        @foreach ($posts->skip(0) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color:rgba(0, 0, 0, 0.7)">{{ $post->category->name }}</div>
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                    <h5 class="card-title">{{  $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}</p>
                            </small>
                        </p>

                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Readme More.</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - KampungInggrisKu</div></div>
</footer>

@endsection


