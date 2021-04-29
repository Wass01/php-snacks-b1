<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
  $alunni = [
    [
      'nome' => 'Pinco',
      'cognome' => 'Pallino',
      'voti' => [7, 4, 5, 8, 6, 6, 9, 4],
    ],
    [
      'nome' => 'Pippo',
      'cognome' => 'Baudo',
      'voti' => [5, 4, 3, 8, 8, 6, 6],
    ],
    [
      'nome' => 'Ciro',
      'cognome' => 'Ciruzzo',
      'voti' => [6, 10, 2, 7, 5, 9],
    ]
  ];

  var_dump($alunni);

  for ($i=0; $i < count($alunni) ; $i++) { ?>
      <div>
        <?= $alunni[$i]['nome']?>
        <?= $alunni[$i]['cognome']?>
        <?= 'Media voti:' . $mediaVoti = array_sum($alunni[$i]['voti'])/count($alunni[$i]['voti']) ?>
      </div>
  <?php }
?>
