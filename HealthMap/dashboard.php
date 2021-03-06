<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('sessao.php'); ?>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
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
                        <h4 class="text-center"><span style="color: red">HEALTH</span><span style="color:mediumblue">MAP</span></h4>
                        Seja bem-vindo, <?php echo "$logado!"; ?><a href="logout.php"><br/><br/>
                        <button type="button" class="btn btn-primary">Sair</button></a><br/><br/>

                        <a href="registro_unidade_hospitalar.php"><button type="button" class="btn btn-primary">Cadastrar Unidade Hospitalar</button></a><br/>
                        <a href="registro_usuario_hospital.php"><button type="button" class="btn btn-danger">Cadastrar Usuário Hospital</button></a><br/>
                        <a href="registro_doenca.php"><button type="button" class="btn btn-primary">Cadastrar Doença</button></a><br/>
                        <a href="registro_caso_doenca.php"><button type="button" class="btn btn-danger">Cadastrar Caso de Doença</button></a><br/>

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