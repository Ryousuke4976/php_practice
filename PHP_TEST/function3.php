<?php
  $str = 'これは文字列を、で分割します。';

  $a = explode('、',$str);

  foreach($a as $t){
    echo $t;
    echo '<br>';
  };


  $a = ['上半身','下半身'];

  echo implode('と', $a);


  echo '<br>';

  $t = 'これは正規表現か確かめてみています。';
  echo preg_match('/正規表現/', $t);

  echo mb_substr('うんち', 1);
?>