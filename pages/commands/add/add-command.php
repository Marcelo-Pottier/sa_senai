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
                <div class="card">
                    <div class="card-header">Novo Pedido</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <button onClick="sub()">-</button>
                            </div>
                            <div class="col">Inteiro</div>
                            <div class="col">
                                <button onClick="sum()">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4"></div>
        </div>
    </div>
</body>
</html>