<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de departamento</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    
<header class="header <?php echo $inicio?'inicio':'';?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img src="build/img/logo.png" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Depas</a>
                        <a href="blog.php">Otras paginas</a>
                        <a href="contacto.php">Contactenos</a>
                    </nav>
                </div>
   
                
            </div> <!--.barra-->
            <?php  echo  $inicio ? "<h1>Venta de departamento en la ciudad de Lima</h1>" : ''; ?>
        </div>
    </header>