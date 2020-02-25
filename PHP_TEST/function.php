<?php
  function test($inp){
    $inp += 2;
    return $inp;
  };
  echo test(5);

  echo '<br>';

  function test2(){
    echo 'Hi!';
  };
  test2();

  echo '<br>';

  function test3($string){
    echo $string;
  };
  test3('ちんちん');

  echo '<br>';

  function test4($i1,$i2){
    $i3 = $i1 + $i2;
    return $i3;
  };

  echo test4(10,38);
?>