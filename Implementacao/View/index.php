<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laboratório 03</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link tex-dark active" href="#">Logo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  tex-dark" href="cadastro/cadastro.php">Cadastro</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container d-flex justify-content-center">
        <div class="card col-6 d-flex justify-content-center mt-5">
            <div class="card-header d-flex justify-content-center">
                <h1>Acesso ao Login</h1>
            </div>
            <div class="card-body">
                <form action="login/login.php" method="POST">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Usuários</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="usuarioTipo">
                            <option selected>--SELECIONE--</option>
                            <option value="Admin">Admin</option>
                            <option value="Aluno">Aluno</option>
                            <option value="Empresa">Empresa</option>
                            <option value="Professor">Professor</option>
                        </select>
                    </div>
                    <div class="form-row d-flex justify-content-center pt-3">
                        <button class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="rodape" style="position: absolute;
      bottom: 0;
      background-color: #007bff;
      color: #FFF;
      width: 100%;
      height: 100px;    
      text-align: center;
      line-height: 100px;">
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>