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
        <label for="nombreArchivo">Nombre del archivo: </label>
        <br>
        <input type="text" name="nombreArchivo" id="">
        <br>
        <br>
        <label for="textoArchivo">Texto del archivo:</label>
        <br>
        <textarea name="textoArchivo" id="" cols="30" rows="10"></textarea>
        <br>
        <br>
        <button type="submit" name="crearBtn">Crear </button>
    </form>
</div>
<?php
if (isset($_POST['crearBtn'])) {
    $fp = fopen(__DIR__ . '/../../documentos/' . $_POST['nombreArchivo'] . '.txt', 'w');
    fputs($fp, $_POST['textoArchivo']);
    fclose($fp);
    echo('<h3>Archivo creado con exito, Nombre: '.$_POST['nombreArchivo'].'</h3>');
}
?>

</html>