
@extends('layout.app')

@section('content')
<div class="card">
    <div class="card-header">Tambah Data Custom</div>
    <div class="card-body">
        <form action="{{ route('customs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('customs.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection