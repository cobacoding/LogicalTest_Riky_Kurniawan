<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Create
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:50',
            'harga_barang' => 'required|integer',
        ]);

        $barang = Barang::create($request->all());

        return response()->json($barang, 201);
    }

    // Read
    public function index()
    {
        return Barang::all();
    }

    public function show($id)
    {
        $barang = Barang::find($id);
        if ($barang) {
            return response()->json($barang);
        } else {
            return response()->json(['message' => 'Barang not found'], 404);
        }
    }

    // Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'string|max:50',
            'harga_barang' => 'integer',
        ]);

        $barang = Barang::find($id);
        if ($barang) {
            $barang->update($request->all());
            return response()->json($barang);
        } else {
            return response()->json(['message' => 'Barang not found'], 404);
        }
    }

    // Delete
    public function destroy($id)
    {
        $barang = Barang::find($id);
        if ($barang) {
            $barang->delete();
            return response()->json(['message' => 'Barang deleted']);
        } else {
            return response()->json(['message' => 'Barang not found'], 404);
        }
    }

    // Search
    public function search($name)
    {
        $barang = Barang::where('nama_barang', 'like', '%'.$name.'%')->get();
        return response()->json($barang);
    }
}
