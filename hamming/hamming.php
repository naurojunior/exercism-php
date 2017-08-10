<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($dna1, $dna2) {

    if (strlen($dna1) != strlen($dna2)) {
        throw new InvalidArgumentException();
    }
    
    $diff = 0;

    for ($i = 0; $i < strlen($dna1); $i++) {
        if($dna1[$i] != $dna2[$i]){
            $diff++;
        }
    }
    
    return $diff;
}
