<?php

namespace App\Http\Controllers;

use App\Models\CategoryBuku;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CategoryBuku::all();
        $breadcrumb = (object)[
            'title' => 'Management Kategori Buku',
            'list' => ['Kategori', 'Buku']
        ];

        $activeMenu = 'category';
        return view('category.index', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb, 'categories' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $breadcrumb = (object)[
            'title' => 'Tambah Kategori Buku',
            'list' => ['Kategori', 'Buku']
        ];

        $activeMenu = 'category';
        return view('category.create', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_category' => ['required', 'unique:category_bukus,kode_category'],
            'name' => ['required', 'unique:category_bukus,name'],
        ], [
            'kode_category.required' => 'Kode kategori harus diisi.',
            'kode_category.unique' => 'Kode kategori sudah dipakai.',
            'name.required' => 'Nama kategori harus diisi.',
            'name.unique' => 'Nama kategori sudah dipakai.'
        ]);

        try {
            CategoryBuku::create([
                'kode_category' => $request->kode_category,
                'name' => $request->name,
            ]);
            Session::flash('status', 'Disimpan');
            return redirect()->route('category');
        } catch (\Exception $e) {
            return redirect()->route('category')->with('error', 'Gagal menyimpan data kategori.');
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
        $category = CategoryBuku::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Update Kategori Buku',
            'list' => ['Kategori', 'Buku']
        ];

        $activeMenu = 'category';
        return view('category.edit', compact('category', 'breadcrumb', 'activeMenu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = CategoryBuku::findOrFail($id);
        if ($category['kode_category'] == $request->input('e-kode_category')) {
            $roleKode = ['required'];
        } else {
            $roleKode =  ['required', 'unique:category_bukus,kode_category'];
        }

        if ($category['name'] == $request->input('e-name')) {
            $roleName = ['required'];
        } else {
            $roleName = ['required', 'unique:category_bukus,name'];
        }

        $request->validate([
            'e-kode_category' => $roleKode,
            'e-name' => $roleName,
        ], [
            'e-kode_category.required' => 'Kode kategori harus diisi.',
            'e-kode_category.unique' => 'Kode kategori sudah dipakai.',
            'e-name.required' => 'Nama kategori harus diisi.',
            'e-name.unique' => 'Nama kategori sudah dipakai.'
        ]);

        try {
            CategoryBuku::where('id', $id)->update([
                'kode_category' => $request->input('e-kode_category'),
                'name' => $request->input('e-name'),
            ]);
            Session::flash('status', 'Diperbarui');
            return redirect()->route('category')->with('success', 'Berhasil mengupdate data kategori.');
        } catch (\Exception $e) {
            return redirect()->route('category')->with('error', 'Gagal menyimpan data kategori.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            CategoryBuku::where('id', $id)->delete();
            return redirect()->route('category')->with('success', 'Berhasil menghapus data kategori.');
        } catch (\Exception $e) {
            return redirect()->route('category')->with('error', 'Gagal menghapus data kategori.');
        }
    }
}
