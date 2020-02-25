<?php
  $pc = '123-3456';
  
  function checkPostalCode($ps){
    $replaced_ps = str_replace('-','',$ps);
    $length = strlen($replaced_ps);

    return $length === 7 ? '認める' : '認めない';
  };

  echo checkPostalCode($pc);
?>