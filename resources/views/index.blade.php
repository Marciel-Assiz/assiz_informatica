@extends('templates.template')


<title>Assiz Informática</title>

@section('content-body')




<!-- AQUI COMEÇA O CONTENER PRINCIPAL -->
<div class="container theme-showcase body" role="main">


    <!-- INICIO DA DIV DO CARROUSEL Á ESQUERDA --> 
    <div class="col-sm-7  carrousel-esquerda">

        <!-- INICIO DO CARROUSEL Á ESQUERDA -->
        <div class="row">  
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox"> 

                    <div class="item active">
                        <a href="servicos#troca-tela">
                            <img class="img-zoom" src="{!! asset('assets/site/imgs/anuncio-troca-tela.jpg') !!}"/></a>
                    </div>
                    
                    <div class="item">
                        <a href="servicos#formatacao">
                            <img class="img-zoom" src="{!! asset('assets/site/imgs/anuncio-formatacao.jpg') !!}"/></a>
                    </div>

                    <div class="item">
                        <a href="servicos#troca-tela">
                            <img class="img-zoom" src="{!! asset('assets/site/imgs/anuncio-troca-tela.jpg') !!}"/></a>
                    </div>

                </div>

                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>    
        <!-- FIM DO CARROUSEL Á ESQUERDA -->


    </div> <!-- FIM DA DIV DO CARROUSEL Á ESQUERDA -->



    <!-- div class="page-header">
      <h1>Curta-nos</h1>
    </div-->


    <!-- INICIO DA COLUNA DO MEIO -->
    <div class="col-sm-5 coluna-meio">

        <!-- INICIO DO CARROUSEL -->
        <div class="row">  
            <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <a href="servicos#formatacao">
                            <img class="img-zoom" src="{!! asset('assets/site/imgs/win10-experimente.jpg') !!}"/></a>
                        <a href="servicos#formatacao">
                            <img class="img-zoom" src="{!! asset('assets/site/imgs/servicos-formatacao.jpg') !!}"/></a>
                         <figcaption class="figcaption-carrousel animated bounceInDown"><h3>Serviço de Leva e tráz ! =D</h3></figcaption>
                    </div>

                    <div class="item">
                        <a href="servicos#formatacao"> 
                           <img class="img-zoom" src="{!! asset('assets/site/imgs/win10-o-melhor.jpg') !!}"/></a>
                        <a href="servicos#config-wifi">
                            <img class="img-zoom" src="{!! asset('assets/site/imgs/servicos-roteadores.jpg') !!}"/></a>
                    </div>
                    
                    <div class="item">
                        <a href="contato">
                            <img class="img-zoom" src="{!! asset('assets/site/imgs/assiz-informatica.jpg') !!}"/></a>
                        <a href="servicos">
                            <img class="img-zoom" src="{!! asset('assets/site/imgs/visao.jpg') !!}"/></a>
                    </div>
                    
                    <div class="item">
                        <a href="servicos#backup">
                            <img class="img-zoom" src="{!! asset('assets/site/imgs/servicos-bkp.jpg') !!}"/></a>
                        <a href="servicos#rede-estruturada">    
                            <img class="img-zoom" src="{!! asset('assets/site/imgs/servicos-rede-estruturada.jpg') !!}"/></a>
                        <figcaption class="figcaption-carrousel animated bounceInDown"><h3>Orçamento sem Compromisso! xD</h3></figcaption>
                    </div>

                    <!--div class="item">
                        <img src="{!! asset('assets/site/imgs/promo-formatacao2.jpg') !!}"/>
                    </div-->

                </div>
                <!-- IMPORTANTE: PARA AS SETAS QUE MUDAM O SLIDE FUNCIONAR "<<|   |>>" DEVE MUDAR O NOME DO "ID" DA CLASSE, 
                 ALÉM DISSO DEVE COLOCAR NO "href="nome-do-carrousel", DEPOIS DISSO TENTAR  -->
                <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>   
        <!-- FIM DA DIV DO CARROUSEL -->

    </div><!-- FIM DA COLUNA DO MEIO -->
    
    <div class="row">
        <div class="col-md-12 page-header curta-nos">
            <h3>Curta-nos</h3>  
            <div class="fb-like" data-href="https://www.facebook.com/AssizInformatica/" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
        </div>
    </div>  
        
    <!-- inicio trez-colunas-texto -->
    <main>
        <div class="page-header row trez-colunas-texto">

            <div class="col-md-4">
              <h2>Assistência Técnica Especializada</h2>
              <h4><p>Conte com uma mão de obra especializada para diversos serviços, com princípios e preços éticos sempre. Somos altamente capacitados para dar o melhor nos serviços oferecidos.</p></h4>
            </div>

            <div class="col-md-4">
              <h2>Serviços Com Transparência e Garantia</h2>
              <h4><p>Além do nosso grande respeito e transparência com nossos clientes, executamos serviços com muita qualidade e com garantia.</p></h4>
              <p><a class="btn btn-primary btn-lg" href="servicos#servicos" role="button">Ver Serviços &raquo;</a></p>
            </div>

            <div class="col-md-4">
              <h2>Orçamento Grátis No Balcão</h2>
              <h4><p>Damos aos nossos clientes liberdade de ecolha antes de fecharmos qualquer negócio, álem do Orçamento á domicílio para maior comodidade, também tem a outra opção no Orçamento Grátis no Balcão.</p></h4>
              <p><a class="btn btn-primary btn-lg" href="servicos#" role="button">Ver Detalhes &raquo;</a></p>
            </div>

        </div>
    </main>
    <!-- fim trez-colunas-texto -->

    



</div>
<!-- /container FIM DA CLASSE "CONTAINER" TUDO QUE ESTIVER DENTRO DELE LOGO VAI ERDAR SUAS CARACTERISTICAS -->

<p class="pull-right"><a href="#">Volte ao Topo</a></p>



<!-- EXEMPLOS DE MENSAGENS DE ALERTAS, MUITO ÚTIL >
<div class="alert alert-success" role="alert">
    <strong>Well done!</strong> You successfully read this important alert message.
  </div>
  <div class="alert alert-info" role="alert">
    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
  </div>
  <div class="alert alert-warning" role="alert">
    <strong>Warning!</strong> Best check yo self, you're not looking too good.
  </div>
  <div class="alert alert-danger" role="alert">
    <strong>Oh snap!</strong> Change a few things up and try submitting again.
  </div>


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

