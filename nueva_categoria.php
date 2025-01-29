<?php
if (isset($_POST["nombre"]) && isset($_POST["descripcion"])) {
    include("conexiondb.php");

    // Consulta SQL con ambos parámetros
    $sql = "INSERT INTO categorias(nombre, descripcion) VALUES(:nombre, :descripcion);";

    // Preparar la sentencia
    $stm = $conexion->prepare($sql);

    // Vincular los parámetros
    $stm->bindParam(":nombre", $_POST["nombre"]);
    $stm->bindParam(":descripcion", $_POST["descripcion"]);

    // Ejecutar la consulta
    $stm->execute();

    // Redirigir a la página de categorías
    header("Location: categorias.php");
    exit();
}
?>
