<?php
    // multi-dimensional Arrays
    $blogs = [
        ['maria karts','Tom','lorem',20],
        ['maria karts cheats','Mary','lorem',40],
    ];

    // associative arr
    $blogs1 = [
        ['title' => 'maria karts','author' => 'Tom','content' => 'lorem','likes' => 20],
        ['title' => 'maria karts cheats','author' => 'Mary','content' => 'lorem','likes' => 40],
    ];

    // echo count($blogs);

    $blogs[] =  ['title' => 'party','author' => 'Gary','content' => 'Lets go','likes' => 70];

    //Pop array
    $popped = array_pop($blogs);
    



?>

<pre>
    <?php
        print_r($blogs);
        print_r($popped);
        print_r($blogs[1][1]);
        print_r($blogs1[0]['content']);
    ?>
</pre>