<?php

//$fruits = ['apple','bannana','orange','mango'];
//$fruits[] = 'lemon';
//
//foreach($fruits as $fruit){
//	echo $fruit . '</br>';
//}
//
//echo '</br>';
//$count = count($fruits);
//echo $count . '</br>;

$arr = ['1','34','5','6','9','65','33','11','98','100','200','15'];

foreach($arr as $el){
    if($el % 5 == 0){
        echo $el . '</br>';
    }
}


?>