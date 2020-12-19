<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
mysqli_report(MYSQLI_REPORT_ALL); // Activa reporte de todo error que se presente
try{
// Crea conexión a la base de datos
$conexion = new mysqli("localhost","root","123456789", "nomina");
// Crea consulta preparada con 3 parametros
$consultaSQL = "INSERT INTO Empleados (nombre, fecha, sueldo) VALUES (?, ?, ?)";
$comandoSQL = $conexion->prepare($consultaSQL);
// Obtiene los valores del formulario
$nombre = $_GET['nombre'];
$fecha = $_GET['fecha'];
$sueldo = $_GET['sueldo'];
// Asigna valores a cada uno de los 3 parametro de la consulta
$comandoSQL->bind_param("ssd", $nombre, $fecha, $sueldo);
$comandoSQL->execute(); // Ejecuta consulta INSERT
echo "Empleado registrado con exito!!!";
} // fin try
catch(Exception $e){
echo "Error: " . $e->getMessage();
}
?>


</body>
</html>