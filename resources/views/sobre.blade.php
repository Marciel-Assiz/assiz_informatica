@extends('templates.template')

<title>Sobre Nós</title>

@section('content-body')



<div class="container theme-showcase body sobre" role="main"> <!-- INICIO DA CLASSE SOBRE--> 
        
    <div class="row sobre-empresa">
        <div class="col-sm-8 page-header">
            <h1>Sobre Nós</h1>
            <h2>Assiz Informática</h2>
            <p>Criada em meia crise política de 2015, já logo de inicio tínhamos uma objetivo bem claro: "Realizar serviços com
                muita qualidade sem abrir mão de um preço justo; buscarmos novos clientes..", entre outros objetivos
                comuns á uma Assistência Técnica recém inaugurada. Já no começo passamos por muitas dificuldades quase
                abandonamos o negócio que mal começou, todavia a quantidade de clientes era pequena, na verdade ainda não atingimos 
                uma quantia satisfatória, mas a fidelidade e a confiança que os mesmos nos deposita, é o combustível necessário
                para nos encorajar á ir em frente, com otimismo, e sempre buscando novos desafios.
            </p>
            
            <div class="">
                <h3>Curta-nos</h3>  
                <div class="fb-like" data-href="http://www.assizinformatica.com.br/sobre" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
            </div>
        </div>
        
        
        <div class="col-sm-2 sobre-foto-marciel">
        <div class="thumbnail">
                <figure class="foto-legenda">
                    <img class="img-zoom" src="{!! asset('assets/site/imgs/marciel.jpg') !!}" alt="Marciel Emersom Assiz"/>
                    <figcaption class="foto-legenda "><h3>Marciel E. Assiz</h3></figcaption>
                </figure>
                <div class="caption">
                    <h3>Marciel Emersom Assiz</h3>
                    <p>Idealizador, Técnico de Informática</p>
                </div>
            </div>
        </div>
    </div>

        <div class="row sobre-foto"> 
            
            <div class="col-sm-4 page-header">
                <div class="thumbnail">
                  <figure class="foto-legenda">  
                    <img class="img-zoom" src="{!! asset('assets/site/imgs/missao.jpg') !!}" alt="Marciel Emersom Assiz"/>
                    <figcaption class="foto-legenda "><h3>MISSÃO</h3></figcaption>
                  </figure>
                  <div class="caption">
                    <h3>MISSÃO</h3>
                    <p>Ajudar á todos com qualidade e eficiência nos serviços prestados, simplificando a 
                        Informática.</p>
                  </div>
                </div>
             </div>
            
            <div class="col-sm-4 page-header">
                <div class="thumbnail">
                  <figure class="foto-legenda">  
                      <img class="img-zoom" src="{!! asset('assets/site/imgs/visao.jpg') !!}" alt="Marciel Emersom Assiz"/>
                         <figcaption class="foto-legenda "><h3>VISÃO</h3></figcaption>
                  </figure>
                  <div class="caption">
                    <h3>VISÃO</h3>
                    <p>Ser referência na Assistência Técnica e no Desenvolvimento de Aplicações Web.</p>
                  </div>
                </div>
             </div>
            
            <div class="col-sm-4 page-header">
                <div class="thumbnail">
                  <figure class="foto-legenda">  
                    <img class="img-zoom" src="{!! asset('assets/site/imgs/valores-azul.jpg') !!}" alt="Marciel Emersom Assiz"/>
                      <figcaption class="foto-legenda "><h3>VALORES</h3></figcaption>
                  </figure>
                  <div class="caption">
                    <h3>VALORES</h3>
                    <p>Tranparência; Ética Profissional; Proximidade e respeito com os cliente e envolvidos.</p>
                  </div>
                </div>
             </div>
            
            <div class="col-sm-12    coluna-mapa">
                <h3>Como Chegar</h3>
                <div class="thumbnail">
                    <iframe class="iframe-mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14420.068158210886!2d-49.2136177!3d-25.3707454!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8377faf2a78c053a!2sAssiz+Inform%C3%A1tica!5e0!3m2!1spt-BR!2sus!4v1485748783178" width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe><div class="caption">
                    
                  </div>
                </div>
             </div>
            
            
            
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


