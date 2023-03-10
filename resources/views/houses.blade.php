@extends('layouts.app')


@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Lara-RealEstate</h1>
        <p class="col-md-8 fs-4">Come find our amazing houses offer</p>
        <button class="btn btn-primary btn-lg" type="button">Find out more</button>
    </div>
</div>

<div class="container py-5">
    <div class="row row-cols-1 row-cols-sm-3 g-4">

        @forelse($houses as $house)
        <div class="col">
            <div class="card">
                <div class="card-header">{{$house->id}}</div>
                <img src="{{ $house->image }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h3>Address: {{$house->address}}</h3>
                    <p>Price: {{$house->price}} $</p>
                </div>
            </div>
        </div>

        @empty

        <div class="col-12">
            <p>Sorry No houses yet!</p>
        </div>
        @endforelse


    </div>
</div>
@endsection
