<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $width = "category";
    protected $fillable = ['category_id', 'kode_buku', 'judul', 'jenis', 'penerbit', 'tahun_terbit', 'bahasa', 'isbn', 'jumlah_halaman', 'pengarang', 'tahun_terbit', 'jumlah_halaman', ''];
    protected $timestamp = false;

    public function category(): HasMany
    {
        return $this->hasMany(CategoryBuku::class);
    }
}
