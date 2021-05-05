<?php

namespace App;

class JumpingOnClouds {

    public function jumpingOnClouds(array $clouds) : int
    {
        $jumpsNumb = 0;
        $arrLength = count($clouds);

        if($arrLength == 2 && in_array(1, $clouds)) {
            return $jumpsNumb;
        }
        if($arrLength == 2 && !in_array(1, $clouds)) {
            return $jumpsNumb + 1;
        }

        $checkNumbOfZero = [];

        foreach ($clouds as $cloud) {

            if($cloud == 0) {
                array_push($checkNumbOfZero, $cloud);
            }
            
            if(count($checkNumbOfZero) == 2 && $cloud == 1) {
                $jumpsNumb += 2;
                $checkNumbOfZero = [];
                continue;
            }

            if($cloud == 1) {
                $jumpsNumb++;
                $checkNumbOfZero = [];
            }

            if(count($checkNumbOfZero) == 3) {
                $jumpsNumb++;
                $checkNumbOfZero = [];
            }    
        }

        if(count($checkNumbOfZero) > 1) $jumpsNumb++;

        return $jumpsNumb;
    }

}