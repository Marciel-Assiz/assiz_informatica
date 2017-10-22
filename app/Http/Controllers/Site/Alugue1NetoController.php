<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\Alugue1Neto\Alugue1NetoPedidos;
use App\Models\Alugue1Neto\Cliente;
use App\Mail\enviarEmail;



class Alugue1NetoController extends Controller  
{
    public $numPedido;
    
    public function alugue1neto()
        {
            Return view('alugue1neto');
        }
      //### CRIANDO MÉTODO CONSTRUTOR PARA MODEL 'PessoasClientesContato' ###    
    private $pedidos;

    public function __construct(Cliente $pedidos) {
        $this->pedidos = $pedidos;
    }
    //### FIM DO MÉTODO CONSTRUTOR PessoasClientesContato ###
    //
     //### CRIANDO MÉTODO CONSTRUTOR PARA MODEL 'PessoasClientesContato' ###    
    private $dataForm;

    public function __construct2(Request $dataForm) {
        $this->dataForm = $dataForm;
    }
    //### FIM DO MÉTODO CONSTRUTOR PessoasClientesContato ###
         
    
     public function a1n_store(Request $request){
         
        // PEGANDO OS DADOS DO FORM
        $dataForm = $request->all();  //dd($request);  //-->SERVE PARA MOSTRAR OS DADOS QUE ESTÃO VINDO DO FORMULÁRIO
        
            /*$dataFormCliente = [   //FILTRANDO OS DADOS ENVIADOS PELO  FORM PARA A TABELA 'Cliente'
                                  $dataForm['nomeCliente'],
                                  $dataForm['email'],
                                  $dataForm['telefone'],
                                  $dataForm['ativo'],
                                  $dataForm['newsletter'],
                                  $dataForm['comentario'],
                                 ]; */  //dd($dataFormCliente);  //-->SERVE PARA MOSTRAR OS DADOS QUE ESTÃO VINDO DO FORMULÁRIO array[]
                            
          
        $cliente = new Cliente();  // CRIANDO NOVO OBJETO DA MODEL Cliente
        $this->cliente = $cliente;
            $cliente->nomeCliente    = $dataForm['nomeCliente'];
            $cliente->email          = $dataForm['email'];
            $cliente->telefone       = $dataForm['telefone'];
            $cliente->ativo          = $dataForm['ativo'];
            $cliente->newsletter     = $dataForm['newsletter'];
            $cliente->comentario     = $dataForm['comentario'];
        $this->validate($request, $cliente->validaForm, $cliente->msgDeErro);    
            $insertCliente = $cliente->save();
                if($insertCliente){

                    //return back();
                    goto insertPedido;
                  
                    }else{
                       return 'Erro ao Enviar, tente mais tarde !';
                 }
        //$cliente->save();    // Inserção na tabela 'clientes'
        //dd($cliente);
        
       
        insertPedido:
        $pedidos = new Alugue1NetoPedidos();// CRIANDO NOVO OBJETO DA MODEL Alugue1NetoPedidos
            $pedidos->cliente_id  = $cliente->id;  
            $pedidos->opcao01     = isset($dataForm['opcao01']);
            $pedidos->opcao02     = isset($dataForm['opcao02']);
            $pedidos->opcao03     = isset($dataForm['opcao03']);
            $pedidos->opcao04     = isset($dataForm['opcao04']);
            $pedidos->opcao05     = isset($dataForm['opcao05']);
            $pedidos->opcao06     = isset($dataForm['opcao06']);
            $pedidos->opcao07     = isset($dataForm['opcao07']); 
            $pedidos->outros      = ($dataForm['outros']);  
            $pedidos->horaAula    = 1;
            
           
        
        $pedidos->save();    // Inserção na tabela 'pedidos'
          
                if ($pedidos->save()){
                     $numPedido = $pedidos->id;  
                     //dd($numPedido);
                    // info148985@gmail.com
                     //Mail::to($dataForm['email'])->send(new enviarEmail(compact('pedidos')));
                     Mail::to($dataForm['email'])->send(new enviarEmail($request, compact('numPedido', 'pedidos')));
                     //dd($dataForm);
                    return view('pedido_details', compact('dataForm','pedidos')); // compactando os dados que vem pelo formulário, Quando for utilizar na View usar $dataForm
                    
                    }else{
                       return 'Erro ao Enviar, tente mais tarde !';
                 }
        
     
        
       /* $pedidos = new Alugue1NetoPedidos();
        $pedidos->cliente_id = 1;*/
        
        //$pedidos->create($dataForm);
        
       // FAZ O CADASTRO DOS PEDIDOS
        //$insert = 1;
        //$insert = $this->pedidos->create($dataForm);

        
     
        }
        
        // FUNÇÃO RESPONSÁVEL DE FAZER O ENVIO DE E-MAIL
        public function formContato()
        {
            return view('formcontato');
        }

/*
        public function enviarContato(Alugue1NetoPedidos $pedido)
        {
             $pedidos = $pedido->all();
            //$dataForm = $request->all();
            //dd($dataForm);
            Mail::to('info148985@gmail.com')->send(new enviarEmail(compact('pedidos')));
        }*/
        
        public function pedidosShow(Alugue1NetoPedidos $pedido)
        {
            //$this->pedido = $pedido->all();
                    //Dessa outra forma mostra apenas 6 itens usando paginate, posso passar o valor direto também ->paginate(10)
            $pedidos = $pedido->paginate(10);
            return view('pedidos_show', compact('pedidos'));
        }



        // FIM CONTROLLER
}
