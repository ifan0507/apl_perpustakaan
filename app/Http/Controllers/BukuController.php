<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\CategoryBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Buku::with('category')->get();

        $breadcrumb = (object)[
            'title' => 'Management Buku',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'buku';
        return view('buku.index', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb, 'bukus' => $data]);
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
            'kode_buku' => ['required', 'unique:bukus,kode_buku'],
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
            'kode_buku.required' => 'Kode Tidak Boleh Kosong',
            'kode_buku.unique' => 'Kode buku sudah terdaftar',
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
        try {
            Buku::create([
                'kode_buku' => $request->kode_buku,
                'judul' => $request->judul,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
                'tahun_terbit' => $request->thn_terbit,
                'isbn' => $request->isbn,
                'jumlah_halaman' => $request->jml_halaman,
                'bahasa' => $request->bahasa,
                'category_id' => $request->kategori,
                'jenis' => $request->jenis,
            ]);
            Session::flash('status', 'Disimpan.');
            return redirect()->route('buku');
        } catch (\Exception $e) {
            return redirect()->route('buku')->with('error', 'Gagal menyimpan data buku.');
        }
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
        $buku = Buku::with('category')->findOrFail($id);
        $categori = CategoryBuku::all();

        $breadcrumb = (object)[
            'title' => 'Update Buku',
            'list' => ['Buku', 'Buku']
        ];

        $activeMenu = 'buku';
        return view('buku.edit', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb, 'buku' => $buku, 'category' => $categori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataLama = Buku::with('category')->findOrFail($id);
        if ($dataLama['kode_buku'] == $request->kode_buku) {
            $role = 'required';
        } else {
            $role = ['required', 'unique:bukus,kode_buku'];
        }

        $request->validate([
            'kode_buku' => $role,
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
            'kode_buku.required' => 'Kode Tidak Boleh Kosong',
            'kode_buku.unique' => 'Kode buku sudah terdaftar',
            'judul.required' => 'Judul Buku Harus Diisi',
            'pengarang.required' => 'Pengarang Harus Diisi',
            'penerbit.required' => 'Penerbit Harus Diisi',
            'thn_terbit.required' => 'Tahun Terbit Harus Diisi',
            'isbn.required' => 'ISBN Harus Diisi',
            'jml_halaman.required' => 'Jumlah Halaman Harus Diisi',
            'bahasa.required' => 'Bahasa Harus Diisi',
            'kategori.required' => 'Kategori Harus Diisi',
        ]);

        try {
            Buku::where('id', $id)->update([
                'kode_buku' => $request->kode_buku,
                'judul' => $request->judul,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
                'tahun_terbit' => $request->thn_terbit,
                'isbn' => $request->isbn,
                'jumlah_halaman' => $request->jml_halaman,
                'bahasa' => $request->bahasa,
                'category_id' => $request->kategori,
                'jenis' => $request->jenis,
            ]);
            Session::flash('status', 'Diubah.');
            return redirect()->route('buku');
        } catch (\Exception $e) {
            return redirect()->route('buku.edit', ['id' => $id])->with('error', 'Gagal merubah data buku.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Buku::where('id', $id)->delete();
        Session::flash('status', 'Dihapus.');
        return redirect()->route('buku');
    }
}
