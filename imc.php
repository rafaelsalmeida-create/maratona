<?php
$peso = 80;
$altura = 1.80;

$imc = (($altura ^ 2) / $peso) * 1000;
if ($imc < 18.5) {
   echo"$imc: abaixo do peso.";
} else if ($imc <25){
  echo"$imc: peso adequado.";
} else if ($imc <30){
   echo"$imc: sobrepeso.";
} else if ($imc <35){
  echo"$imc: obesidade grau I.";
} else if ($imc <40){
     echo"$imc: obesidade grau II.";
} else {
    echo "$imc: obesidade grau III.";
}
 ?>