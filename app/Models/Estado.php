<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cidade;

class Estado extends Model
{
    protected $fillable = ['nomeEstado'];


    public function cidade()
    {
        return $this->hasOne(Cidade::class); 
    }
}
