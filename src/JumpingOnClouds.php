<?php

namespace App;

class JumpingOnClouds {

    public function jumpingOnClouds(array $clouds) : int
    {
        $jumpsNumb = 0;

        for ($i=1; $i < count($clouds); $i++) { 
            if($clouds[$i] == 0) {
                $jumpsNumb++;
            }
        }

        return $jumpsNumb;
    }

}