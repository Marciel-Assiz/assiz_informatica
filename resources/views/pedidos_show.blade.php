@extends('templates.template')

<title>Lista dos Pedidos</title>

@section('content-body')
<br/><br/><br/>
<div class="container">
  
    @forelse($pedidos as $pedido) 
     
      <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading"><h4>Pedido Nº <b>{{$pedido->id}}</b> &nbsp-&nbsp Cliente: <b>{{$pedido->cliente->nomeCliente}}</b> &nbsp-&nbsp Fone: {{$pedido->cliente->telefone}} &nbsp-&nbsp E-mail: {{$pedido->cliente->email}}</b></h4></div>
              <div class="panel-body">
                <?php if ($pedido->opcao01 == 1)  {  echo " Item 1:&nbsp; Aprender a utilizar redes-socias  &nbsp;-&nbsp;";} ?>
                <?php if ($pedido->opcao02 == 1)  {  echo " Item 2:&nbsp; Aprender Mexer no Smartphone ou Tablet  &nbsp;-&nbsp;";} ?>
                <?php if ($pedido->opcao03 == 1)  {  echo " Item 3:&nbsp; Mexer no Tablet ou SmartTV  &nbsp;-&nbsp;";} ?>
                <?php if ($pedido->opcao04 == 1)  {  echo " Item 4:&nbsp; Baixar e utilizar aplicativos  &nbsp;-&nbsp;";} ?>
                <?php if ($pedido->opcao05 == 1)  {  echo " Item 5:&nbsp; Funções básicas no Computador  &nbsp;-&nbsp;";} ?>
                <?php if ($pedido->opcao06 == 1)  {  echo " Item 6:&nbsp; Utilizar Smart TV  &nbsp;-&nbsp;";} ?>
                <?php if ($pedido->opcao07 == 1)  {  echo " Item 7:&nbsp; Instalar Som, Blue ray, etc  &nbsp;-&nbsp;";} ?>
                <?php if ($pedido->outros != '')   {  echo "Item 8:&nbsp; Outros. O que ? $pedido->outros &nbsp;-&nbsp;";} ?>
               
              </div>

              <!-- Table -->
              <table class="table">
                  <p> &nbsp;&nbsp;&nbsp;&nbsp;Data do registro: &nbsp; {{$pedido->created_at}}</p>
              </table>
      </div>    
              
    @empty
        <p>Nenhum pedido</p>
    @endforelse
    
    {{$pedidos->links()}}
</div>

@endsection
