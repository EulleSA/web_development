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
                        <h4 class="text-center"><span style="color: red">REGIS</span><span style="color:mediumblue">TRAR</span> <span style="color: red">CASO DOEN</span><span style="color:mediumblue">ÇA</span></h4>
                        
                        <?php

                            // include('conexao.php');
                            // $doenca = substr($_POST['doenca'], 0, 1);
                            // $nsus = $_POST['nsus'];
                            // $unidade = substr($_POST['unidade'], 0, 1);
                            // $matricula = $_POST['matricula'];
                            // $datainicial = $_POST['datainicial'];
                            // $datafinal = $_POST['datafinal'];

                            // echo $doenca . "<br/>" . $nsus . "<br/>" . $unidade . "<br/>" . $matricula . "<br/>" . $datainicial . "<br/>" . $datafinal;

                            // mysql_close($con);
                            
                            // connect to mongodb
                            $m = new MongoDB\Driver\Manage("mongodb://localhost:27017");
                            echo "Connection to database successfully";
                                
                            // select a database
                            // $db = $m->mydb;
                            // echo "Database mydb selected";
                            // $collection = $db->createCollection("mycol");
                            // echo "Collection created succsessfully";
                        
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