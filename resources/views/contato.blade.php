   <script>
        function requer(texto){
            if (texto == ""){
                alert("Favor preencher o campo!");
                document.form.telefone.focus();
            }
        }
   </script>

@extends('templates.template')

<title>Contato</title>

@section('content-body')

 <!-- IMPRESSÃO DAS VALIDAÇÕES -->
       
       <!-- FIM IMPRESSÃO DAS VALIDAÇÕES -->
          

<div class="container theme-showcase body contato" role="main"> <!-- INICIO DA CLASSE CONTATO--> 
    
    <div class="col-sm-6 form-contato">
        <h1 class="title-pg">Contato</h1> 
        
        @if( isset($errors) && count($errors) > 0 )
            <div class="alert alert-danger">
                @foreach( $errors->all() as $error )
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        
                
        <form class="form" method="post" action="{{url('/contato/store')}}">
          {!! csrf_field() !!}
          
            <label for="nome">Nome</label>
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon1"></span>
              <input type="text" name="nome" id="nomeCliente" value="{{old('nomeCliente')}}" class="form-control" placeholder="Nome" aria-describedby="basic-addon1" onFocus="this.select()" onBlur="requer(this.value)" required=""  minlength="2" maxlength="80">
            </div>
                <br/>
            <label for="email">Email</label>
            <div class="input-group input-group-lg"> 
                <input type="email" name="email" id="email" class="form-control" placeholder="seu_email@exemplo.com" aria-describedby="basic-addon2" {{old('email')}} required="" minlength="8" axlength="50" maxlength="50">
              <span class="input-group-addon" id="basic-addon2">@</span>
            </div>
                <br/>
            <label for="telefone">Telefone</label>
            <div class="input-group input-group-lg">
              <span class="input-group-addon">41   </span>
              <input type="tel" name="telefone" id="telefone-id" class="form-control" {{old('telefone')}} required="" minlength="8" maxlength="9">
            </div>
                <br/>
                <input type="hidden" name="ativo" value="0"/>
                
            <label for="news-promo">Desejo receber Novidades e Promoções</label>
            <input type="checkbox" name="newsletter" id="news-promo" checked="" class="form-control" value="1">
                <br/>
            <label for="mensagem">Sua Mensagem</label>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="basic-addon3">M<br/>S<br/>G</span>
                <textarea name="mensagem" class="form-control" id="mensagem"{{old('mensagem')}} required="" minlength="5" maxlength="300" ></textarea>
           </div>
           
            <button class="btn btn-primary botao-enviar">Enviar</button>    
        </form>
    </div>
    
      
</div><!-- FIM DA CLASSE SOBRE --> 


  
    
    
<!-- Bootstrap core JavaScript ######## NÃO APAGAR DE JEITO NENHUM, SENÃO VAI PERDER OS SCRIPTS DO BOOTSTRAP ##########
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

@endsection


