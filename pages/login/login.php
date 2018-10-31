<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../../frameworks/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../frameworks/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../../assets/css/global.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />

    <!-- Script -->
    <script src="../../frameworks/jQuery/jquery-3.3.1.min.js"></script>
    <script src="../../frameworks/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/global.js"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4"></div>
            <div class="col-sm-12 col-md-4">
                <center>
                    <div class="logo bg-primary"></div>
                </center>
                <div class="card">
                    <div class="card-body">
                        <form action="../dashboard/dashboard.php">
                            <div class="form-group">
                                <label for="user">Usuário</label>
                                <input type="email" class="form-control" id="user" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    Lembrar Senha
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary text-rig">Entrar</button>
                            <a class="forgot-password" href="#">Esqueceu a senha?</a>
                        </form>
                    </div>
                    <a href="../register/register.php">
                        <div class="card-footer text-center register-button">
                            <h5>Ainda não possui uma conta?</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4"></div>
        </div>
    </div>

</body>
</html>