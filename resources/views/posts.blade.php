@extends('layouts.app')


@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Lara-RealEstate Blog</h1>
        <p class="col-md-8 fs-4">Come find our amazing houses offer</p>
        <button class="btn btn-primary btn-lg" type="button">Find out more</button>
    </div>
</div>

<div class="container py-5">
    <div class="row row-cols-1 row-cols-sm-3 g-4">

        @forelse($posts as $post)
        <div class="col">
            <div class="card">
                <img src="{{ $post->cover_image }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->content}}</p>
                </div>
            </div>
        </div>

        @empty

        <div class="col-12">
            <p>Sorry No posts yet!</p>
        </div>
        @endforelse


    </div>
</div>
@endsection
