<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <div class="container">
        My name is Shubham
        

    <?php
        echo "<br>";
        echo "I am using PHP"; // Print Statement
        // Single line comment in PHP


        /* Multiline comment 
        qwee
            whdb
        */
        // Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, sequi.

    $var1 = 34;
    $var2 = 45;
    echo "<br>";
    $newVar = $var1 + $var2;
    echo "The value of newVar is : ";
    echo $newVar;
    echo "<br>";
    echo "<h1>Heading One</h1>"
    // Arithmetic operators + - * /
    // Assignment operators =, +=, -=, *=, /= 
    // Comparison Opr  <, >, >=, <=, ==, !=
    // Inc/Dec opr post & pre ++, --
    // Logical opr && || xor !


    // var_dump($varName) fxn - iske andar kisi bhi datatype ka variable daalke uska datatype, length, structure etc ptaa kr skte hai 













    ?>

    <?php

    define('PI', 3.14);
    // We use define() to make constants in PHP
    echo "Hello";
    echo "<br>";
    // Datatypes

    // String, Integer, Float, Boolean, Array, Object - 6 data types

    $str = "gwqcdchbdu whbdhb wjdwhd";
    echo var_dump($str);


    // if, else if, else 

    // Loops :- 

    // while, do while, for, foreach()
    echo "<br>";
    $lang = array("hygtf","wef","sXZC","IUYTR");
    // We can use array() fxn to make an array
    echo $lang[0];

    echo count($lang); // count() fxn tells the number of elements in array

    echo "<br>";
    $a = 5;
    while($a<=10){
        echo $a;
        $a++;
    }
    echo "<br>";
    $x = 0;
    while($x < count($lang)){
        echo $lang[$x];
        echo "<br>";
        $x++;
    }

    // do{
    //     // statements
    // }while(condition);

    for($a=0;$a<10;$a++){
        echo "Hello";
        echo "<br>";
    }

    // Array me iterate krne me asaan hota hai foreach loop 
    echo "<br>";
    foreach($lang as $val){
        echo $val;
        echo "<br>";
    }

        function print7(){
            echo "Hello Seven";
            echo "<br>";
        }

        print7();
        print7();
        print7();



        $str1 = "Hello, my name is bhardwaj";

        echo $str1;
        echo "<br>";
        echo strlen($str1);
        echo "<br>";
        echo str_word_count($str1);

        echo $str.$str1;

        // Use . to merge print results

        echo $str1."<br>";

        echo strrev($str1);

        echo "<br>".strpos($str1, "is"); // this strpos fxn will tell the position of "is" in str1

        echo str_replace("is", "for", $str1);
    ?>

</div>









</body>
</html>