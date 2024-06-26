<?php
require_once 'funcoes.php';
// require 'funcoes.php';
// include 'funcoes.php';

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

$contasCorrentes['123.456.789-11'] = sacar(
  $contasCorrentes['123.456.789-11'],
  500
);

$contasCorrentes['123.256.789-12'] = depositar(
  $contasCorrentes['123.256.789-12'],
  900
);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

/* remove um item da lista */
unset($contasCorrentes['123.256.789-12']);

// if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
//   exibeMensagem('Você não pode sacar este valor');
// } else {
//   $contasCorrentes['123.456.789-10']['saldo'] -= 500;
// }

// if (500 > $contasCorrentes['123.456.789-11']['saldo']) {
//   exibeMensagem('Você não pode sacar este valor');
// } else {
//   $contasCorrentes['123.456.789-11']['saldo'] -= 500;
// }

/* echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
  // ['titular' => $titular, 'saldo' => $saldo] = $conta;
  // list('titular' => $titular, 'saldo' => $saldo) = $conta;
  // echo $cpf . ' ' . $conta['titular']  . ' ' .  $conta['saldo'] . PHP_EOL;
  // exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
  // exibeMensagem("$cpf $titular $saldo");
  exibeConta($conta);
}
echo "</ul>"; */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contas correntes</h1>
  <dl>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
    <dt>
      <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
    </dt>
    <dd>Saldo: <?= $conta['saldo'];?></dd>
    <?php }?>
  </dl>
</body>
</html>