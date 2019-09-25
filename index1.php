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
    default:
      return 'Некорректно введенная опция!';
      break;
  }
}

echo mathOperation(15, 3, "/");

?>
