<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prodi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function Mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
