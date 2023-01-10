<?php
    // indexed arr
    $people = ['Mary','Shaun','Ryu'];

    // index is 1
    // echo $people[1];

    //Another way
    $people1 = array('Sary','Cake','Jos');
    // echo $people1[0];
    // $people1[0] = 'John';
    
    // arr push
    // $people1[] = 60;
    // array_push($people1,'Milk');
    
    //Print readable to convert arr to string
    // print_r($people1);

    //Count arr instead of arr.length
    // echo count($people1); // 3 

    //Merge arr
    $p2 = array_merge($people,$people1);
    // print_r($p2);

    // -------------------------------------------------------------------------------------------------------

    // associative arr
    // key value pairs

    $ninjas = ['shaun' => 'black','yoshi' => 'brown','mario' => 'blue'];
    // echo $ninjas['yoshi'];
    # echo print_r($ninjas);

    $ninjas1 = array('shaun' => 'black','yoshi' => 'brown','mario' => 'blue');
    // echo $ninjas1['shaun'];
    // echo print_r($ninjas1);

    // adding
    // $ninjas1['toad'] = 'pink';

    //overide a key or value
    // $ninjas1['shaun'] = 'yellow';

    // echo print_r($ninjas1);
    // echo count($ninjas1);

    // Merge 2 arr
    $ninja_t = array_merge($ninjas1,$ninjas);
    print_r($ninja_t);
