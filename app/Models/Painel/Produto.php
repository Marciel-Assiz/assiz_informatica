<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Se por acaso essa Classe 'Model' na encontar a tabela no banco de dados, especifique a mesma como esse exemplo abaixo :

    //protected $table = 'nomeDaTabela';
    
    protected $fillable = [
        'name', 'number', 'active', 'category', 'description'
    ];
    //protected $guarded = ['admin'];


    /*public $rules = 
    [
        'name' => 'required|min:2|max:100',
        'number' => 'required|numeric',
        'category' => 'required',
        'description' => 'min:3|max:1000'
    ];*/
    
}
