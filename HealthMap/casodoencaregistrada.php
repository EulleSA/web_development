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

                            include('conexao.php');
                            $doenca = substr($_POST['doenca'], 0, 1);
                            $nsus = $_POST['nsus'];
                            $unidade = substr($_POST['unidade'], 0, 1);
                            $matricula = $_POST['matricula'];
                            $datainicial = $_POST['datainicial'];
                            $datafinal = $_POST['datafinal'];

                            $myfile = fopen("mongo.js", "w") or die("Unable to open file!");
                            $txt = "var MongoClient = require('mongodb').MongoClient;
                            var url = 'mongodb://localhost:27017/';

                            MongoClient.connect(url, function(err, db) {
                            if (err) throw err;
                            var dbo = db.db('healthmap');
                            var myobj = { dataInicial: '$datainicial', dataFinal : '$datafinal', idUnidadeHospitalar: $unidade, matriculaUnidadeHospitalar: $matricula, nsus: $nsus, idDoenca: $doenca };
                            dbo.collection('healthmap').insertOne(myobj, function(err, res) {
                                if (err) throw err;
                                console.log('1 document inserted');
                                db.close();
                            });
                            });";
                            fwrite($myfile, $txt);
                            fclose($myfile);
                            
                            //$validation = "";
                            $output = exec("node mongo.js");
                            print_r($output);
                            //echo implode("\n", $validation);
                        ?>

                        <!-- <script>
                            var MongoClient = require('mongodb').MongoClient;
                            var url = "mongodb://localhost:27017/";

                            MongoClient.connect(url, function(err, db) {
                            if (err) throw err;
                            var dbo = db.db("mydb");
                            var myobj = { name: "Company Inc", address: "Highway 37" };
                            dbo.collection("customers").insertOne(myobj, function(err, res) {
                                if (err) throw err;
                                console.log("1 document inserted");
                                db.close();
                            });
                            });
                        </script> -->
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