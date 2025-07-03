@extends('layout.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Customs</h2>
    <a href="{{ route('customs.create') }}" class="btn btn-primary">Tambah Data</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customs as $custom)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $custom->name }}</td>
            <td>{{ $custom->description }}</td>
            <td>
                <a href="{{ route('customs.show', $custom->id) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('customs.edit', $custom->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('customs.destroy', $custom->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection