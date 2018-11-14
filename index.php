<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="frameworks/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="frameworks/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/global.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/index.css" />
    
    <!-- Script -->
    <script src="frameworks/jQuery/jquery-3.3.1.min.js"></script>
    <script src="frameworks/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/global.js"></script>
</head>
<body>
    <?php include 'imports/fullpage-menu/fullpage-menu.php' ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    <h1 class="titulo-vitrine">A melhor solucao para agilizar seu estabelecimento!</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Entre</h3>
                        <p>Já tem um login e quer administrar seu estabelecimento?</p>
                        <a class="btn btn-outline-primary" href="pages/login/login.php">Entre</a>
                    </div>
                    <div class="col">
                        <h3>Cadastre-se</h3>
                        <p>Crie uma conta agora e agilize o seu negocio imediatamente.</p>
                        <a class="btn btn-outline-primary" href="pages/register/register.php">Cadastre-se</a>
                    </div>
                </div>
            </div>
            <img src="assets/img/vitrine_index.jpeg" width="auto" height="94.3%" alt="">
        </div>
    </div>
    <br>
    <br>    
    <div class="container-fluid bg-black">
        <div class="container-fluid bg-baixo">
        <div class="row">
            <div class="col">
                <br>
                <h1 class="text-center titulo-baixo">
                    Seja o mais rapido de todos em apenas um passo.
                </h1>
                <br>
                <br>
                <div class="row">
                <div class="col">
                    <img src="assets/img/cp.png" class="tamanho-img" alt="...">
                    <h4 class="p-baixo">Agilize!</h4>
                    <p class="text-justify p-baixo">
                    Lorem ipsum dolor sit amet, consecaecenas et elitr non nisi nec porttitor.
                    </p>
                </div>
                <div class="col">
                    <img src="assets/img/cp.png" class="tamanho-img" alt="...">
                    <h4 class="p-baixo">Ganhe visibilidade!</h4>
                    <p class="text-justify p-baixo">
                    Lorem ipsum dm tempor non nisi nec porttitor. Morbi quis aliquet nunc.
                    </p>
                </div>
                <div class="col">
                    <img src="assets/img/cp.png" class="img-containerbaixo" alt="...">
                    <h4 class="p-baixo">Ganhe clientes!</h4>
                    <p class="text-justify p-baixo">
                    Lorem ipsum dolor sit amet, ue mollis porttitor.
                    </p>
                </div>
                </div>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>