<?php

function mathOperation($arg1, $arg2, $operation) {
  switch ($operation) {
    case "+":
      return $arg1 + $arg2;
      break;
    case "-":
      return $arg1 - $arg2;
      break;
    case "*":
      return $arg1 * $arg2;
      break;
    case "/":
      return $arg1 / $arg2;
      break;
    case 'rand'();
      return rand(10, 100);    
      break;
      return 'Некорректно введенная опция!';
    default:
  }
}

echo mathOperation(15, 3, "/");
echo "<pre>";
print_r(rand(10, 100));
echo "<pre>";
    

?>
