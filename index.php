<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= "css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NW SOFT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=cadastro">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=consulta">Consulta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class= "col mt-5">
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                        case "cadastro":
                            include("cadastro-venda.php");
                        break;
                        case "consulta":
                            include("consulta-venda.php");
                        break;
                        case "salvar":
                            include("salvar-venda.php");
                        break;
                        case "editar":
                            include("editar-venda.php");
                        break;
                        default:
                            print "<h1>Bem vindos!</h1>";
                    }
                ?>
            </div>
        </div>
    </div>
    


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>