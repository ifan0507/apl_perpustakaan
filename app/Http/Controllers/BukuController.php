<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\CategoryBuku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $breadcrumb = (object)[
            'title' => 'Management Buku',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'buku';
        return view('buku.index', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categori = CategoryBuku::all();
        $breadcrumb = (object)[
            'title' => 'Create Buku',
            'list' => ['Buku', 'Buku']
        ];

        $activeMenu = 'buku';
        return view('buku.create', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb, 'category' => $categori]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => ['required'],
            'pengarang' => ['required'],
            'penerbit' => ['required'],
            'thn_terbit' => ['required'],
            'isbn' => ['required'],
            'jml_halaman' => ['required'],
            'bahasa' => ['required'],
            'kategori' => ['required'],
            'jenis' => ['required'],
        ], [
            'judul.required' => 'Judul Buku Harus Diisi',
            'pengarang.required' => 'Pengarang Harus Diisi',
            'penerbit.required' => 'Penerbit Harus Diisi',
            'thn_terbit.required' => 'Tahun Terbit Harus Diisi',
            'isbn.required' => 'ISBN Harus Diisi',
            'jml_halaman.required' => 'Jumlah Halaman Harus Diisi',
            'bahasa.required' => 'Bahasa Harus Diisi',
            'kategori.required' => 'Kategori Harus Diisi',
            'jenis.required' => 'Jenis Buku Harus Diisi',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
