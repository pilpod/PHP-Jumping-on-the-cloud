<?php

namespace Tests;

use App\JumpingOnClouds;
use PHPUnit\Framework\TestCase;

class JumpingOnCloudsTest extends TestCase {

    public function test_game_with_two_clouds_without_thunderheads()
    {
        $game = new JumpingOnClouds;
        $c = [0,0];
        
        $jumpsResult = $game->jumpingOnClouds($c);

        $this->assertEquals(1, $jumpsResult);
    }

    public function test_game_with_two_clouds_with_One_thunderheads()
    {
        $game = new JumpingOnClouds;
        $c = [0,1];
        
        $jumpsResult = $game->jumpingOnClouds($c);

        $this->assertEquals(0, $jumpsResult);
    }

    public function test_game_with_6_clouds_two_thunderheads_without_double_jump()
    {
        $game = new JumpingOnClouds;
        $c = [0,1,0,0,1,0];
        
        $jumpsResult = $game->jumpingOnClouds($c);

        $this->assertEquals(3, $jumpsResult);
    }

    public function test_game_with_7_clouds_two_thunderheads_with_double_jump()
    {
        $game = new JumpingOnClouds;
        $c = [0,1,0,0,0,1,0];
        
        $jumpsResult = $game->jumpingOnClouds($c);

        $this->assertEquals(3, $jumpsResult);
    }

    public function test_game_with_10_clouds_3_thunderheads()
    {
        $game = new JumpingOnClouds;
        $c = [0,1,0,0,0,1,0,0,1,0];
        
        $jumpsResult = $game->jumpingOnClouds($c);

        $this->assertEquals(5, $jumpsResult);
    }

    public function test_game_with_6_clouds_2_thunderheads()
    {
        $game = new JumpingOnClouds;
        $c = [0,0,0,1,0,0];
        
        $jumpsResult = $game->jumpingOnClouds($c);

        $this->assertEquals(3, $jumpsResult);
    }

    public function test_game_with_20_clouds()
    {
        $game = new JumpingOnClouds;
        $c = [0,1,0,0,0,1,0,0,0,0,1,0,0,0,1,0,0,1,0,0];
        
        $jumpsResult = $game->jumpingOnClouds($c);

        $this->assertEquals(11, $jumpsResult);
    }

    public function test_game_with_10_clouds()
    {
        $game = new JumpingOnClouds;
        $c = [0,0,1,0,0,0,0,1,0,0];
        
        $jumpsResult = $game->jumpingOnClouds($c);

        $this->assertEquals(6, $jumpsResult);
    }

    public function test_game_with_50_clouds()
    {
        $game = new JumpingOnClouds;
        $c = [0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0];
        
        $jumpsResult = $game->jumpingOnClouds($c);

        $this->assertEquals(28, $jumpsResult);
    }
    

}