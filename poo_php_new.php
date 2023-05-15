<?php
// Se define la clase abstracta "ObraLiteraria"
abstract class ObraLiteraria{
    protected $titulo;
    public $autor;
    private static $genero = "Ficción";

    public function __construct($titulo, $autor){
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    final private static function getGenero(){
        echo "El género de la obra es " . self::$genero;
    }

    public function getInfo() : void{
        echo "La obra literaria se titula \"$this->titulo\", y es del autor $this->autor.";
    }

    abstract protected function estado();
}

// Se define la clase hija "Manga" que extiende de "ObraLiteraria"
class Manga extends ObraLiteraria{
    protected $volumenes;

    public function __construct($titulo, $autor, $volumenes = 0){
        $this->volumenes = $volumenes;
        parent::__construct($titulo, $autor);
    }

    public function getInfo() : void{
        echo "El manga \"$this->titulo\" es del autor $this->autor, tiene $this->volumenes volumenes, y el género es: " . parent::$genero;
    }

    protected function estado(){
        return "En emisión";
    }
}

//$obraLiteraria = new ObraLiteraria("La sombra del viento", "Carlos Ruiz Zafón");
$obraLiteraria->getInfo();
echo "<br>";
Manga::getGenero();
echo "<br>";
$mangaOnePiece = new Manga("One Piece", "Eiichiro Oda", 100);
$mangaOnePiece->getInfo();
echo "<br>";
echo "El estado del manga \"$mangaOnePiece->titulo\" es: " . $mangaOnePiece->estado();

?>