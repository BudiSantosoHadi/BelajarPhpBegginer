<?php

// if - else ---------------------
echo "--PERHITUNGAN BANGUN DATAR---\n";
echo "--Pilih Bangun Datar---\n";
echo " 1. Persegi Panjang\n 2. Segitiga \n 3. Lingkaran \n" ;
echo " Input No Bangun Datar : " ;
$jenis_B = trim(fgets(STDIN));

$result;

$result = $jenis_B;

if($jenis_B == '1'){
    echo "------Persegi Panjang------\n";
    echo "Panjang : ";
    $num_first = trim(fgets(STDIN));
    echo "Lebar : ";
    $num_second = trim(fgets(STDIN));
    $result_B = $num_first * $num_second;
    echo "jadi Hasil Luas dari --PersegiPanjang-- Tersebut ialah = " . $result_B . "\n" ;
    exit;

} elseif ($jenis_B == '2') {
    echo "------Segitiga------\n";
    echo "Alas : ";
    $num_first = trim(fgets(STDIN));
    echo "Tingi : ";
    $num_second = trim(fgets(STDIN));
    $result_B = 1/2 * $num_first * $num_second;
    echo "jadi Hasil Luas dari --Segitiga-- Tersebut ialah = " . $result_B . "\n" ;
    exit;

} elseif ($jenis_B == '3') {
    echo "------Lingkaran-----\n";
    echo " Ruas: ";
    $num_first = trim(fgets(STDIN));
    $result_B = 1/2 * $num_first / 2 ;
    echo "jadi Hasil Luas dari --Lingkaran-- Tersebut ialah = " . $result_B . "\n" ;
    exit;

}  else {
    echo "Bangun Datar tidak Ada dalam Inputan!!!\n";
}

echo $result;

?>