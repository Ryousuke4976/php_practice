<?php
  $value = 90;
   if (value > 90){
     echo 'このジェットコースターに乗ってもいいですよ！';
   } else {
     echo 'このジェットコースターは'.$value.'cmからです。';
   };

   echo '<br>';

   if ($value != 89){
     echo ('ジェットコースターに乗れるかはまだ分からないな');
   };


   echo '<br>';


   $value = '';
   if (empty($value)){
     echo ("変数valueは空です");
   };



   echo '<br>';
   $result = 80;

   echo $result >= 80 ? 'まあまあいいでしょ' : '惜しいんだけどね！';
?>