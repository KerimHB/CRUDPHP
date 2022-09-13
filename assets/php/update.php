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
                    <a class="nav-link text-white" href="update.php">Modificar</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="container text-center">
    <form action="" method="post">
        <label for="nombreLeer">Nombre del archivo a modificar: </label>
        <br>
        <input type="text" name="nombreLeer" id="">
        <br>
        <br>
        <button type="submit" name="openBtn">Abrir archivo</button>
    </form>
</div>
<?php
if (isset($_POST['openBtn'])) {
    $archivo = __DIR__ . '/../../documentos/' . $_POST['nombreLeer'] . '.txt';
    $abrir = fopen($archivo, 'r+');
    $tam = filesize($archivo);
    $leer = fread($abrir, $tam);
    echo ('<div class="container text-center">');
    echo ('<label for="textoMod">Texto modificado:</label>');
    echo ('<br>');
    echo ('<textarea name="textoMod" id="" cols="30" rows="10">' . $leer . '</textarea>');
    echo ('<br>');
    echo ('<br>');
    echo ('<button type="submit" name="upBtn">Actualizar</button>');
    
    echo ('</div>');
}
if (isset($_POST['upBtn'])) {
        $fp = fopen(__DIR__ . '/../../documentos/' . $_POST['nombreLeer'] . '.txt', 'w+');
        fputs($fp, $_POST['textoMod']);
        fclose($fp);
        echo ('<h3>Archivo actualizado con exito, Nombre: ' . $_POST['nombreLeer'] . '</h3>');
        header('update.php');
    }

?>