
@extends('layout.app')

@section('content')
<div class="card">
    <div class="card-header">Detail Data Custom</div>
    <div class="card-body">
        <h5>Nama:</h5>
        <p>{{ $custom->name }}</p>
        <h5>Deskripsi:</h5>
        <p>{{ $custom->description }}</p>
        <a href="{{ route('customs.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection