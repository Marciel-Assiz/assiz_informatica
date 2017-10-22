@extends('templates.template')


<div class="container theme-showcase body contato" role="main"> <!-- INICIO DA CLASSE CONTATO--> 
    <br/><br/><br/><br/><br/>
<title>Formulário de contato com email</title>
@section('content-body')
<form class="form" name="form" method="post" onsubmit="validacao()" action="{{url('enviarcontato')}}">
        {!! csrf_field() !!}
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>  
            <label for="nome">Nome</label>
                <div class="input-group input-group-lg divAssiz">
                    <span class="input-group-addon" id="basic-addon1"></span>
                    <input type="text" name="nome" id="nomeCliente_id" value="{{old('nomeCliente')}}" onFocus="this.select()" onBlur="requer(this.value)" class="form-control" minlength="1" maxlength="80" placeholder="Nome" aria-describedby="basic-addon1">
                </div>
               <br/> 
               <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  
            <label for="email">Email</label>
                <div class="input-group input-group-lg"> 
                    <input type="email" name="email" id="email" class="form-control" minlength="8"  axlength="50" placeholder="seu_email@exemplo.com" aria-describedby="basic-addon2" {{old('email')}}>
                    <span class="input-group-addon" id="basic-addon2">@</span>
                </div>
                <br/>
             <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>   
            <label for="telefone">Mensagem</label>
            <div class="input-group input-group-lg">
              <span class="input-group-addon">41</span>
              <input type="text" name="mensagem" id="telefone" class="form-control" {{old('telefone')}} >
            </div>
            <label for="telefone">Id do Pedido</label>
            <div class="input-group input-group-lg">
              <span class="input-group-addon">41</span>
              <input type="text" name="id" id="telefone" class="form-control" {{old('telefone')}} >
            </div>
    
    <button class="btn btn-primary botao-enviar" onClick="validacao()">Enviar</button>    
</form>
</div> <!-- FIM  DA CLASSE CONTATO--> 
@endsection
