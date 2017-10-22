<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Cidade extends Model
{
    protected $fillable = ['nomeCidade', 'habitante'];
    
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
