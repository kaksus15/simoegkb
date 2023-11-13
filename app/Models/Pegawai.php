<?php

namespace App\Models;

use App\Models\Golongan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function golongan()
    {
        return $this->belongsTo(Golongan::class);
    }
}
