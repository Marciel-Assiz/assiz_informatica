<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;
use App\Models\Cidade;
Use App\Models\Country;
Use App\Models\Location;

class EstadoCidadeBairroController extends Controller
{
    public function mostrarEstado()
    {       

        $estado = Estado::where('id','14')->get()->first();

            echo $estado->nomeEstado;

            $cidade = $estado->cidade()->where('habitante', '>', 00)->get()->first(); // Podemos colocar argumentos na busca como: 
            echo "<hr>{$cidade->nomeCidade}";
            echo "<hr>{$cidade->habitante}";
    }
            
    public function mostrarEstadoInverse()
    {
        $habitante = 180000;

        $cidade = Cidade::where('habitante', $habitante)
                    ->get()
                    ->first();

            $estado = $cidade->estado;
            echo $estado->nome;

    }
        
    public function estadoInserir()
    {
        $dataForm = [       // ***Muito Importante*** Nomear os nomes das colunas diferentes, nunca usar mesmo nome ex: tabela estado 'NOME' 'Paraná', tabela cidade 'NOME' 'Curitiba'. 
            'nomeEstado'      => 'Amazonas',
            'nomeCidade'    => 'Manaus',
            'habitante'    => '88012',
        ];    
        $estado = Estado::create($dataForm);  // Inserção na tabela Estados se ele ainda não existe
        //$estado = Estado::where('nome','Para')->get()->first();   // Inserção na tabela Estados se ele já existe
        
        $cidade = $estado->cidade()->create($dataForm);
        dd($cidade);
        
        /*
        $cidade = new Cidade();
        $cidade->nome = $dataForm['cidade'];
        $cidade->habitante = $dataForm['habitante'];
        $cidade->estado_id = $estado->id;
        $salvarCidade = $cidade->save();    // Inserção na tabela Cidades */
    }
        /*$country = Country::find(2);
        
                echo $country->name;

                $location = $country->location;

                echo "<hr>{$location->latitude}";
                echo "<hr>{$location->longitude}";*/

}
