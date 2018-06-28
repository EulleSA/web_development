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
                        <h4 class="text-center"><span style="color: red">CADAS</span><span style="color:mediumblue">TRO</span> <span style="color: red">USUA</span><span style="color:mediumblue">RIO</span></h4>
                        
                        <?php

                            include('conexao.php');
                            $cpf = $_POST['cpf'];
                            $login = $_POST['login'];
                            $senha = $_POST['senha'];
                            $nome = $_POST['nome'];
                            $sexo = $_POST['sexo'];
                            $data = $_POST['data'];
                            $telefone = $_POST['telefone'];
                            $cep = $_POST['cep'];
                            $rua = $_POST['rua'];
                            $bairro = $_POST['bairro'];
                            $cidade = $_POST['cidade'];
                            $estado = $_POST['estado'];
                            $numero = $_POST['numero'];
                            $complemento = $_POST['complemento'];
                            $nsus = $_POST['nsus'];

                            $usuario = "INSERT INTO usuario VALUES ('$cpf', '$login', '$senha', '$nome', '$data', $sexo, $telefone)";
                            $endereco = "INSERT INTO endereco (cep, rua, bairro, cidade, estado) 
                                         SELECT * FROM (SELECT $cep, '$rua', '$bairro', '$cidade', '$estado') AS tmp 
                                         WHERE NOT EXISTS(
                                            SELECT cep, rua, bairro FROM endereco WHERE cep = $cep AND rua = '$rua' AND bairro='$bairro'
                                         )LIMIT 1";
                            $enderecousuario = "INSERT INTO endereco_usuario VALUES ('$cpf', $cep, '$numero', '$complemento')";
                            $usuario_comum = "INSERT INTO usuario_comum VALUES ($nsus, '$cpf')";

                            $insertUsuario = mysql_query($usuario);
                            $insertEndereco = mysql_query($endereco);
                            $insertEnderecoUsuario = mysql_query($enderecousuario);
                            $insertUsuarioComum = mysql_query($usuario_comum);

                            if($insertUsuario && $insertEndereco && $insertEnderecoUsuario && $insertUsuarioComum){
                                echo "<script type='text/javascript'>
                                        alert('Cadastro feito com sucesso!');
                                        window.location='registro_usuario.php';
                                    </script>";
                            }
                            else{
                                echo "<script type='text/javascript'>
                                        alert('Ocorreu um erro! Não foi possível efetuar o cadastro. Por favor, tente novamente.');
                                        window.location='registro_usuario.php';
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