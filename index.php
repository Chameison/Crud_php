<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud - PHP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=new">Adicionar Usuário</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=list">Listar Usuário</a>
            </li>
        
        </ul>
        </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
        <div class="col mt-5">  
        <?php 

            include("config.php"); //incluindo as configurações 
            switch($_REQUEST["page"]) {
                case 'new':
                    include('new_user.php');
                break;
                case 'list':
                    include('list_user.php');
                break;
                default:
                    print '<h1>Bem vindo!</h1>';
            }
  
        ?>
        </div>
    </div>
  </div>




    <script src="js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>