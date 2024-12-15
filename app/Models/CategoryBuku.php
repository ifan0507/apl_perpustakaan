<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryBuku extends Model
{
    use HasFactory;
    protected $table = 'category_bukus';
    protected $fillable = ['kode_category', 'name'];
    protected $timestamp = false;

    public function buku(): HasMany
    {
        return $this->hasMany(Buku::class);
    }
}
