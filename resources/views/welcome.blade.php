<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- Estilo customizado -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/estilo.css')}}">

        <title>F I N A P - Finanças Pessoais</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <header><!-- inicio Cabecalho -->
        <nav class="navbar navbar-expand-sm navbar-light bg-warning">
        <div class="container">
          
          <a href="#" class="navbar-brand">
            <img src="{{asset('assets/images/logo-home.png')}}" width="200">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>
           
          <div class="collapse navbar-collapse" id="nav-principal">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
          </div>
          
        </div>
       
      </nav>
    </header><!--/fim Cabecalho -->

    <section id="home"><!-- Início seção home -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex"><!-- Textos da seção -->
            <div class="align-self-center">
              <h1 class="display-4">Suas contas, descomplicadas</h1>
              <p>
                Usado por mais de 1 milhão de pessoas, o Finans é uma ferramenta online que vai facilitar sua vida financeira.
              </p>

             

              <p>Disponível para
                <a href="" class="btn btn-outline-light">
                  <i class="fab fa-android fa-lg"></i>
                </a>
                <a href="" class="btn btn-outline-light">
                  <i class="fab fa-apple"></i>
                </a>
              </p>

            </div>
          </div><!--/fim textos da seção -->
          <div class="col-md-6 d-none d-md-block">
            <img src="{{asset('assets/images/capa-mulher.png')}}">
          </div>
        </div>
      </div>
    </section><!--/fim seção home -->

    <section class="caixa"><!--/Início seção saiba -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Saiba para onde vai o seu dinheiro</h2>
              <p>
                Com o Finans, você categoriza todos os seus lançamentos. Com gráficos simples, você sabe de onde vem e para onde vai o seu dinheiro.
              </p>
              
            </div>
          </div>
          <div class="col-md-6">
            <img src="{{asset('assets/images/saiba.png')}}" class="img-fluid">
          </div>
        </div>
      </div>
    </section><!--/FIM seção saiba -->

    <section class="caixa"><!--/Início seção juros -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset('assets/images/juros.png')}}" class="img-fluid">
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Pare de pagar juros e economize</h2>
              <p>
                Manter as contas em dia é sempre um problema? O Finans avisa você: receba alertas de contas a pagar e a receber!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!--/FIM seção juros -->

    <section class="caixa"><!--/Início seção recursos -->
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="{{asset('assets/images/facil.png')}}" class="img-fluid">
            <h4>Fácil de usar</h4>
            <p>
              O Finans vai além do básico e permite que você faça controles incríveis, essenciais para suas finanças. Simples como tem que ser!
            </p>
          </div>
          <div class="col-md-4">
            <img src="{{asset('assets/images/economize.png')}}" class="img-fluid">
            <h4>Economize seu tempo</h4>
            <p>
              Tempo é dinheiro! Em segundos, você tem tudo sob controle e aproveite seu tempo com o que realmente importa pra você!
            </p>
          </div>
          <div class="col-md-4">
            <img src="{{asset('assets/images/suporte.png')}}" class="img-fluid">
            <h4>Suporte amigo</h4>
            <p>
              Dúvidas? Perguntas? Nosso suporte super legal ajuda você! A gente tá aqui pra resolver seus problemas e deixar sua vida bem mais fácil!
            </p>
          </div>
        </div>
      </div>
    </section><!--/FIM seção recursos -->

    <footer class="mt-4 mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8 align-content-center">
            F I N A P <br> since 2020
          </div>
          <div class="col-md-4 d-flex justify-content-end">
            <a href="" class="btn btn-outline-dark">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="" class="btn btn-outline-dark ml-2">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="btn btn-outline-dark ml-2">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="btn btn-outline-dark ml-2">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </footer>
    </body>
</html>
