<?php

namespace App;

class JumpingOnClouds {

    public function jumpingOnClouds(array $clouds) : int
    {
        $jumpsNumb = 0;
        $arrLength = count($clouds);

        // for ($i=1; $i < count($clouds); $i++) { 
        //     if($clouds[$i] == 0) {
        //         $jumpsNumb++;
        //     }
        // }

        if($arrLength == 2 && in_array(1, $clouds)) {
            return $jumpsNumb;
        }
        if($arrLength == 2 && !in_array(1, $clouds)) {
            return $jumpsNumb + 1;
        }

        $checkNumbOfZero = [];

        foreach ($clouds as $cloud) {
            
            if(count($checkNumbOfZero) == 2 && $cloud == 1) {
                $jumpsNumb++;
            }

            if($cloud == 0) {
                array_push($checkNumbOfZero, $cloud);
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

        return $jumpsNumb;
    }

}