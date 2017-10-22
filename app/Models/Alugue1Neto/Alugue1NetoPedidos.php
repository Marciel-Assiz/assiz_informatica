<?php

namespace App\Models\Alugue1Neto;

use Illuminate\Database\Eloquent\Model;

class Alugue1NetoPedidos extends Model
{
    //Se por acaso essa Classe 'Model' na encontar a tabela no banco de dados, especifique a mesma como esse exemplo abaixo :

    //protected $table = 'nomeDaTabela';
    
    protected $fillable = [
        
    //$fillable é um Vetor e receberá os seguntes dados abaixo, os mesmos estão com permissão para preenchimento pelo usuario.
    //Se por aparecer um erro tipo: "ERROR_MASS-EXEPTION" alguma coisa assim, revisar se falta dar permissão em algum dado para inserção.    
       'id','cliente_id','a1n-opc-01','a1n-opc-02','a1n-opc-03','a1n-opc-04','a1n-opc-05','a1n-opc-06','outros','horaAula','teste'
    ];                                        
    //protected $guarded = ['admin'];
    

    public $validaForm = 
    // Validado os dados antes da inserção, lembrando que se chegou aqui já passou pela validação do HTML que seria o ideal fazer tal validação.
    [
        'nomeCliente'     => 'required|min:2|max:100',
        'email'    => 'required|min:5|max:100',
        'telefone' => 'numeric',
        'mensagem' => 'min:3|max:1000',
        
    ];
    
    public $msgDeErro = [
            'nomeCliente.required'    => 'O campo [Nome] é de preenchimento obrigatório !',
            'nomeCliente.min'         => 'O campo [Nome] mínimo 2 Letras/Caracteres !',
            'nomeCliente.max'         => 'O campo [Nome] recebe no máximo 100 Letras/Caracteres !',
            'email.required'   => 'O campo [Email] é de preenchimento obrigatório !',
            'telefone.numeric' => 'O Campo [Telefone] só aceita números !',
            'mensagem.min'     => 'O campo [Mensagem] é do mínimo 3 caracteres !',
            'mensagem.max'     => 'O campo [Mensagem] é do máximo 1000 caracteres !',
            
            ];
    
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
