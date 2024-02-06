<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css2/style.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title order-1 order-md-2>
  </head>
  <body>
  
    <header class="navigation fixed-top">
      <div class="container">
        <!-- main nav -->
        <nav class="navbar navbar-expand-lg navbar-light px-0">
          <!-- logo -->
          <a class="navbar-brand logo" href="home.php">
            <img loading="lazy" class="logo-default" src="images/logo-correios-4096 2.png" alt="logo" />
            <img loading="lazy" class="logo-white" src="images/logo-correios-4096 2.png" alt="logo" />
          </a>
          <!-- /logo -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto text-center">
              <li class="nav-item dropdown active">
                
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index.html">Homepage</a></li>
                  <li><a class="dropdown-item" href="onepage-slider.html">Onepage</a></li>
                  <li><a class="dropdown-item" href="onepage-text.html">Onepage 2</a></li>
                      
                  <li class="dropdown dropdown-submenu dropright">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu  <i class="tf-ion-chevron-down"></i></a>
          
                    <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                      <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                      <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="cadastro.php">Cadastro</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="sobre.php">Sobre</a>
              </li>
             
             
             
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
                  <li><a class="dropdown-item" href="404.html">404 Page</a></li>
                  <li><a class="dropdown-item" href="blog.html">Blog Page</a></li>
                  <li><a class="dropdown-item" href="single-post.html">Blog Single Page</a></li>
                      
                  <li class="dropdown dropdown-submenu dropleft">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0201" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu  <i class="tf-ion-chevron-down"></i></a>
          
                    <ul class="dropdown-menu" aria-labelledby="dropdown0201">
                      <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                      <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- /main nav -->
      </div>
    </header>

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.png');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3><strong>Faça seu login</strong></h3>
            
            <form action="validaLogin.php" method="POST">
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" class="form-control" placeholder="seuemail@gmail.com" id="username" name="email">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Senha</label>
                <input type="password" class="form-control" placeholder="Sua senha" id="password" name="senha">
                <input class="btnms" type="checkbox" id="mostrarSenha" onclick="toggleSenha()"> Mostrar senha
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Lembrar-me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="cadastro.php" class="forgot-pass">Registre-se</a></span> 
              </div>

              <input type="submit" value="Fazer login" class="btn btn-block btn-primary">

              <?php
                  if(isset($_GET['error']) && $_GET['error'] == 'invalid') {
                      echo "<p style='color: red;'>Login ou senha inválidos.</p>";
                  }
              ?>

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    


    <script src="js2/jquery-3.3.1.min.js"></script>
    <script src="js2/popper.min.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/main.js"></script>
    <script>
      function toggleSenha() {
        const senhaField = document.getElementById('password');
        const mostrarSenhaCheckbox = document.getElementById('mostrarSenha');
        senhaField.type = mostrarSenhaCheckbox.checked ? 'text' : 'password';
      }
    </script>
  </body>
</html>