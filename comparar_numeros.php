<?php


$resultado = "";   
$boton = $_POST['boton'] ?? "";

if ($boton == "calcular") {        
    $A = $_POST['A'];
    $B = $_POST['B'];

    if ($A < $B) {                 // Si A es menor que B, entonces...
        $resultado = "B es la mayor";
    } elseif ($A > $B) {           // De lo contrario, si A es mayor
        $resultado = "A es la mayor";
    } else {                       // Si no pasó ninguna de las dos, son iguales
        $resultado = "A y B son iguales";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
</head>
<body>
    <h1>Cálculo</h1>

    <form method="post" action="">
        <input type="number" step="any" name="A" placeholder="Ingrese A" required>
        <br>
        <input type="number" step="any" name="B" placeholder="Ingrese B" required>
        <br>
        <input type="reset" value="Limpiar">
        <input type="submit" value="calcular" name="boton">
    </form>

    <p><?php echo $resultado; ?></p>
</body>
</html>
