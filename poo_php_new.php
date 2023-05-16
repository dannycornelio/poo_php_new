<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//aqui creo la clase Comins
abstract class Comins{
//aqui el modificador de acceso protegido
    protected $genero;
//aqui el modificador de acceso publico
    public $titulo;
//aqui el modificador de acceso privado
    private $autor;

    public static $estado = "Emision";

//aqui el metodo __construct se ejecuta al ejercer la instancia 
    public function __construct($genero, $titulo, $autor){
// se le das valores a los atributos segun los parametros en el metodo construct
        $this->genero = $genero;
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
//definicion de metodo
    final public static function getEstado(){
        echo "La obra esta en estado " . self::$estado;
    }

    public function getInfo() : void{
        echo "El titulo es $this->titulo, y de genero $this->genero";
    }
    public function getAutor(): void{
        echo "El autor de la obra es:  $this->autor ";
    }

}
//aqui la clase manga es la hija y la Comins es el padre de quien se heredan las caracteristicas
class Manga extends Comins{
    public $volumen;
    //metodo
    public function __construct($volumen = 0, $genero = 0, $titulo = 0, $autor = 0){
        $this->volumen = $volumen;
        parent::__construct($genero, $titulo, $autor);
    }
   //metodo
    public function getInfo() : void{
        echo "El Manga es titulado $this->titulo, de genero $this->genero, su volumen $this->volumen, y esta en estado " . parent::$estado;
    }
}

//aqui la clase Manhwa hereda de comins
class Manhwa extends Comins{
//metodo 
    public function getInfo() : void{
        echo "El Manhwa es titulado:  $this->titulo, de genero $this->genero, y esta en estado " . parent::$estado;
    }
}

//instancia de la clase Manga
$manga1 = new Manga( 15,"Shonen", "One Piece", "Ichiro Oda");
$manga1->getInfo();
echo "<br>";
$manga1->getAutor();
echo "<br>";
//instancia de la clase Manhwa
$manhwa1 = new Manhwa("Shonen", "Solo Leveling", "Cornelio");
$manhwa1->getInfo();
echo"<br>";
$manhwa1->getAutor();
?>
