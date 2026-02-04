<?php

namespace App;

class Fusee{

    private $nom;
    private $niveauCarburant = 0;
    private $equipage = [];
    private $estLancee = false;

    public function __construct($nom){

        $this->nom = $nom;
    }

    public function getNom(){

        return $this->nom;
    }

    public function ajouterCarburant($litres){

        $this->niveauCarburant += $litres;

        if ($litres < 0) {
            throw new Exception("Pas de siphonage");
        }
    }

    public function embarquerAstronaute($nom){
        
        $this->equipage[] = $nom;
    }

    public function getEquipage(){

        return $equipage;
    }

    public function decoller(){

        if ($niveauCarburant < 100){
            throw new Exception("Echec");
        }
        $this->estLancee = true;
        return "Succès";
    }

    public function calculerPortee($fuel){

        return $fuel * 2.5;
    }
}