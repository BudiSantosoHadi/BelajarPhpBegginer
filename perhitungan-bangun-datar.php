<?php

    // switch Case -----------------------

    echo "=== Perhitungan Bangun Datar ===\n";
    echo "jenis bangun datar = ";
    $jenis_B = trim(fgets(STDIN));

    $result;
    switch ($jenis_B) {
        case 'persegi panjang':
            echo "## Perhitungan Persegi Panjang ##\n";
            echo " panjang : ";
            $num_first = trim(fgets(STDIN));
            echo " lebar : ";
            $num_second = trim(fgets(STDIN));
            $result = $num_first * $num_second;
            echo "hasil = " . $result . "\n";
        break;
        case 'lingkaran':
            echo "## Perhitungan Lingkaran ##\n";
            echo " panjangRuas : ";
            $num_first = trim(fgets(STDIN));
            echo " ruas : ";
            $num_second = trim(fgets(STDIN));
            $result = $num_first / $num_second;
            echo "hasil = " . $result . "\n";
        break;
        case 'segitiga':
            echo "## Perhitungan segitiga ##\n";
            echo " setengah x : ";
            $num_first = trim(fgets(STDIN));
            echo " atas : ";
            $num_second = trim(fgets(STDIN));
            echo " tinggi : ";
            $num_second = trim(fgets(STDIN));
            $result = 1/2 * $num_first * $num_second;
            echo "hasil = " . $result . "\n";
        break;
        default:
            echo "nothing!! ";
        break;
    }

    echo $jenis_B;

?>