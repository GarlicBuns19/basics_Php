<?php
// echo '<h1>hello php</h1>';

// variable
$name = 'Mary ';
$age = 40;

// Find a character n string
echo $name[1]; //a

// string length
echo strlen($name);

// const
// join strings via . / concatination
define('fullname', $name . $age);

// template literal in php is ""
// variable interpolation
$back_ticks = "<br> Hello my name is $name";

// string break
echo "hello \"whaa\"";
echo 'hello "whaa"';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Learning</title>
</head>

<body>
    <h1>
        <!-- <?php
                echo '<h1>hello php yup</h1>';
                ?> -->
        User Profile
    </h1>
    <h4>
        <?php
            echo fullname;
            echo $back_ticks;
        ?>
    </h4>
</body>

</html>