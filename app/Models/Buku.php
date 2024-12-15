<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $with = "category";
    protected $fillable = [
        'category_id',
        'kode_buku',
        'judul',
        'jenis',
        'penerbit',
        'bahasa',
        'isbn',
        'jumlah_halaman',
        'pengarang',
        'tahun_terbit'
    ];
    protected $timestamp = false;

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryBuku::class);
    }
}
