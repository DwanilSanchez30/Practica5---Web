<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ejercicio 3 - Practica 5</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Variables PHP-->
        <?php 
            $Mes[0] = "Enero";
            $Mes[1] = "Febrero";
            $Mes[2] = "Marzo";
            $Mes[3] = "Abril";
            $Mes[4] = "Mayo";
            $Mes[5] = "Junio";
            $Mes[6] = "Julio";
            $Mes[7] = "Agosto";
            $Mes[8] = "Septiembre";
            $Mes[9] = "Octubre";
            $Mes[10] = "Noviembre";
            $Mes[11] = "Diciembre";
        ?>
       
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Home</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <!-- Llamando mes 4 de array -->
                        <p class="text-white-75 mb-5">
                            <?php echo "Este seria el mes de la posicion 4 de nuestro Arreglo: <b>$Mes[3]</b>";?>
                            </p>
                        <hr class="divider" />
                    </div>
                    <!-- Llamando a diciembre segun su posicion en el arreglo -->
                    <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">
                            <?php echo "El mes de <b>$Mes[11]</b> seria la posicion 11 ya que los arreglos cuentan desde el cero por lo tanto <b>$Mes[11]</b> es la ultima posicion";?>
                            </p>

                    <!-- Conexion entre paginas -->
                    <a class="btn btn-primary btn-xl" href="index.php">Ejercicio 1</a>
                    <a class="btn btn-primary btn-xl" href="Ejercicio2.php">Ejercicio 2</a>
                            
                        
                    </div>
                </div>
            </div>
        </header>        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>