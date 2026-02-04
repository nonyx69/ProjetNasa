<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Fusee;


class FuseeTest extends TestCase{

    public function testEtatInitial(){

        $fusee = new Fusee("Ariane");
        $this->assertEquals("Ariane", $fusee->getnom());
        $this->assertEmpty($equipage, []);
    
    }

    public function testErreurCarburant(){

        $fusee = new Fusee("Ariane");
        $this->expectException(\Exception::class);
        $fusee->ajouterCarburant(-10);

    }

    public function testEquipage(){

        $equipage = new $equipage("Thomas");
        $this->assertContains("Thomas", getEquipage());
    }


    public function fournisseurPortee(){

        return [
            [0, 0],
            [100, 250],
            [1000, 2500],
        ];
    }

    public function testCalculPortee($litres, $attendu){

    /*
    * Test
    ** @dataProvider fournisseurPortee
    */
    $fusee = new Fusee("Ariane");
    $fusee->ajouterCarburant($litres);
    $this->assertEquals($attendus, $fusee->calculerPortee($litres));

    }
}