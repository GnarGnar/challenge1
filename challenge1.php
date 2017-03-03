<?php

function passwords($amount,$size,$exclude)
{
    $alpha= array('a','b','c','d','e','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    shuffle($alpha);
    $passwords = array();
    for($i =0;$i<amount;$i++)
    {
        for($j=0;$j<$size;$j++)
        {
            if($alpha[$j] == $exclude)
            {
                $j++;
                array_push($alpha[$j]);
            }
            else
            array_push($alpha[$j]);
        }
        
    }
}


?>