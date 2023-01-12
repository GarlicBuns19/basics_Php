<?php

    $file = 'notes.txt';
    // echo $quote;

    // Part 1
    if(file_exists($file)){
        // $quote = readfile($file);

        // read file
        // echo $quote;
        
        // copy file
        // copy($file,'note1.txt');

        // find path
        // echo '<br>' . realpath($file);

        // file size
        // echo '<br>' . filesize($file);

        // rename file
        // rename($file,'rename.txt');
        // rename($file,'notes.txt');

        // make a directory or folder
        // mkdir('added');
    
    // ---------------------------------------
    // Part 2
    
    // opening a file for reading
    // pointer start
    // $handle = fopen($file,'r');
    $handle = fopen($file,'a+'); // Allows to write to file , pointer at the end

    // read file bites / characters
    // echo fread($handle, filesize($file));
    // echo fread($handle, 50);

    // read a single line
    echo fgets($handle);
    echo fgets($handle);
    
    // read a single character
    echo fgetc($handle);

    // write to file
    fwrite($handle,"\nI just wrote here");

    // closr file
    fclose($handle);

    // delete file
    // unlink('note1.txt');

    }else{
        echo 'No file located';
    }

?>