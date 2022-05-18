<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tv 24 pulgadas',
        'precio' => 300,
        'disponible' => true
    ],

    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],

    [
        'nombre' => 'Monitor curvo',
        'precio' => 400,
        'disponible' => false
    ]
];


echo "<pre>";
var_dump($productos);

$json = json_encode($productos,JSON_UNESCAPED_UNICODE);
var_dump($json);
$json_array = json_decode($json);

var_dump($json_array);
echo "</pre>";


include 'includes/footer.php';
