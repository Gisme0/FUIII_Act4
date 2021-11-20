<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$NoEmpleado=$_POST['NoEmpleado'];
$Correo=$_POST['Correo'];
$Clave=$_POST['Clave'];

$sql="UPDATE empleado SET  Nombre='$Nombre',Apellido='$Apellido', NoEmpleado='$NoEmpleado', Correo='$Correo', Clave='$Clave'
 WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Empleado.php");
    }
?>