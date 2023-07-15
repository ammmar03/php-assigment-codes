<?php
    echo "<pre>";

    $people = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

    function display($array)
    {
        foreach($array as $p => $a)
        {
        echo "$p\t $a<br>";
        }
    }

    //sorted by value, ascending
    asort($people);
    display($people);
    echo"<br>";

    //sorted by key, ascending
    ksort($people);
    display($people);
    echo"<br>";

    //sorted by value, descending
    arsort($people);
    display($people);
    echo"<br>";

    //sorted by key, descending
    krsort($people);
    display($people);

    echo "</pre>";
?>
