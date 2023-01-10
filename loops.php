<?php
$ninjas = ['ryu', 'lol', 'pie'];

// For loop
// for($i = 0;$i < count($ninjas);$i++){
//     echo "$ninjas[$i]<br>";
// }

//ForEach loop  arrs as arr
// foreach($ninjas as $ninja){
//     echo $ninja . '<br>';
// }

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

// foreach($products as $product){
//     echo $product['name'] . ' - ' .$product['price'] . '<br>';
// }

// $i to use in while loop
$i = 0;

// while ($i < count($products)) {
//     echo $products[$i]['name'] . ' - ' . $products[$i]['price'] . '<br>';
//     $i++;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php loops</title>
</head>

<body>
    <h1>Products</h1>
    <?php foreach ($products as $product) { ?>

        <h3>
            <?php
                echo $product['name'];
            ?>
        </h3>
        <p>
            <?php
                echo $product['price'];
            ?>
        </p>

    <?php } ?>
</body>

</html>