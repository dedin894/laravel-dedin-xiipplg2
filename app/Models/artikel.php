<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'isi',
        'img',
    ];
}