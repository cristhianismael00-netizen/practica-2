<?php


$resultado = "";   
$boton = $_POST['boton'] ?? "";

if ($boton == "Calcular") {

    
    $bolivares = $_POST['bs'];
    $tasaeuro  = $_POST['euro'];
    $tasadolar = $_POST['dolar'];
    $tasapeso  = $_POST['peso'];

    
    $son_numeros = is_numeric($bolivares) && is_numeric($tasaeuro)
                && is_numeric($tasadolar) && is_numeric($tasapeso);

    if ($son_numeros && $tasaeuro > 0 && $tasadolar > 0 && $tasapeso > 0) {

        
        $calculo_euro  = $bolivares / $tasaeuro;
        $calculo_dolar = $bolivares / $tasadolar;
        $calculo_peso  = $bolivares / $tasapeso;

        
        $resultado  = "Tienes: " . number_format($calculo_euro, 2, ',', '.') . " Euros<br>";
        $resultado .= "Tienes: " . number_format($calculo_dolar, 2, ',', '.') . " Dólares<br>";
        $resultado .= "Tienes: " . number_format($calculo_peso, 2, ',', '.') . " Pesos Colombianos";

    } else {
        $resultado = "Revise los datos: deben ser números y las tasas mayores que 0.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Conversión de Monedas</title>
</head>
<body>
    <h1>Sistema de Conversión de Monedas</h1>

    <form method="post" action="">
        <input type="number" step="any" min="0" name="bs"
               placeholder="Ingrese los bolívares" required>
        <br>
        <input type="number" step="any" min="0" name="euro"
               placeholder="Ingrese el valor del euro en Bs" required>
        <br>
        <input type="number" step="any" min="0" name="dolar"
               placeholder="Ingrese el valor del dólar en Bs" required>
        <br>
        <input type="number" step="any" min="0" name="peso"
               placeholder="Ingrese el valor del peso en Bs" required>
        <br>
        <input type="submit" name="boton" value="Calcular">
    </form>

    <p><?php echo $resultado; ?></p>
</body>
</html>
