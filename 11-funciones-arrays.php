<?php include 'includes/header.php';

// in_array - buscar un elemento en un arreglo
 $carrito = ['Tablet','Computadora', 'Television'];

var_dump( in_array('Tablet',$carrito));
var_dump( in_array('audifonos',$carrito));

//Ordenas un elementos de un arreglo
$numeros = array(1,3,6,5,8,2);
sort($numeros);// de menor a mayor
rsort($numeros);// de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' =>'premium',
    'nombre' => 'Leonel'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente);//ordena por valores por orden alfabetico
ksort($cliente);//ordena por llaves por orden alfabetico (a-z)
krsort($cliente);//ordena por llaves por orden alfabetico (z-a)
arsort($cliente);//primero las letras y despues los numeros

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';