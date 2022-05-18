<?php include 'includes/header.php';

//while

$i = 100;//Inicializador

while($i < 10) {

    echo $i. "<br>";

    $i++; //incremento
}

echo "<br>";
// Do While
$i = 100;

do {
    
    echo $i. "<br>";

    $i++;
}while($i < 10);


/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 Imprimir FIZZ BUZZ
 */




// For loop.
// for ($i=1; $i < 100 ; $i++) { 
//     if ($i % 3 === 0 && $i % 5 === 0) {
//         echo $i. "-Fizz Buzz <br>";

//     } else if ($i % 3 ===0 ){
//         echo $i. "-Fizz <br>";

//     } else if ($i % 5 === 0){
//         echo $i. "-Buzz <br>";

//     } else {
//         echo  $i. "<br>";
//     }
// }


// for each 
$clientes = array('Pedro','Juan', 'Karen');
foreach ($clientes as $cliente) {
    echo $cliente. "<br>";
}

// for ($i=0; $i < count($clientes); $i++) { 
//     # code...
//     echo $clientes[$i]. "<br>";
// }


$cliente = [
    'nombre' => 'Leonel',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach ($cliente as $key => $valor) {
    echo $key. " - ". $valor. "<br>";
}

include 'includes/footer.php';