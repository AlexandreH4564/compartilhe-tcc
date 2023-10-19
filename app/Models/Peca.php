<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peca extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['id', 'tipo', 'codigo', 'cor', 'material', 'image'];
}
