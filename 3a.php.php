function hitungLuasLingkaran($r) {
    $luas = pi() * pow($r, 2);
    return $luas;
}

function hitungKelilingLingkaran($r) {
    $keliling = 2 * pi() * $r;
    return $keliling;
}



$r = 5;
$luas = hitungLuasLingkaran($r);
$keliling = hitungKelilingLingkaran($r);

echo "Luas lingkaran dengan jari-jari $r adalah " . number_format($luas, 2) . "\n";
echo "Keliling lingkaran dengan jari-jari $r adalah " . number_format($keliling, 2) . "\n";


