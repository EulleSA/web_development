<!DOCTYPE html>
<html lang="en">
<head>
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
                        <h4 class="text-center"><span style="color: red">CADAS</span><span style="color:mediumblue">TRO</span> <span style="color: red">USUA</span><span style="color:mediumblue">RIO</span></h4>
                        
                        <?php

                            include('conexao.php');
                            $nome = $_POST['nome'];
                            $categoria = $_POST['categoria'];

                            $doenca = "INSERT INTO doenca VALUES ('', '$nome', '$categoria')";

                            $insertDoenca = mysql_query($doenca);

                            if($insertDoenca){
                                echo "<script type='text/javascript'>
                                        alert('Cadastro feito com sucesso!');
                                        window.location='registro_doenca.php';
                                    </script>";
                            }
                            else{
                                echo "<script type='text/javascript'>
                                        alert('Ocorreu um erro! Não foi possível efetuar o cadastro. Por favor, tente novamente.');
                                        window.location='registro_doenca.php';
                                    </script>";
                            }

                            mysql_close($con);
                        
                        ?>

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