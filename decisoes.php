<?php
$idade = 21;

// if ($idade < 18) {
//   echo "Você só pode entrar se tiver mais de 18 anos" . PHP_EOL;
// } else {
//   echo "Você tem $idade anos." . PHP_EOL;
//   echo " Pode entrar";
// }

if ($idade >= 0 and $idade <= 12) {
  echo "Criança, idade => $idade";
} else if ($idade >= 13 && $idade <= 18) {
  echo "Adolecente, idade => $idade";
} elseif ($idade > 18) {
  echo "Adulto, idade => $idade";
} else {
  echo "Valor invalido";
}

// $mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
// echo $mensagem;

/*
  &&
  ||
  and
  or
*/