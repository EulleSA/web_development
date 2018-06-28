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
                        <form action="casodoencaregistrada.php" method="POST">
                            <br/>
                            <div class="form-group">
                                <label for="doenca">Doença:</label><br/>
                                <?php
                                    include('conexao.php');
                                    $select = "SELECT id, nome FROM doenca";

                                    $resultado = mysql_query($select);
                                ?>

                                <select name="doenca">
                                    <option selected disabled>Selecione uma doença:</option>
                                    <?php while($linha = mysql_fetch_array($resultado)):;?>
                                        <option><?php echo $linha[0] . " - " . $linha[1]; ?></option>
                                        <?php endwhile; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nsus">Nº do Cartão do SUS:</label>
                                <?php
                                    include('conexao.php');
                                    $select = "SELECT nsus FROM usuario_comum";

                                    $resultado = mysql_query($select);
                                ?>

                                <select name="nsus">
                                    <option selected disabled>Selecione um número de cartão do SUS:</option>
                                    <?php while($linha = mysql_fetch_array($resultado)):;?>
                                        <option><?php echo $linha[0]; ?></option>
                                        <?php endwhile; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="unidade">Unidade Hospitalar:</label>
                                <?php
                                    include('conexao.php');
                                    $select = "SELECT uh.id, uh.nome FROM unidade_hospitalar uh JOIN usuario u JOIN usuario_hospital h WHERE u.cpf=h.cpf AND h.id_unidade_hospitalar = uh.id AND u.login='$logado'";

                                    $resultado = mysql_query($select);
                                ?>

                                <select name="unidade">
                                    <option selected disabled>Selecione uma unidade de saúde:</option>
                                    <?php while($linha = mysql_fetch_array($resultado)):;?>
                                        <option><?php echo $linha[0] . " - " . $linha[1]; ?></option>
                                        <?php endwhile; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="matricula">Matrícula:</label>
                                <?php
                                    include('conexao.php');
                                    $select = "SELECT matricula FROM usuario_hospital JOIN usuario USING(cpf) WHERE login='$logado'";

                                    $resultado = mysql_query($select);
                                ?>
                                <input type="text" class="form-control" name="matricula" value=
                                    <?php while($linha = mysql_fetch_array($resultado)):;?>
                                        <?php echo $linha[0]; ?>
                                        <?php endwhile; ?>
                                readonly>
                            </div>

                            <div class="form-group">
                                <label for="datainicial">Data Inicial:</label>
                                <input type="date" class="form-control" name="datainicial">
                            </div>

                            <div class="form-group">
                                <label for="datafinal">Data Final:</label>
                                <input type="date" class="form-control" name="datafinal">
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Registrar</button>
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