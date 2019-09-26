<?php

function mathOperation($arg1, $arg2, $operation) {
 switch ($operation) {
   case '+':
     return $arg1 + $arg2;
     break;
   case '-':
     return $arg1 - $arg2;
     break;
   case '*':
     return $arg1 * $arg2;
     break;
   case '/':
     return $arg1 / $arg2;
     break;
   case 'rand':
     return rand($arg1, $arg2);
     break;
   default:
     return 'Некорректно введенная опция!';
   break;
}
}

echo mathOperation(3, 30, 'rand');

?>
    


