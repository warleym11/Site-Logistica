<?php
include_once('conexao.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM cadastro WHERE id = ?";
    
    // Utilize prepared statements para evitar SQL injection
    $stmt = $conexao->prepare($sqlSelect);
    $stmt->bind_param('i', $id); // 'i' representa o tipo de dado do parâmetro (integer)
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nome = $row['nome'];
        $cpf = $row['cpf'];
        $email = $row['email'];
        $senha = $row['senha'];
    } else {
        header('Location: sistema.php');
    }

    $stmt->close();
    $conexao->close();
} else {
    header('Location: sistema.php');
}
?>



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

    <title>Cadastro</title order-1 order-md-2>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluindo a biblioteca jQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
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
    <div class="bg order-1 order-md-2" style="background-image: url('images/mulhercadastro.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3><strong>Faça seu cadastro</strong></h3>
            
            <form action="editar_registro.php" method="POST">
            <div class="form-group first">
              <label for="username">Nome</label>
              <input type="text" class="form-control" placeholder="Digite seu nome"  name="nome" required value="<?php echo $nome; ?>">
            </div>

            <div class="form-group first">
                <label for="cpf">CPF</label>
                <!-- Adicione o atributo minlength e ajuste o padrão do CPF -->
                <input type="text" class="form-control" placeholder="Digite seu CPF" id="cpf" name="cpf"
                    title="Digite um CPF no formato: xxx.xxx.xxx-xx"  pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" value="<?php echo $cpf; ?>">
            </div>

            <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" class="form-control" placeholder="seuemail@gmail.com" id="username" name="email" required value="<?php echo $email; ?>">
            </div>
              <div class="form-group last mb-3">
                <label for="password">Senha</label>
                <br>
                <input type="password" class="form-control" placeholder="Sua senha" id="password" name="senha" required value="<?php echo $senha; ?>">
                <input class="btnms" type="checkbox" id="mostrarSenha" onclick="toggleSenha()"> Mostrar senha
              </div>
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Lembrar-me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="login.php" class="forgot-pass">Entrar</a></span> 
              </div>

              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <input type="submit" value="Atualizar" class="btn btn-block btn-primary">
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
    <!-- Adicione no head do seu HTML -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#cpf').mask('000.000.000-00', {reverse: true});
      });
    </script>
    <script>
      function toggleSenha() {
        const senhaField = document.getElementById('password');
        const mostrarSenhaCheckbox = document.getElementById('mostrarSenha');
        senhaField.type = mostrarSenhaCheckbox.checked ? 'text' : 'password';
      }
    </script>

  </body>
</html>