<!DOCTYPE html>

<html lang="pt-br">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--title>{{ config('app.name', 'Laravel') }}</title-->

    <!-- Styles -->
    <link href="/public/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    
    
    
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-78072195-2', 'auto');
        ga('send', 'pageview');

    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Assistência Técnica em Informática,<br>
          Orçamento sem Compromisso,
          Serviço de Leva & Tráz,
          Formatação, todas as versões do Windows">
    <meta name="author" content="Marciel Assiz - marciel.emersom@gmail.com">
   


        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--script src="../../assets/js/ie-emulation-modes-warning.js"></script--><!--Arquivo faltando, procurar-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script><!--Arquivo faltando, procurar p/ otimazar no Win-8-->
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!--script src="../../assets/js/vendor/bootstrap.min.js"--></script><!--Não é necessário quando existe o bootstrap.js-->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- Bootstrap core JavaScript ######## NÃO APAGAR DE JEITO NENHUM, SENÃO VAI PERDER OS SCRIPTS DO BOOTSTRAP ##########
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
 
    
    <!--Validações com JS local-->
    <!-- JS Para validações dos formulários-->
    
    	<!--Stylesheet local-->

    <link rel="stylesheet" href="{{url('assets/site/css/style-original.css')}}">
    <link rel="stylesheet" href="{{url('assets/site/css/assiz.css')}}"> <!-- NÃO USADO PARA OBTER GANHO DE PERFOMANCE NA HOSPEDAGEM FREE-->
  
    <!--Bootstrap-->	<!-- Latest compiled and minified CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    
    
    <div id="fb-root"></div><!-- Script para o funcionamendo "Curtir" do facebook -->
        <script>(function (d, s, id) 
            {
            var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id))
            return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script><!-- Fim do Script para o funcionamendo "Curtir" do facebook -->
    
    
	<title> @yield('content-title') </title>
</head>
<body>
    
        <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="assiz-logo animated flip">
                    <a class="a" href="../">A</a>
                    <a class="ssiz" href="../">ssiz</a>
                    <div class="informatica">
                        <span class="">Informática</span> 
                    </div>
                </div>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!--li class="active"><a href="/">Home</a></li-->
                    <li class=""><a href="/">Home</a></li>
                   <li class="dropdown">
                        <a href="servicos" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="servicos#formatacao">Computadores e Notebooks</a></li>
                            <li><a href="servicos#rede-estruturada">Redes e Roteadores</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Suporte Remoto</li>
                            <li><a href="contato">Remoção de Vírus / Spywares / Malwares</a></li>
                            <li><a href="servicos#rede-estruturada">Instalação de Programas e Impressoras</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="sobre" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sobre<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="contato">Contato</a></li> 
                        </ul>
                    </li>
                    <li><a href="http://assizinformatica.mercadoshops.com.br">Nossa Loja</a></li>
                    <li><a href="alugue1neto">Alugue um Neto<span class=" animated bounceInLeft a1n-novo"><h4>Novo</h4></span></a></li>
                  
                    <div class="login-assiz">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}dropdown
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </div>     
                </ul>  
            </div><!--/.nav-collapse -->

        </div>

    </nav>
        
    
    @yield('content-body')
       
        <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5893b2d864544b46b6b4a295/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script> 
    <!--End of Tawk.to Script-->
    
    <!-- INICIO DO RODAPÉ FOOTER -->
    <footer class="rodape"><p class="rodape">
          
            Site Desenvolvido pela - Assiz Informática<br>
            <a href="http://facebook.com/AssizInformatica" target="_blank">Facebook/AssizInformatica </a>| contato@assizinformatica
            <br>WhatsApp (41)9 9712-9336</p>
        @yield('content-footer')
    </footer>
    <!-- FIM DO RODAPÉ FOOTER -->
</body>
</html>