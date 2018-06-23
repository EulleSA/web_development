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
                        <h4 class="text-center"><span style="color: red">REGIS</span><span style="color:mediumblue">TRAR</span> <span style="color: red">DOEN</span><span style="color:mediumblue">ÇA</span></h4>
                        <form action="doencaregistrada.php" method="POST">

                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" name="nome">
                            </div>

                            <div class="form-group">
                                <label for="categoria">Categoria:</label>
                                <select name="categoria">
                                    <option value="Infecciosa">Infecciosa</option>
                                    <option value="Tropical">Tropical</option>
                                </select>
                                <!-- <input type="number" class="form-control" id="inputHospital"> -->
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