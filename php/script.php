<?php

class Pokemon {
    
    private $id = 0;
    private $nombre = null;
    private $fuerza = null;
    private $velocidad = null;
    private $tipoEvolucion = null;
    private $tipo = null;

    public function getId(){
        return $this->id;
    }

	public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getNombre(){
        return $this->nombre;
    }

	public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }
    public function getFuerza(){
        return $this->fuerza;
    }

	public function setFuerza($fuerza){
        $this->fuerza = $fuerza;
        return $this;
    }
    public function getVelocidad(){
        return $this->velocidad;
    }

	public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
        return $this;
    }
    public function getTipoEvolucion(){
        return $this->tipoEvolucion;
    }

	public function setTipoEvolucion($tipoEvolucion){
        $this->tipoEvolucion = $tipoEvolucion;
        return $this;
    }

    public function getTipo(){
        return $this->tipo;
    }

	public function setTipo($tipo){
        $this->tipo = $tipo;
        return $this;
    }
    $pokemones = array();
    $pokemones[0] = new Pokemon(0, 'Bulbasaur',49,45,1, array("Grass","Poison"));
    $pokemones[1] = new Pokemon(1, 'Charizard',84,100,3, array("Fire","Flying"));
    $pokemones[2] = new Pokemon(2, 'Squirtle',48,43,1, array("Water"));
    $pokemones[3] = new Pokemon(3, 'Pikachu',55,90,1, array("Electric"));
    $pokemones[4] = new Pokemon(4, 'Flareon',130,65,4, array("Fire"));
    $pokemones[5] = new Pokemon(5, 'Mewtwo',110,130,"Sin linea evolutiva", array("Psychic"));
    $pokemones[6] = new Pokemon(6, 'Magikarp',1,80,1, array("Water"));
    $pokemones[7] = new Pokemon(7, 'Dragonite',134,80,3, array("Dragon","Flying"));
    $pokemones[8] = new Pokemon(8, 'Nidoqueen',92,76,3, array("Poison","Ground"));
    $pokemones[9] = new Pokemon(9, 'Articuno',85,85,"Sin linea evolutiva", array("Ice","Flying"));
}



?>