<?php
//Se incluye la conexión a la base de datos
require_once('../model/conection.php');
$conexion = new Conexion();
$con = $conexion->getConexion();


$consultaAgenda = "SELECT * from veterinario ORDER BY fecha ASC";
$resultado = $con->query($consultaAgenda);
echo "<div class='col-md-6 agregar-cita mx-auto'>";  
echo "<table>";  
echo "<tr>";  
echo "<th>Registro número</th>";  
echo "<th>Nombre de la mascota</th>";  
echo "<th>Nombre del propietario</th>";  
echo "<th>Teléfono</th>";  
echo "<th>Fecha Registro</th>";  
echo "<th>Hora Registro</th>";  
echo "<th>Síntomas</th>";  
echo "</tr>";  
while ($row = $resultado->fetch_array()) {   
    echo "<tr>";  
    echo "<td>".$row['id']."</td>";  
    echo "<td>".$row['nombre_mascota']."</td>";  
    echo "<td>".$row['nombre_propietario']."</td>";  
    echo "<td>".$row['telefono']."</td>";  
    echo "<td>".$row['fecha']."</td>";  
    echo "<td>".$row['hora']."</td>";  
    echo "<td>".$row['sintomas']."</td>";  
    echo "</tr>";  
}  
echo "</table>"; echo "</div>";  ?> 
