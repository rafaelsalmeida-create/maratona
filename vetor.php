<?php
$vetor = [4, 8, 15, 16, 23, 42];
$busca = 15;
$achou = false;
foreach ($vetor as $i =>$valor){
    if ($valor == $busca){
        echo "numero encontrado na posição $i";
        $achou = true;
        break;
    }
}
if (!$achou) echo "numero nao encontrado";
?>