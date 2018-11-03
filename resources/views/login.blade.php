<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('node_modules/gentelella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('node_modules/gentelella/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('node_modules/gentelella/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('node_modules/gentelella/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1 style="font-size: 24px"> NAF Login </h1>
              <div>
                <input type="text" class="form-control" placeholder="Digite seu email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Digite sua senha" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="{{ route('visitante') }}"> Entrar </a>
                <a class="reset_pass" href="#">Esqueceu sua senha ?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Você é novo aqui no NAF ?
                  <a href="#signup" class="to_register"> <b class="color-primary" > Criar conta </b> </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h2> <i class="fa fa-2x fa-clock-o" ></i> <br> Sistema de agendamento NAF </h2>
                  <p>©2018 Esse é o mais novo sistema de agendamento do NAF</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Criar conta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Digite o seu nome" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Digite o seu email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Digite sua senha" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Digite sua senha novamente" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="{{ route('visitante') }}">Criar conta</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Você já possui uma conta ?
                  <a href="#signin" class="to_register"> Login </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                    <p>©2018 Esse é o mais novo sistema de agendamento do NAF</p>
                  </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>