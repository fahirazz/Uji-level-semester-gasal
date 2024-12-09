<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Variant;

class VariantController extends Controller
{
    public function index()
    {
        $variants = Variant::all();
        return view('variants.index', compact('variants'));
    }

    public function create()
    {
        return view('variants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images/variant', 'public');

        Variant::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('variants.index')->with('success', 'Variant berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $variant = Variant::findOrFail($id);
        return view('variants.edit', compact('variant'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $variant = Variant::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/variant', 'public');
            $variant->update([
                'image' => $imagePath,
            ]);
        }

        $variant->update($request->only(['name', 'price']));

        return redirect()->route('variants.index')->with('success', 'Variant berhasil diubah!');
    }

    public function destroy($id)
    {
        $variant = Variant::findOrFail($id);
        $variant->delete();
        return redirect()->route('variants.index')->with('success', 'Variant berhasil dihapus!');
    }
}
