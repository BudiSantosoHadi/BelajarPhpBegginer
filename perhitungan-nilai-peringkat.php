<?php
    echo "#### Nilai Peringkat ####\n";
    echo "Input Score : ";
    $inp_R = trim(fgets(STDIN));

    //  if else

    if ( $inp_R >= 85) {
        echo "Nilai Anda (A) \n";
        
        
    }elseif ( $inp_R >= 80 ) {
        echo "Nilai Anda (B) \n";
        
    }elseif ( $inp_R >=75) {
        echo "Nilai Anda (c) \n";
        
    }
    else{
        echo "Nilai KKM Kurang!! \n";
        
    }

    // switch case ......

    switch ($inp_R) {
        case ($inp_R >= 85):
            echo "Nilai Anda (A) \n";
            break;
        case ($inp_R >= 80):
             echo "Nilai Anda (B) \n";
            break;
        case ($inp_R >= 75):
             echo "Nilai Anda (C) \n";
            break;
        default:
            echo "Nilai KKM Kurang!! \n";
            break;
    }

    echo $inp_R;


?>