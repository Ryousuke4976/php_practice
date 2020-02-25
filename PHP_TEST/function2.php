<?php
  $text = 'これは文字クラスの長さがわかる処理です。';
  echo strlen($text);

  echo '<br>';

  echo mb_strlen($text);

  
  echo '<br>';

  echo $str = 'これはおちんちんです。';

  echo str_replace('ちんちん','珍珍',$str);
?>