<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gestion Windows y Linux</title>
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #3D3331;
            color: white;
            text-align: center;
        }
        .izquierda{
            text-align: left;
        }
        .derecha{
            text-align: right;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <a href="index.php" class="navbar-brand">Gestión Windows y Linux</a>
    </nav>

    <div class="container">
        <div class="row">
            <!--Powershell-->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="/add" method="POST">
                            <h2>Powershell</h2>



                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">

                                        <?php

                                        if (isset($_GET['runProcess'])) {
                                            if ($_GET['runProcess']) {
                                                # This code will run if ?run=true is set.
                                                Shell_Exec('powershell.exe -executionpolicy bypass -NoProfile -File ".\getProcess.ps1"');
                                            }
                                        }
                                        ?>

                                        <!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
                                        <a href="?runProcess=true">
                                            <input type="button" class="btn btn btn-info" value="Consultar Proceso"></a>
                                        </a>
                                        </div>
                                        <div class="col-lg-5">
                                        <a href="process.html">


                                            <input type="button" class="btn btn-primary btn-block" value="Visualizar"></a>
                                        </div>
                                    
                                </div>
                                <div class="row">
                                        
                                </div>


                            </div>


                            
                            <button type="submit" class="btn btn-primary btn-block">Servicios</button>
                            <button type="submit" class="btn btn-primary btn-block">Discos conectados</button>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Linux -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2>Bash Linux</h2>
                        <button type="submit" class="btn btn-primary btn-block">Procesos</button>
                        <button type="submit" class="btn btn-primary btn-block">Usuarios</button>
                        <button type="submit" class="btn btn-primary btn-block">File Systems</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<div class="footer">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-white">
        <p>© 2019 Copyright:</p>
        <p class="text-white">Jesús Paz</p>
        <p class="text-white">Daniel Quintero</p>
    </div>
    <!-- Copyright -->

    </footer>

</html>