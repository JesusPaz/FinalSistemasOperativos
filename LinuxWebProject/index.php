<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gestion Linux</title>
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
    
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <a href="index.php" class="navbar-brand">Gestion Linux</a>
    </nav>

    <div class="container">
        <div class="row">
            <!--Linux-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/add" method="POST">
                            <h2>Bash Linux</h2>



                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">

                                        <?php

                                        if (isset($_GET['runProcess'])) {
                                            if ($_GET['runProcess']) {
                                                # This code will run if ?run=true is set.
                                                exec("./process.sh");
                                            }
                                        }
                                        ?>

                                        <!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
                                        <a href="?runProcess=true">
                                            <input type="button" class="btn btn btn-info" value="Consultar Procesos"></a>
                                        </a>
                                    </div>
                                    <div class="col-lg-5">
                                        <a href="process.html">


                                            <input type="button" class="btn btn-primary btn-block" value="Visualizar"></a>
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <?php

                                        if (isset($_GET['runUsers'])) {
                                            if ($_GET['runUsers']) {
                                                # This code will run if ?run=true is set.
                                                exec("./users.sh");
                                            }
                                        }
                                        ?>

                                        <!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
                                        <a href="?runUsers=true">
                                            <input type="button" class="btn btn btn-info" value="Consultar Usuarios"></a>
                                        </a>
                                    </div>
                                    <div class="col-lg-5">
                                        <a href="users.html">


                                            <input type="button" class="btn btn-primary btn-block" value="Visualizar"></a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <?php

                                        if (isset($_GET['runFiles'])) {
                                            if ($_GET['runFiles']) {
                                                # This code will run if ?run=true is set.
                                                exec("./filesis.sh");
                                            }
                                        }
                                        ?>

                                        <!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
                                        <a href="?runFiles=true">
                                            <input type="button" class="btn btn btn-info" value="Consultar Filesystems"></a>
                                        </a>
                                    </div>
                                    <div class="col-lg-5">
                                        <a href="filesis.html">


                                            <input type="button" class="btn btn-primary btn-block" value="Visualizar"></a>
                                    </div>
                                </div>



                            </div>



                            
                           
                        </form>
                        </form>
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