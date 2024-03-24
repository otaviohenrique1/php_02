<?php

// $conta1 = [
//   'titular' => 'Vinicius',
//   'saldo' => 1000
// ];

// $conta2 = [
//   'titular' => 'Maria',
//   'saldo' => 10000
// ];

// $conta3 = [
//   'titular' => 'Alberto',
//   'saldo' => 300
// ];

// $contasCorrentes = [$conta1, $conta2, $conta3];

// foreach ($contasCorrentes as $conta) {
//   echo $conta['titular'] . PHP_EOL;
// }

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Vinicius',
    'saldo' => 1000
  ],
  '123.456.789-11' => [
    'titular' => 'Maria',
    'saldo' => 10000
  ],
  '123.256.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
  ]
];

$contasCorrentes['123.258.852-12'] = [
  'titular' => 'Claudia',
  'saldo' => 2000
];

echo $contasCorrentes[12345678911]['titular'];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $conta['titular'] . PHP_EOL;
}
