<?php

use App\Propiedad;

require '../../includes/app.php';
estaAutenticado();

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $idBorrar = $_POST["id"];
    $tipo = $_POST["tipo"];
    $idBorrar = filter_var($idBorrar, FILTER_VALIDATE_INT);

    if ($idBorrar) {
        if (validarTipoContenido($tipo)) {
            $propiedad = Propiedad::findById($idBorrar);
            $propiedad->delete();
        }
    }
}
