
@extends('layout.app')

@section('content')
<div class="card">
    <div class="card-header">Tambah Data Custom</div>
    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('customs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            </div>
            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('customs.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection