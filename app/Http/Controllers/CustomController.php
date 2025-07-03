<?php

namespace App\Http\Controllers;

use App\Models\Custom;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index()
    {
        $customs = Custom::all();
        return view('customs.index', compact('customs'));
    }

    public function create()
    {
        return view('customs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Custom::create($request->all());
        return redirect()->route('customs.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show($id)
    {
        $custom = Custom::findOrFail($id);
        return view('customs.show', compact('custom'));
    }

    public function edit($id)
    {
        $custom = Custom::findOrFail($id);
        return view('customs.edit', compact('custom'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $custom = Custom::findOrFail($id);
        $custom->update($request->all());
        return redirect()->route('customs.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $custom = Custom::findOrFail($id);
        $custom->delete();
        return redirect()->route('customs.index')->with('success', 'Data berhasil dihapus.');
    }
}