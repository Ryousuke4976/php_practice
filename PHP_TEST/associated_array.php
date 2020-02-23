<?php
  $asd_array = [
      'name' => '本田',
      'height' => 170,
      'study' => 'English'
    ];


  echo $asd_array['name'];

  echo '<br>';
  var_dump($asd_array);

  $my_parentes = [
    'name' => ['father','mother'],
    'children' => ['ryousuke','syunya','daigo','ginzi','tina']
  ];

  echo '<br>';


  echo $my_parentes['name'][1];

  echo'<br>';


  $school = [
    '一組' => [
      '本田' => [
        'height' => 180
      ],
      '香川' => [
        'height' => 175
      ]
    ],
    '二組' => [
      '長谷部' => [
        'height' => 178
      ],
      '乾' => [
        'height' => 168
      ]
    ]
  ];

  echo $school['一組']['本田']['height'];
?>