<?php
  for($i = 0; $i < 10; $i++){
    echo '<br>';
    echo $i;
  };


  echo '<br>';

  $j = 0;
  while($j<5){
    if($j===3){
      break;
    }
    echo '<br>';
    echo $j;
    $j++;
  }
?>