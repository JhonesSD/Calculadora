<?php

$totalIdade = 0;

$students = [
  'Aline' => ['age' => 14, 'state' => 'PR'],
  'Lucas' => ['age' => 15, 'state' => 'AM'],
  'Marta' => ['age' => 16, 'state' => 'PR'],
  'João'  => ['age' => 17, 'state' => 'SP']
];

$qntAluno = array_count_values(array_column($students, 'state'));

$estados = array_unique(array_column($students, 'state'));

$resultado = array_combine($estados, $qntAluno);

while ($res = current($resultado)) {
  if ($res == current($resultado)) {
    echo "A quantidade de alunos no estado " . key($resultado) . " é " . current($resultado) . PHP_EOL;
  }
  next($resultado);
}

foreach ($students as $item) {
  $totalIdade += $item['age'];
}

$mediaIdade = $totalIdade / count($students);

echo "A média da idade de todos os alunos é " . $mediaIdade . PHP_EOL;
