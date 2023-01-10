<?php

    //include
    // include('./arr.php');

    // NO ()
    include './arr.php';

    // Wrong Path but still run rest of code
    // include('./arrd.php');

    echo 'include';

    //require
    require('./arr.php');

    // NO ()
    // require './arr.php';

    // Wrong Path , will not run anything other code
    // require('./arrdd.php');

    echo 'require';
    
?>