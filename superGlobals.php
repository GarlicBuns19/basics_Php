<?php
    // super globals

    // $_GET['name'] , $_POST['name']

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals</title>
</head>
<body>
    <pre>
        <?php
            print_r($_SERVER);
        ?>
    </pre>
    <ul>
        <li>
            <?php echo $_SERVER['SERVER_NAME'] ?>
        </li>
        <li>
            <?php echo $_SERVER['SERVER_PORT'] ?>
        </li>
        <li>
            <?php echo $_SERVER['PHP_SELF'] ?>
        </li>
    </ul>
</body>
</html>