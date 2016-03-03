<?php
echo "Quais o total de rendimentos bancarios? ";
$Rbanc = trim(fgets(STDIN));

echo  "Quais o total de rendimentos de Salarios e Serviços? ";
$RSalServ= trim(fgets(STDIN));

echo  "Qual o total de outros rendimentos? ";
$OutrosR = trim(fgets(STDIN));

echo  "Quais o total de despesas medicas? ";
$SMed = trim(fgets(STDIN));

echo  "Quais o total de despesas com educação? ";
$SEdu = trim(fgets(STDIN));

if ($RSalServ > 24000) { 
	$aliquotaRSalServ = 0.2;
}
elseif ($RSalServ > 8000) {
	$aliquotaRSalServ = 0.15;
}
else{
	$aliquotaRSalServ = 0;
}

$impostoRbanc = $Rbanc * 0.2;

$impostoRSalServ = $RSalServ * $aliquotaRSalServ;

$impostoOutosR = $OutrosR * 0.1;

$impostoTotal = $impostoOutosR + $impostoRbanc + $impostoRSalServ;

$maximoAbate = $impostoTotal * 0.3;

if (($SMed+$SEdu)<$maximoAbate) {
	$maximoAbate=($SMed+$SEdu);
}
$total=$impostoTotal-$maximoAbate;

echo "\nImposto total\nImposto Bruto : R$ ".
number_format($impostoTotal,2,',','.')."\nAbatimentos : R$ ".
number_format($maximoAbate,2,',','.')."\nTotal a pagar : R$ ".
number_format($total,2,',','.');