<?php

    echo "## ~ Kalkulator Sederhana ~ ##\n";
    echo "Input angka Awal  : ";
    $var = trim(fgets(STDIN));
    echo "Input angka Akhir : ";
    $var2 = trim(fgets(STDIN));
    echo "Jenis Perhitungan : ";
    $operator = trim(fgets(STDIN));

    $result;
      
        switch ($operator) {
            case '-':
                $result = $var - $var2;
                break;
            case '+':
                $result = $var + $var2;
                break;
            case '*':
                $result = $var * $var2;
                break;
            case '/';
                $result = $var / $var2;
            default:
               echo "not operator write";
                break;
        
    }
    echo "Hasil = " . $result . "\n";
    
?>  