<?php
    date_default_timezone_set("America/Los_Angeles");
    echo date("D h:i:s A");

    $t = date("H");

    if (intval($t) < 10) 
    {
        echo " Have a good morning!";
    }
    else if(intval($t) < 20){
        echo " Have a good day!";
    }
    else{
        echo " Have a good night";
    }

    echo "<br>";

    $favcolor = "purple";

    switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>