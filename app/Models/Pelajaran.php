<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;
    protected $table = 'setup_pelajaran';

    protected $fillable = [
        'id_pelajaran',
        'nama_pelajaran',
    ];
}