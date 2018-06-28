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
                        <h4 class="text-center"><span style="color: red">CADAS</span><span style="color:mediumblue">TRO</span> <span style="color: red">UNIDADE</span><span style="color:mediumblue">HOSPITALAR</span></h4>
                        
                        <?php
                            include('conexao.php');
                            $nome = $_POST['nome'];
                            $cep = $_POST['cep'];
                            $rua = $_POST['rua'];
                            $bairro = $_POST['bairro'];
                            $cidade = $_POST['cidade'];
                            $estado = $_POST['estado'];
                            $numero = $_POST['numero'];
                            $complemento = $_POST['complemento'];

                            $unidade = "INSERT INTO unidade_hospitalar VALUES ('', '$nome')";
                            $endereco = "INSERT INTO endereco (cep, rua, bairro, cidade, estado) 
                                         SELECT * FROM (SELECT $cep, '$rua', '$bairro', '$cidade', '$estado') AS tmp 
                                         WHERE NOT EXISTS(
                                            SELECT cep, rua, bairro FROM endereco WHERE cep = $cep AND rua = '$rua' AND bairro='$bairro'
                                         )LIMIT 1";

                            $insertUnidade = mysql_query($unidade);
                            $id = mysql_fetch_array(mysql_query("SELECT id FROM unidade_hospitalar WHERE nome='$nome'"));
                            $enderecoUnidade = "INSERT INTO endereco_unidade_hospitalar VALUES ($id[0], $cep, '$numero', '$complemento')";
                            $insertEndereco = mysql_query($endereco);
                            $insertEnderecoUnidade = mysql_query($enderecoUnidade);

                            if($insertUnidade && $insertEndereco && $insertEnderecoUnidade){
                                echo "<script type='text/javascript'>
                                        alert('Cadastro feito com sucesso!');
                                        window.location='registro_unidade_hospitalar.php';
                                    </script>";
                            }else{
                                echo "<script type='text/javascript'>
                                        alert('Ocorreu um erro! Não foi possível efetuar o cadastro. Por favor, tente novamente.');
                                        window.location='registro_unidade_hospitalar.php';
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