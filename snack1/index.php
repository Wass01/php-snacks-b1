<!-- PHP SNACK 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
  $partite = [
    [
      'casa' => 'Lakers',
      'ospite' => 'Celtics',
      'puntiCa' => '117',
      'puntiOs' => '110',
    ],
    [
      'casa' => 'Warriors',
      'ospite' => 'Raptors',
      'puntiCa' => '109',
      'puntiOs' => '110',
    ],
    [
      'casa' => 'Bucks',
      'ospite' => 'Heat',
      'puntiCa' => '100',
      'puntiOs' => '87',
    ],
    [
      'casa' => 'Bulls',
      'ospite' => 'Knicks',
      'puntiCa' => '104',
      'puntiOs' => '116',
    ],
    [
      'casa' => 'Clippers',
      'ospite' => 'Suns',
      'puntiCa' => '114',
      'puntiOs' => '120',
    ]
  ];
  var_dump($partite);
  for ($i=0; $i < count($partite); $i++) { ?>
    <p>
      <?= $partite[$i]['casa'] ?> -
      <?= $partite[$i]['ospite'] ?> |
      <?= $partite[$i]['puntiCa'] ?> -
      <?= $partite[$i]['puntiOs'] ?>
    </p>
<?php }
?>
