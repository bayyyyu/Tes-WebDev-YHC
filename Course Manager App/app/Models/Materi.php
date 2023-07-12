<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kursus;

class Materi extends Model
{
    protected $table = 'materi';
    protected $fillable =
    [
        'judul', 'deskripsi', 'embed_link', 'kursus_id'
    ];
    public function kursus()
    {
        return $this->belongsTo(Kursus::class);
    }
}
