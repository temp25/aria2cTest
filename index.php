<?php

  //echo shell_exec("find . -printf '%y %p\n'");

  echo "test start" . PHP_EOL;
;

  //echo shell_exec("ls -lah");
  //echo exec("ls -lah");

  echo PHP_EOL . "\nDISABLED FUNCTIONS : " . ini_get('disable_functions') . PHP_EOL;

  echo `ls-lah`;

  echo PHP_EOL . "test end" . PHP_EOL;

?>