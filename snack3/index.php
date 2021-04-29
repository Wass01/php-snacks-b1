<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
(ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post. -->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  $date = [
    '12/02/2021' => [
      [
        'post' => 'Buongiorno',
        'autore' => 'Paperino',
        'testo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
      ],
      [
        'post' => 'buonasera',
        'autore' => 'pinco',
        'testo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
      ]
    ],
    '06/03/2021' => [
      [
        'post' => 'Bella giornata',
        'autore' => 'Pluto',
        'testo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
      ]
    ],
    '18/03/2021' => [
      [
        'post' => 'Wow',
        'autore' => 'Topolino',
        'testo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
      ]
    ]
  ];
  // var_dump($date);
  $listDate = ['12/02/2021', '06/03/2021', '18/03/2021'];

  for ($j=0; $j < count($listDate) ; $j++) {
    for ($i=0; $i < count($date[$listDate[$j]]); $i++) { ?>
      <p>
        <?= $date[$listDate[$j]][$i]['post'] ?>
        <?= $date[$listDate[$j]][$i]['autore'] ?>
        <?= $date[$listDate[$j]][$i]['testo'] ?>
      </p>
<?php }
  }
  ?>
