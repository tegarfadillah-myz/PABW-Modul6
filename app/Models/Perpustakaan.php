<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;

    protected $table = 'perpustakaans';

    protected $fillable = ['nama', 'alamat'];

    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}
