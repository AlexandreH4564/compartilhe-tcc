<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creditos extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'peca_id', 'credito', ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function peca() {
        return $this->belongsTo('App\Models\Peca');
    }
}
