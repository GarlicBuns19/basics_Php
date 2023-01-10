<?php

    $name = 'Harry';

    // default value $parameter = value
    // if hello() has no parameter
    function hello($name = 'none'){
        echo "good hello to you $name" ;
    }

    // hello();
    // hello($name);

    $product = ['name' => 'Milk','price' => 13];

    function formatProduct($product = ['name' => 'Default','price' => 'free']){
        // {$product['name']} inside "" to let php understand that it is a variable
        // echo "The {$product['name']} cost {$product['price']} <br>";
        return "The {$product['name']} cost {$product['price']} <br>";
    }
    // store return in variable
    $formatted = formatProduct();
    // formatProduct($product);
    echo $formatted;
?>