<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CompraTudo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">CompraTudo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="?c=a&a=i" class="active" >Página Inicial</a></li>
        <li><a href="?c=a&a=pa" >Produtos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administradores
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="?c=a&a=aa">Adicionar administrador</a></li>
          <li><a href="?c=a&a=ra">Remover administrador</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Produtos
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="?c=a&a=ap">Adicionar produto</a></li>
          <li><a href="?c=a&a=rp">Remover produto</a></li>
        </ul>
      </li>
        <li><a href="#"><span ></span>Bem-vindo, <?=$_SESSION['nome']?></a></li>
        <li><a href="?c=l&a=off"><span class="fas fa-sign-out-alt"></span> Sair </a></li>
      </ul>
    </div>
  </div>
</nav>
  