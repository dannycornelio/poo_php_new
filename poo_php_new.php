<?php
abstract class Animal {
    protected $nombre;   // Propiedad protegida, accesible por las clases hijas
    private $edad;       // Propiedad privada, no accesible por las clases hijas

    abstract public function hacerSonido();   // Método abstracto, debe ser implementado por las clases hijas

    protected function obtenerEdad() {  // Método protegido, accesible por las clases hijas
        return $this->edad;
    }
}

class Perro extends Animal {
    public function hacerSonido() {
        echo "El perro hace woof!";
    }

    public function mostrarNombre() {
        echo $this->nombre;  // Accediendo a la propiedad protegida heredada
    }
}

class Gato extends Animal {
    public function hacerSonido() {
        echo "El gato hace miau!";
    }

    public function __construct() {
        $this->nombre = "Tom";  // Accediendo y modificando la propiedad protegida heredada
        //$this->edad = 5;     // ERROR: No se puede acceder a una propiedad privada heredada
    }
}


?>