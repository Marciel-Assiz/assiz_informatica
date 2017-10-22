<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Models\Alugue1Neto\Alugue1NetoPedidos;
use App\Http\Controllers\Controller;
use App\Models\Alugue1Neto\Cliente;

class enviarEmail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $dadosForm;  
    private $ped = 555;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $dadosForm)
    {
        $this->dadosForm = $dadosForm;
    }
    
    public $pedido;
    public function __construct2(Cliente $pedido)
    {
        $this->pedido = $pedido;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->from($this->dadosForm->email, $this->dadosForm->nome)
        return $this->from($this->dadosForm->email,     // BUSCANDO E-MAIL DO FORMULÁRIO /alugue1neto#email para enviar 
                    'Alugue um Neto')                   // NOME QUE IDENTIFICA O AUTOR DO E-MAIL
                    ->subject('Detalhes do seu pedido N° '. $this->pedido    .' no site Alugue um Neto') // ASSUNTO DO E-MAIL
                    ->view('emailcontato', compact('pedido','numPedido'),'numPedido');  // DADOS A SEREM APRESENTADOS NO CORPO DO E-MAIL 
    }
}
