@extends('templates.template')


<title>Resumo do seu Pedido</title>

@section('content-body')

<div class="container theme-showcase body contato" role="main"> <!-- INICIO DA CLASSE CONTATO--> 
    
    <br/><br/><br/>
    <div class="jumbotron page-header">
        <h1>Muito Obrigado  <b>{{$dataForm['nomeCliente']}} !</b></h1>      
        <h2>Olha os serviços que você acabou de <b>contratar</b>. Em breve entraremos em contato para combinarmos os <b>detalhes</b>.</h2>
    </div>
    
    <div class="col-lg-8">
        <table class="table table-hover table-responsive page-header">

            <tr><h3>Pedido Nº {{$pedidos['id']}}</h3></tr>
            <tr><h2>Serviços</h2></tr>
        
            <?php if (isset($dataForm['opcao01'])) {  echo "<tr><td>Aprender a utilizar redes-socias</td></tr>";} ?>
            <?php if (isset($dataForm['opcao02'])) {  echo "<tr><td>Aprender Mexer no Smartphone ou Tablet</td></tr>";} ?>
            <?php if (isset($dataForm['opcao03'])) {  echo "<tr><td>Mexer no Tablet ou SmartTV</td></tr>";} ?>
            <?php if (isset($dataForm['opcao04'])) {  echo "<tr><td>Baixar e utilizar aplicativos</td></tr>";} ?>
            <?php if (isset($dataForm['opcao05'])) {  echo "<tr><td> Funções básicas no Computador</td></tr>";} ?>
            <?php if (isset($dataForm['opcao06'])) {  echo "<tr><td>Utilizar Smart TV</td></tr>";} ?>
            <?php if (isset($dataForm['opcao07'])) {  echo "<tr><td>Instalar Som, Blue ray, etc</td></tr>";} ?>
            <?php if (isset($dataForm['outros' ])>0) {  echo "<tr><td>Outros: {$dataForm['outros']}</td></tr>";} ?>
            
           
        <p>Receberá esse resumo também no e-mail:  {{$dataForm['email']}}</p>
            
        </table>
        <a  href="{{url('/alugue1neto')}}"><button class="btn btn-primary alert-link">Voltar</button></a>
    </div>    
</div>

@endsection('content-body')
