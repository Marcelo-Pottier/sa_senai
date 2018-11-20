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
        <link rel="stylesheet" type="text/css" media="screen" href="add-command.css" />
        
        <!-- Script -->
        <script src="../../../frameworks/jQuery/jquery-3.3.1.min.js"></script>
        <script src="../../../frameworks/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../../assets/js/global.js"></script>
        <script src="add-command.js"></script>
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-4"></div>
            <div class="col-sm-12 col-md-4">
                <div class="card transparencia">
                    <div class="card-header bg-primary">Novo Pedido</div>
                    <div class="card-body">
                        <div class="row">
                           <label class="text-center pedido-label"> Inteira </label>
                            <div class="input-group number-spinner">
                                <span class="input-group-btn data-dwn">
                                    <button class="btn btn-primary" data-dir="dwn">-</button>
                                </span>
                                <input type="text" class="form-control text-center" value="0" min="0" max="40">
                                <span class="input-group-btn data-up">
                                    <button class="btn btn-primary" data-dir="up">+</span></button>
                                </span>
                            </div>          
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                           <label class="text-center pedido-label"> Meia </label>
                            <div class="input-group number-spinner">
                                <span class="input-group-btn data-dwn">
                                    <button class="btn btn-primary" data-dir="dwn">-</button>
                                </span>
                                <input type="text" class="form-control text-center" value="0" min="0" max="40">
                                <span class="input-group-btn data-up">
                                    <button class="btn btn-primary " data-dir="up">+</button>
                                </span>
                            </div>          
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                           <label class="text-center pedido-label"> Infantil </label>
                            <div class="input-group number-spinner">
                                <span class="input-group-btn data-dwn">
                                    <button class="btn btn-primary" data-dir="dwn">-</button>
                                </span>
                                <input type="text" class="form-control text-center" value="0" min="0" max="40">
                                <span class="input-group-btn data-up">
                                    <button class="btn btn-primary " data-dir="up">+</span></button>
                                </span>
                            </div>          
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                        <label for="inputDrink" class="text-center pedido-label">Bebidas</label>
                                    <select id="inputDrink" class="form-control" required>
                                    <option selected>Escolha...</option>
                                        <option>Refri 2LT</option>
                                        <option>Refri 1LT</option>
                                        <option>Refri 600 ML</option>
                                        <option>Refri LTA</option>
                                        <option>Refri GRF 600ML</option>
                                        <option>Aquarius Fresh</option>
                                        <option>Água</option>
                                        <option>Suco</option>
                                        <option>Cerveja 600 ML</option>
                                        <option>Cerveja LTA</option>
                                        <option>Cerveja Preta</option>
                                        <option>Vinho Garrafa</option>
                                        <option>Vinho Taça</option>
                                    </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4"></div>
        </div>
    </div>
</body>
</html>