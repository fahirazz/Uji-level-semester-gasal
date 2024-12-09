@extends('main.main')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Edit Variant</h2>
    <form action="{{ route('variants.update', $variant->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $variant->name }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" class="form-control" value="{{ $variant->price }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar (opsional)</label>
            <input type="file" name="image" class="form-control">
            <p class="mt-2">Gambar saat ini:</p>
            <img src="{{ asset('storage/' . $variant->image) }}" alt="{{ $variant->name }}" width="100">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
