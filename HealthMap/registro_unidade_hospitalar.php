<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('sessao.php'); ?>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Healthmap</title>
</head>
<body style="background-color: rgba(225, 255, 250, 0.74)">
    <section class="container-fluid " >
        <div class="row">
            <div style="width:400px;margin:auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center"><span style="color: red">CADAS</span><span style="color:mediumblue">TRO</span> <span style="color: red">UNIDADE</span><span style="color:mediumblue">HOSPITALAR</span></h4>
                        <form action="unidaderegistrada.php" method="POST">
                        
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" name="nome">
                            </div>

                            <div class="form-group">
                                <label for="cep">CEP:</label>
                                <input type="number" class="form-control" name="cep">
                            </div>

                            <div class="form-group">
                                <label for="rua">Rua:</label>
                                <input type="text" class="form-control" name="rua">
                            </div>

                            <div class="form-group">
                                <label for="bairro">Bairro:</label>
                                <input type="text" class="form-control" name="bairro">
                            </div>

                            <div class="form-group">
                                <label for="cidade">Cidade:</label>
                                <input type="text" class="form-control" name="cidade">
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado:</label>
                                <input type="text" class="form-control" name="estado">
                            </div>

                            <div class="form-group">
                                <label for="numero">Número:</label>
                                <input type="number" class="form-control" name="numero">
                            </div>

                            <div class="form-group">
                                <label for="complemento">Complemento:</label>
                                <input type="text" class="form-control" name="complemento">
                            </div>
                                   
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <a href="dashboard.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>