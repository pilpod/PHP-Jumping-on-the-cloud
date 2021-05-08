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

        for ($i=0; $i < count($clouds); $i++) { 
            if($i == count($clouds) - 1) {
                break;
            }

            if($clouds[$i] == 1) {
                continue;
            }

            if($i == (count($clouds) - 3) || $i == (count($clouds) - 2)) {
                $jumpsNumb++;
                break;
            }

            if($clouds[$i] == 0 && $clouds[($i + 1)] == 0 && $clouds[($i + 2)] == 0) {
                $jumpsNumb++;
                $i += 1;
                continue;
            }

            if($clouds[$i] == 0 && $clouds[($i + 1)] == 0 && $clouds[($i + 2)] == 1) {
                $jumpsNumb++;
                continue;
            }

            if($clouds[$i] == 0 && $clouds[($i + 1)] == 1) {
                $jumpsNumb++;
                continue;
            }
        }

        return $jumpsNumb;
    }

}