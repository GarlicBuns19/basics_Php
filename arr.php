<?php
    
    session_start();
    // session_destroy();
    
    // url?noname
    if($_SERVER['QUERY_STRING'] == 'noname'){
        unset($_SESSION['name']);
    }
    
    // nullish coalescing operator
    $name = $_SESSION['name'] ?? 'Guest';
    echo htmlspecialchars($name);
    
    // get cookie
    $gender = $_COOKIE['gender'] ?? 'Unknown';
    echo htmlspecialchars($gender);

    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Products Arr</title>
</head>
<body>
    <pre>
        <?php
            print_r($products);
        ?>
    </pre>
</body>
</html>