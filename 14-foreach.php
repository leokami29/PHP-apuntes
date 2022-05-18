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

foreach ($productos as $producto) { ?>
    <li>
        <p>Prducto:<?php echo $producto['nombre']; ?></p>
        <p>Precio:<?php echo "$ " . $producto['precio']; ?></p>
        <p><?php echo ($producto['disponible']) ?'Disponible' :'No Disponible'; ?></p>
        
    </li>



<?php

    // echo "<pre>" ;
    // var_dump($producto);
    // echo "</pre>";
}


include 'includes/footer.php';
