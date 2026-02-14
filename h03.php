<?php
/*
	03 - PHP - HTML vormist info töötlemine
	Hannes Ploompuu
	14.02.2026
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $t_a = $_POST['trapets_a'];
    $t_b = $_POST['trapets_b'];
    $t_h = $_POST['trapets_h'];
    $r_a = $_POST['romb_a'];
    // Trapetsi pindala: S = ((a + b) / 2) * h
    $trapetsi_pindala = (($t_a + $t_b) / 2) * $t_h;
    // Rombi ümbermõõt: P = 4 * a
    $rombi_umbermoot = 4 * $r_a;

    echo "<h3>Tulemused:</h3>";
    
    echo sprintf(
        "Trapetsi, mille alused on %s ja %s ning kõrgus %s, pindala on %.1f ruutmillimeetrit.<br>", 
        $t_a, $t_b, $t_h, $trapetsi_pindala
    );

    echo sprintf(
        "Rombi, mille külg on %s, ümbermõõt on %.1f millimeetrit.", 
        $r_a, $rombi_umbermoot
    );
    
    echo "<br><br><a href='03.html'>Tagasi arvutama</a>";
} else {
    echo "Palun täida vorm!";
}
?>