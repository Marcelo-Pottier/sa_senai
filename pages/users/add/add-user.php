<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="../../../frameworks/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../frameworks/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="../../../assets/css/global.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="add-user.css" />
        
        <!-- Script -->
        <script src="../../../frameworks/jQuery/jquery-3.3.1.min.js"></script>
        <script src="../../../frameworks/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../../assets/js/global.js"></script>
</head>
<body>
    <div class="container">
    <div class="logo"></div>
        <div class="row">
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4"></div>
            <div class="col-sm-12 col-md-4">
                <div class="card transparencia">
                    <div class="card-header title text-center">
                        <h2 >Easy Commands</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Nome completo do proprietario</label>
                                <input type="text" class="form-control" required id="exampleInputName" > 
                            </div>
                            <div class="form-group">
                                <label for="user">Endereço de email</label>
                                <input type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text letra">Nós nunca vamos compartilhar seu e-mail com mais ninguém.</small>
                            </div>
                            <div class="form-group">
                                    <label for="social">Razão social</label>
                                    <input type="text" class="form-control" required id="exampleInputSocial"> 
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" required id="senha1" placeholder="Senha">
                            </div>
                            
                            <div class="form-group">
                                <label for="confpassword">Confirmar Senha</label>
                                <input type="password" class="form-control" required id="senha2"  placeholder="Confirmar senha">
                                <p id="msgerro"> </p>
                            </div>
                            <div class="dividerText letra">Endereço</div>
                            <div class="divider"></div>
                            <div class="form-group">
                                    <label for="inputCountry">País</label>
                                    <select id="inputCountry" class="form-control" required>
                                        <option>Brasil</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="number" class="form-control" id="exampleInputCep" required >
                            </div>
                            <div class="form-group">
                                <label for="inputState">Estado</label>
                                <select id="inputState" class="form-control" required>
                                <option selected>Escolha...</option>
                                <option>...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputCity">Cidade</label>
                                <select id="inputCity" class="form-control" required>
                                <option selected>Escolha...</option>
                                <option>...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                    <label for="street">Rua</label>
                                    <input type="text" class="form-control" required id="exampleInputStreet"> 
                            </div>
                            <div class="form-group">
                                    <label for="number">Número</label>
                                    <input type="number" class="form-control" required id="exampleInputNumber" > 
                            </div>  
                            <div class="divider"></div>  
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" required id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Aceito e concordo com os termos ditos no site</label>
                            </div>
                            <button type="submit" onclick="clicou()" class="btn btn-outline-primary float-right">Cadastre-se</button>
                            <a href="../../login/login.php" class="btn btn-outline-danger float-left">Voltar</a>
                        </form>                       
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
            </div>
        </div>
    </div>       
</body>
</html>