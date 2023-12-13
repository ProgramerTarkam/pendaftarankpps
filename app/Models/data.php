<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pendidikan()
    {
        return $this->hasMany(Pendidikan::class);
    }
    public function pekerjaan()
    {
        return $this->hasMany(pekerjaan::class);
    }
    public function karyaTulis()
    {
        return $this->hasMany(pekerjaan::class);
    }
    public function organisasi()
    {
        return $this->hasMany(pekerjaan::class);
    }
}
