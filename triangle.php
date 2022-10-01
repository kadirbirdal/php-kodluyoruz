<?php

function Triangle($value)
{
    for($i = 1; $i < $value; $i++)
    {
        $count = 0;
        while($count < $i)
        {
            echo "0";
            $count++;
        }
        echo "<br>";
    }
}

Triangle(15);