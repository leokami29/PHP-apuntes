<?php include 'includes/header.php';

$autenticado = false;
$admin = false;

if($autenticado && $admin) {
    echo "Usuario autenticado correctamente";
}else{
    echo "Usuario no autenticado inicia sesion";
}

//if anidado
$cliente = [
    'nombre' => 'Leonel',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'regular'
    ]
];

echo "<br>";
if (!empty($cliente)) {
    echo "El arreglo de cliente no esta vacio";

    if ($cliente['saldo'] > 0) {
        # code...
        echo "<br>";
        echo "El cliente tiene saldo disponible";
    } else {
        echo "<br>";
        echo "No hay saldo";
    }
}

echo "<br>";
//else if
if($cliente ['saldo'] > 0) {
    echo "El Cliente tiene saldo";

} else if ($cliente ['informacion']['tipo'] === 'premium' ) {
    echo "El cliente es primium";
} else {
    echo "No hay cliente definido";
}

echo "<br>";
//Switch
$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP un buen lenguaje!";
        break;
    
    case 'C++':
        echo "C++ es un lenguaje muy robusto";
        break;

    case 'HTML':
        echo "HTML....";
        break;

    default:
        echo "Algun lenguaje que no se cual es";
        break;

}

include 'includes/footer.php';