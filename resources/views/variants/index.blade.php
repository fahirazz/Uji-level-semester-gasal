@extends('main.main')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Daftar Variants</h2>
    <a href="{{ route('variants.create') }}" class="btn btn-primary mb-3">Tambah Variant</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($variants as $variant)
            <tr>
                <td>{{ $variant->name }}</td>
                <td>Rp {{ number_format($variant->price, 0, ',', '.') }}</td>
                <td>
                    <img src="{{ asset('storage/' . $variant->image) }}" alt="{{ $variant->name }}" width="100">
                </td>
                <td>
                    <a href="{{ route('variants.edit', $variant->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('variants.destroy', $variant->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
