<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
(ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post. -->

<?php
  $date = [
    '12/02/2021' => [
      'post' => 'Buongiorno',
      'autore' => 'Paperino',
      'testo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
    ],
    '06/03/2021' => [
      'post' => 'Bella giornata',
      'autore' => 'Pluto',
      'testo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
    ],
    '18/03/2021' => [
      'post' => 'Wow',
      'autore' => 'Topolino',
      'testo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
    ]
  ];
  var_dump($date);


  for ($i=0; $i < count($date); $i++) { ?>
    <div>
      <?= $partite['12/02/2021'][$i]['post'] ?>
      <?= $partite['12/02/2021'][$i]['autore'] ?>
      <?= $partite['12/02/2021'][$i]['testo'] ?>
    </div>
    <div>
      <?= $partite['06/03/2021'][$i]['post'] ?>
      <?= $partite['06/03/2021'][$i]['autore'] ?>
      <?= $partite['06/03/2021'][$i]['testo'] ?>
    </div>
    <div>
      <?= $partite['18/03/2021'][$i]['post'] ?>
      <?= $partite['18/03/2021'][$i]['autore'] ?>
      <?= $partite['18/03/2021'][$i]['testo'] ?>
    </div>
  <?php }
  ?>
