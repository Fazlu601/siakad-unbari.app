<?php

namespace App\Models;

use App\Models\Prodi;
use App\Models\Identitas_mahasiswa;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'mahasiswas';

    public function Identitas_mahasiswa() 
    {
        return $this->hasOne(Identitas_mahasiswa::class);
    }

    public function Prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id');
    }

}
