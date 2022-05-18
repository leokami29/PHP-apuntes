<?php include 'includes/header.php';

$nombreCliente = "Leonel Polanco";

//Conocer extencion de un string 
echo strlen($nombreCliente); //toma encuenta los espacios en blanco 
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);
echo"<br>";


//Convertir a mayusculas
echo strtoupper($nombreCliente);
echo"<br>";

//Convertirlo en minusculas
echo strtolower($nombreCliente);
echo"<br>";
$email1= "correo@correo.com";
$email2= "Correo@correo.com";

var_dump(strtolower($email1) === strtolower($email2));

echo str_replace('Leonel','L', $nombreCliente);
echo"<br>";

//Revisar si un string existe o no
echo strpos($nombreCliente,'Leonel');

$tipoCliente ="Premium";

echo"<br>";

echo "El Cliente " .$nombreCliente ." es " .$tipoCliente;

echo"<br>";

echo "El Cliente {$nombreCliente} es ${tipoCliente}";


include 'includes/footer.php';