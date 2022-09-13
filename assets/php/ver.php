<?php include 'head.php' ?>
<header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="../../index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-white" href="crear.php">Crear</a>
                    <a class="nav-link text-white" href="borrar.php">Borrar</a>
                    <a class="nav-link text-white" href="ver.php">Leer</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="container text-center">
    <form action="" method="post">
        <label for="nombreArchivo">Nombre de archivo a leer: </label>
        <br>
        <input type="text" name="archivoLeer" id="">
        <br>
        <br>
        <button type="submit" name="leerBtn">Leer</button>
    </form>
    <?php
    if (isset($_POST['leerBtn'])) {
        $archivo = __DIR__ . '/../../documentos/' . $_POST['archivoLeer'] . '.txt';
        $abrir = fopen($archivo, 'r+');
        $tam = filesize($archivo);
        $leer = fread($abrir, $tam);
        echo('<br>');
        echo('<br>');
        echo('<br>');
        echo ('<h3>' . $leer . '</h3>');
    }





    ?>
</div>