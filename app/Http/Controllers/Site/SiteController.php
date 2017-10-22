<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\site\PessoasClientesContato;

class SiteController extends Controller
{
    //### CRIANDO MÉTODO CONSTRUTOR PARA MODEL 'PessoasClientesContato' ###    
    private $contato;
   
    public function __construct(PessoasClientesContato $contato) {
        $this->contato = $contato;
    }
    //### FIM DO MÉTODO CONSTRUTOR ###
      public function contato()
    {
    	Return view('contato');
    }
    
    public function index()
    {
    	Return view('index');
    }
    
    public function sobre()
    {
    	Return view('sobre');
    }
   
    
    // FIM DO CONTROLE DAS ROTAS DO SiteController.php
    
       
     public function store(Request $request){
         
        // PEGANDO OS DADOS DO FORMULÁRIO
        $dataForm = $request->all();
         //dd($dataForm);// -->SERVE PARA MOSTRAR OS DADOS QUE ESTÃO VINDO DO FORMULÁRIO
       
           // VALIDA OS DADOS AO SEREM INSERIDOS
        /*$rules = [
            'nome' => 'required|min:2|max:100',
            'telefone' => 'numeric',
            'mensagem' => 'min:3|max:1000'
        ];*/
        
        
        $this->validate($request, $this->contato->validaForm, $this->contato->msgDeErro);
        
        //dd($dataForm['nome']);
        
       // FAZ O CADASTRO
        $insert = $this->contato->create($dataForm);

        if($insert){
            
            return back();
           // return  $dataForm['nome'];
            
        }else{
            return 'Erro ao Enviar, tente mais tarde !';
             }
     
        }
    
    
    
    public function servicos()
    {
    	Return view('servicos');
    }

       
    public function mostrarContato()
    {
       $title = 'Listagem do Contatos'; 
        
       $contatos = $this->contato->all();
       
       return view('mostrar-contato', compact('contatos', 'title'));
       
    }
   
    
}
 