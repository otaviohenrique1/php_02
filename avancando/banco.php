<?php

// function adiciona2($x)
// {
//   return $x + 2;
// }
// $resultado = adiciona2(2);
// echo $resultado;

function sacar(array $conta, float $valorASacar) : array
{
  if ($valorASacar > $conta['saldo']) {
    exibeMensagem("Você não pode sacar este valor");
  } else {
    $conta['saldo'] -= $valorASacar;
  }
  return $conta;
}

function exibeMensagem(string $mensagem)
{
  echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar) : array
{
  if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  } else {
    exibeMensagem("Depósitos precisam ser positivos");
  }
  return $conta;
}


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

$contasCorrentes['123.456.789-10'] = sacar(
  $contasCorrentes['123.456.789-10'],
  200
);

$contasCorrentes['123.256.789-11'] = sacar(
  $contasCorrentes['123.256.789-11'],
  500
);

$contasCorrentes['123.256.789-12'] = depositar(
  $contasCorrentes['123.256.789-12'],
  900
);

// if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
//   exibeMensagem("Você não pode sacar este valor");
// } else {
//   $contasCorrentes['123.456.789-10']['saldo'] -= 500;
// }

// if (500 > $contasCorrentes['123.456.789-11']['saldo']) {
//   exibeMensagem("Você não pode sacar este valor");
// } else {
//   $contasCorrentes['123.456.789-11']['saldo'] -= 500;
// }

foreach ($contasCorrentes as $cpf => $conta) {
  // echo $cpf . ' ' . $conta['titular']  . ' ' .  $conta['saldo'] . PHP_EOL;
  exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
