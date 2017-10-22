   <script>
        function requer(texto){
            if (texto == ""){
                alert("Favor preencher o campo!");
                document.form.focus();
            }
        function mudarFocoOutros(){
            alert('teste');
        }    
        }
   </script>
@extends('templates.template')

<title>Alugue um Neto</title>

@section('content-body')

 <!-- IMPRESSÃO DAS VALIDAÇÕES -->

       <!-- FIM IMPRESSÃO DAS VALIDAÇÕES -->
          

<div class="container theme-showcase body contato" role="main"> <!-- INICIO DA CLASSE CONTATO--> 
           
            <!--form name="form" method="post" action="cadastrar.php" onsubmit="return validacao();">
                <p>Validações</p>
                Nome: <input type="text" name="nome" id="" />

                <input type="submit" name="submit" value="Enviar" />

            </form-->
<form class="form" name="form" method="post" onsubmit="validacao()" action="{{url('/alugue1neto/store')}}">
    <br/><br/>        
        <p><h1 class="alert">Conecte-se ao presente e as pessoas que são importantes para você!</h1></p>
            <div class="jumbotron"><h3>O uso da tecnologia em quase todos os aspectos de nossa vida ja é uma realidade. Se você, adulto ou idoso de 
                    Curitiba sente-se no passado e quer acompanhar seus amigos, colegas e familiares, conte com o apoio do Alugue um Neto! Um de nossos 
                    colaboradores vai te ajudar a compreender o uso da tecnologia através de um atendimento exclusivo em sua residência e com toda a 
                    atenção que você merece. </h3>
                <div class="fb-like" data-href="https://www.facebook.com/Alugue-um-Neto-1998300177081947/" data-layout="button" data-action="like" data-size="large" 
                    data-show-faces="true" data-share="true">
                </div>
            </div>
            
    <fieldset>
        <legend></legend>
    </fieldset>

 
        <div class="alert alert-info a1n-div1" role="alert"><h2>O que podemos oferecer!</h2></div>

        
            <div class="col-sm-6">
                <div class="thumbnail">
                    <figure class="foto-legenda-servicos">  
                        <img src="{!! asset('assets/site/imgs/redes-sociais-icones.jpg') !!}" alt="Serviços de reposição de tela."/>
                            <figcaption><h2>Aprenda tudo sobre..<br/> Redes Sociais e<br/> Apps de <br/>mensagens instantâneas</h2></figcaption>
                    </figure>
                    <div class="caption">
                        <h3>Redes Sociais</h3>
                        <h4>Entre nas redes-sociais e em apps de mensagens instantâneas, descubra como compartilhar fotos, seguir seus amigos, parentes e conversa e online.<h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="thumbnail">
                    <figure class="foto-legenda-servicos">  
                        <img src="{!! asset('assets/site/imgs/celular-tablet-notebook.png') !!}" alt="Serviços de reposição de tela."/>
                            <figcaption><h2>Aprenda a utilizar Celulares, Tablets e Smartphones</h2></figcaption>
                    </figure>
                    <div class="caption">
                        <h3>Celulares, Tablets e Smartphones</h3>   
                        <h4>Aprenda a utilizar Celulares, Tablets e Smartphones, baixar aplicativos, tirar e editar fotos, fazer ligações e enviar mensagens.<h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="thumbnail">
                    <figure class="foto-legenda-servicos"> 
                        <img src="{!! asset('assets/site/imgs/Compras-Online.jpg') !!}" alt="Serviços de reposição de tela."/>
                            <figcaption><h2>Aprenda a navegar e fazer compras na internet com segurança</h2></figcaption>
                    </figure>
                    <div class="caption">
                        <h3>Navegar na internet e fazer compras</h3>
                        <h4>Navegue na Internet, faça buscas, pesquisas, leia notícias, veja vídeos e faça compras online.<h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="thumbnail">
                    <figure class="foto-legenda-servicos">  
                        <img src="{!! asset('assets/site/imgs/blueray-conversor-Smart-tv.jpg') !!}" alt="Serviços de reposição de tela."/>
                            <figcaption><h2>Aprenda a instalar e usar SmartTV, Blue Ray, Conversores digitais</h2></figcaption>
                    </figure>
                    <div class="caption">
                        <h3>Instalar e usar SmartTV, Blue Ray, Conversores</h3>
                        <h4>Aprenda também como instalar e usar outros itens que podem ser úteis em sua casa, tais como Smart TV, som, aparelho Blue Ray, Conversor digital, entre outros!</h4>
                    </div>
                </div>
            </div>
        
        
        
    
   
    <div class="col-sm-10 form-contato">  
      
        
            {!! csrf_field() !!}
            <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>
                <label for="nome"><h3>Do que você precisa</h3></label><br/><br/>
          
            <!-- Começo da Validação do formulário -->  
                @if( isset($errors) && count($errors) > 0 )  
                    <div class="alert alert-danger">
                        @foreach( $errors->all() as $error )
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif
            <!-- Fim da Validação do formulário -->        
              
                <div class="radio-button-a1n">
                        <input type="checkbox" name="opcao01" id="a1n-opc-01-id" value="1">
                        <label for="a1n-opc-01-id">Aprender a utilizar redes-socias</label>
                </div><br/>
                
                <div class="radio-button-a1n">
                        <input type="checkbox" name="opcao02" id="a1n-opc-02-id" value="1">
                        <label for="a1n-opc-02-id">Aprender Mexer no Smartphone ou Tablet</label>
                </div><br/>
                
                <div class="radio-button-a1n">
                        <input type="checkbox" name="opcao03" id="a1n-opc-03-id" value="1">
                        <label for="a1n-opc-03-id">Mexer no Tablet ou SmartTV</label>
                </div><br/>
                
                <div class="radio-button-a1n">
                        <input type="checkbox" name="opcao04" id="a1n-opc-04-id" value="1">
                        <label for="a1n-opc-04-id">Baixar e utilizar aplicativos</label>
                </div><br/>
                
                <div class="radio-button-a1n">
                        <input type="checkbox" name="opcao05" id="a1n-opc-05-id" value="1">
                        <label for="a1n-opc-05-id">Funções básicas no Computador</label>
                </div><br/>
                
                <div class="radio-button-a1n">
                        <input type="checkbox" name="opcao06" id="a1n-opc-06-id" value="1">
                        <label for="a1n-opc-06-id">Utilizar Smart TV</label>
                </div><br/>
                
                <div class="radio-button-a1n">
                        <input type="checkbox" name="opcao07" id="a1n-opc-07-id" value="1">
                        <label for="a1n-opc-07-id">Instalar Som, Blue ray, etc </label>
                </div><br/>
                
                 <div class="radio-button-a1n">
                    <span class="">
                        <label for="outros">Outros. O que ?</label>
                    </span>
                     <input type="text" class="" name="outros" id="outros-id" onblur="mudarFocoOutros()"  value="{{old('outros')}}" minlength="3" maxlength="150" placeholder="Descreva aqui ..">
                 </div> 
                <input type="number" class="" name="id" id="id-id"  value="{{old('id')}}/>
                

               
              <br/><br/>
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>  
            <label for="nome">Nome</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="basic-addon1"></span>
                    <input type="text" name="nomeCliente" id="nomeCliente_id" value="{{old('nomeCliente')}}" onFocus="this.select()" onBlur="requer(this.value)" class="form-control" minlength="1" maxlength="80" placeholder="Nome" aria-describedby="basic-addon1">
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
            <label for="telefone">Telefone</label>
            <div class="input-group input-group-lg">
              <span class="input-group-addon">41</span>
              <input type="number" name="telefone" id="telefone" class="form-control" {{old('telefone')}} >
            </div>
                <br/>
                <input type="hidden" name="ativo" value="0"/>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                <li><a href="#">Regular link</a></li>
                <li class="disabled"><a href="#">Disabled link</a></li>
                <li><a href="#">Another link</a></li>
            </ul>    
                
            <label for="news-promo">Desejo receber Novidades e Promoções</label>
            <input type="checkbox" name="newsletter" id="news-promo" checked="" class="form-control" value="1">
                <br/>
            <label for="mensagem">Comentários</label>
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon3">..</span>
              <textarea name="comentario" class="form-control" id="comentario"{{old('mensagem')}} ></textarea>
            </div>
            
          
            <button class="btn btn-primary botao-enviar" onClick="validacao()" onClick="mudarFocoOutros">Enviar</button>    
        </form>
    </div>
    </div><!-- FIM DO form-a1n -->     
      
</div><!-- FIM DA CLASSE SOBRE --> 

@endsection


