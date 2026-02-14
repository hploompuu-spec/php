<?php
/*
	01 - PHP - Muutujad
	Hannes Ploompuu
	14.02.2026
*/
//kaks täisarvuga muutujat
    $a = 5;
    $b = 10;
    $liitm = $a + $b;
    $lahut = $a - $b;
    $korru = $a * $b;
    $jagam = $a / $b;
    $jaak = $a % $b;
    echo "Arvudeks on $a ja $b<br>Vastused:<br>$a + $b = $liitm<br>$a - $b = $lahut<br>$a * $b = $korru<br>$a / $b = $jagam<br>$a jääk $b = $jaak<br><br>";
  
//mõõtude teisandamine
    $mm = 2540;
    $cm = $mm / 10;
    $m = $mm / 1000;

    echo "$mm mm on " . sprintf("%.2f", $cm) . " cm ja " . sprintf("%.2f", $m) . " m.<br><br>";

//täisnurkse kolmnurga ümbermõõt ja pindala
    $a = 3;
    $b = 4;
    $c = sqrt($a**2 + $b**2);
    $ymbermoot = $a + $b + $c;
    $pindala = ($a * $b) / 2;

    echo "Täisnurkse kolmnurga küljed on $a, $b ja " . sprintf("%d", $c) . ".<br>Kolmnurga ümbermõõt on " . sprintf("%d", $ymbermoot) . " ja pindala on " . sprintf("%d", $pindala) . ".<br>";
?>