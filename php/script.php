<?php

class Pokemon {
    
    private $id = 0;
    private $nombre = null;
    private $fuerza = null;
    private $velocidad = null;
    private $tipoEvolucion = null;
    private $tipo = null;
    private $imagen = null;
    
    function __construct($id, $nombre, $fuerza, $velocidad, $tipoEvolucion, $tipo, $imagen){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->fuerza = $fuerza;
        $this->velocidad = $velocidad;
        $this->tipoEvolucion = $tipoEvolucion;
        $this->tipo = $tipo;
        $this->imagen = $imagen;   
    }
    
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
    
    public function getImg(){
        return $this->imagen;
    }
    
    public function setImagen($imagen){
        $this->imagen = $imagen;
        return $this;
    }
}
$pokemones = array();
$pokemones[0] = new Pokemon(0, 'Bulbasaur',49,45,1, array("Grass","Poison"),'bulbasaur.png');
$pokemones[1] = new Pokemon(1, 'Charizard',84,100,3, array("Fire","Flying"),'charizard.png');
$pokemones[2] = new Pokemon(2, 'Squirtle',48,43,1, array("Water"),'squirtle.png');
$pokemones[3] = new Pokemon(3, 'Pikachu',55,90,1, array("Electric"),'pikachu.png');
$pokemones[4] = new Pokemon(4, 'Flareon',130,65,4, array("Fire"),'flareon.png');
$pokemones[5] = new Pokemon(5, 'Mewtwo',110,130,"Sin linea evolutiva", array("Psychic"),'mewtwo.png');
$pokemones[6] = new Pokemon(6, 'Magikarp',1,80,1, array("Water"),'magikarp.png');
$pokemones[7] = new Pokemon(7, 'Dragonite',134,80,3, array("Dragon","Flying"),'dragonite.png');
$pokemones[8] = new Pokemon(8, 'Nidoqueen',92,76,3, array("Poison","Ground"),'nidoqueen.png');
$pokemones[9] = new Pokemon(9, 'Articuno',85,85,"Sin linea evolutiva", array("Ice","Flying"),'articuno.png');

$poke = $pokemones[0];
if(isset($_GET["pokemones"])){
    $n = $_GET["pokemones"];
    if($n < count($pokemones)){
        $poke = $pokemones[$n];
    }else{
        echo "Error, el numero dado no ha sido encontrado";
    }
}else{
    echo "Error, el numero de Pokemon no especificado";
}
?>