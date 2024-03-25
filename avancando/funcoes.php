<?php

function sacar(array $conta, float $valorASacar): array
{
  if ($valorASacar > $conta['saldo']) {
    exibeMensagem('Você não pode sacar este valor');
  } else {
    $conta['saldo'] -= $valorASacar;
  }
  return $conta;
}

function exibeMensagem(string $mensagem)
{
  echo $mensagem . "<br/>";
  // echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array
{
  if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  } else {
    exibeMensagem('Depósitos precisam ser positivos');
  }
  return $conta;
}

/* & => recebe o endereco da conta */
/* & => passa exatamente essa conta e nao uma copia */
function titularComLetrasMaiusculas(array &$conta)
{
  $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta) {
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  // echo "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
  echo "<li>Titular: $titular. Saldo: $saldo</li>";
}
