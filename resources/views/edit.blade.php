@extends('layout.app')

@section('content')
<div class="card">
    <div class="card-header">Edit Data Custom</div>
    <div class="card-body">
        <form action="{{ route('customs.update', $custom->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $custom->name }}" required>
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control">{{ $custom->description }}</textarea>
            </div>
            <button class="btn btn-primary">Update</button>
            <a href="{{ route('customs.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection