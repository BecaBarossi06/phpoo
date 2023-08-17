<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Cadastrar</title>
</head>
<body>
<main>
  <section class="container-admin-banner">
    <img src="img/logo-serenatto-horizontal.png" class="logo-admin" alt="logo-serenatto">
    <h1> Cadastrar Usuário</h1>
    <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
  </section>
  <section class="container-form">
  <form method="post" >

  <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" placeholder="Digite o seu nome" required>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" required>

    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" placeholder="Digite a sua senha" required>

    <input type="submit" name="Cadastro" class="botao-cadastrar" value="Entrar"/>
  </form>

  </section>
</main>
</body>
</html>
<?php
include 'Usuario.php';
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  //conexão com o banco de dados;
  $usuario = new Usuario($conn);
  //Cadastrar o usuario
  if ($usuario->cadastrar($nome, $email, $senha)){
    //rdirecionar para a pagina de sucesso apos o cadastro
    header("location: cadastrar-usuario-sucesso.php");
    exist();
  }
  else{
    echo "Erro! tente novamente!";
  }
}
?>