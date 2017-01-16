<?php 
    $x = 0; 

    while($x <= 22) {
        
        if($x % 5 != 0 || $x == 0)
        {
            echo "The number is: $x<br>";
        }
        $x += 2;                        
        

        
    } 

    echo "<hr>";

    for($a = 0; $a <= 100; $a += 10)
    {
        echo "The number is: $a<br>";
    }

    echo "<hr>";

    $fruits = array("Cherries", "Apples", "Plums", "peaches");
    $arrlength = count($fruits);

    //echo count($fruits);

    for($b = 1; $b <= $arrlength; $b++){
        echo "$b) " . $fruits[$b - 1];
        echo "<br>";
    }

    echo "<ol>";
    for($b = 1; $b <= $arrlength; $b++)
    {
        echo "<li>{$fruits[$b-1]}</li>";
    }
    echo "</ol>";
?>