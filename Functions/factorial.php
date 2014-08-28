<?php
    function factorial(&$numero)
    {
        $fact = 1;
        for ($i = $numero; $i>0; $i--)
        {
            $fact *= $i;
        }
     return $fact;   
    }
    $numero =5;
    echo factorial($numero);
    
?>


