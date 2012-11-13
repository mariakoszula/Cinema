<?php
function getConvTime($t)
    {
    	$t = new DateTime($t);
        return array(	'y' => $t->format("Y"), 
						'm' => $t->format("m"), 
						'd' => $t->format("d"), 
						'h' => $t->format("H"), 
						'i' => $t->format("i"),
						's' => $t->format("s"));
    }
?>
