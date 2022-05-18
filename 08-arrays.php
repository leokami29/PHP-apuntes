<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora']; // O $carrito = array();

//Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "<pre>";

//Acceder a un elemento de un array
echo $carrito[1];

//Añade un elemento e el indice 3 del arreglo
$carrito[3] = 'nuevo Producto...';

//Añadir un elemento nuevo al final
array_push($carrito, 'Audifonos');

//Añadir al inicio
array_unshift($carrito,'SmartWaych');

//Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "<pre>";


 $cliente = array('cliente1','cliente2','cliente3');
 echo "<pre>";
var_dump($cliente);
echo "<pre>";

echo $cliente[1];

include 'includes/footer.php';