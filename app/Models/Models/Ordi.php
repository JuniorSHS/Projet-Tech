<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordi extends Model
{
    protected $table = 'ordi';
    protected $fillable = ['nom_poste'];

}
