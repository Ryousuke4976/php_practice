<?php
  $members = [
    'name' => '本田',
    'height' => 180,
    'hobby' => 'soccer'
  ];

  foreach($members as $member){
    echo $member;
  };

  foreach($members as $key => $value){
    echo '<br>';
    echo $key.'は'.$value.'です';
  };

  echo '<br>';
  

  $members = [
    '本田' => [
      'height' => 180,
      'hobby' => 'soccer'
    ],
    '香川' => [
      'height' => 175,
      'hobby' => 'soccer'
    ]
    ];
  
  foreach($members as $name){
    foreach($name as $key => $value){
      echo '<br>';
      echo $key.'は'.$value.'です';
    };
  };
?>