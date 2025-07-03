<?php

namespace App\Http\Controllers;

use App\Models\Custom;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    // Menampilkan semua data custom
    public function index()
    {
        $customs = Custom::all();
        return view('customs.index', compact('customs'));
    }

    // Menampilkan form tambah data custom
    public function create()
    {
        return view('customs.create');
    }

    // Menyimpan data custom baru

// ...existing code...

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:1000',
    ]);

    Custom::create($request->all());
    return redirect()->route('customs.index')->with('success', 'Data berhasil ditambahkan.');
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:1000',
    ]);

    $custom = Custom::findOrFail($id);
    $custom->update($request->all());
    return redirect()->route('customs.index')->with('success', 'Data berhasil diupdate.');
}

// ...existing code...
}