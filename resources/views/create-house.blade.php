@extends('layouts.app')

@section('content')

<div class="container py-5 min-vh-100">
    <h1>Createa a new house</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="123 ocean av" aria-describedby="helpId">
            <small id="helpId" class="text-muted">type an address</small>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="text" name="image" id="image" class="form-control" placeholder="123 ocean av" aria-describedby="helpId">
            <small id="helpId" class="text-muted">type an image</small>
        </div>
        <button type="submit" class="btn btn-primary">Add House</button>
    </form>
</div>
@endsection
