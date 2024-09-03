<?php


function addMask($TellCell, $mascara) {

    $a =0;
    $TelMask = "";
    
    for ($i=0; $i <= strlen($mascara); $i++) {

        if ($mascara[$i] == '#') {
            $TelMask .=  $TellCell[$a];
            $a++;
        } else {
            $TelMask .= $mascara[$i];
        }

    }

    return $TelMask;
}
$mascara = "(##) # ####-####";
$TellCell = "54991595837";
echo addMask($TellCell, $mascara);


