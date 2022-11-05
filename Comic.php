<?php
require 'Book.php';

  // Comic extiende (hereda) de Book
class Comic extends Book
{
    // Metodo magico
    public function __construct(
        $title,
        $autor,
        $price,
        $stock,
        $id,
        private array $illustrators,
        private int $vol
    ){
        // Usar las propiedades del constructor padre
        parent::__construct($title, $autor, $price, $stock, $id);
    }
        public function getInfo()
        {
        $result = "<b>Valumen: {$this->vol} </b><br>";

        $ul = "<ul> -----  Ilustradores -------";    
            foreach($this->illustrators as $illustrator){
            $ul.= "<li> $illustrator </li>" ;    
            }
        $ul .= "------------------------- </ul>";
        // Polimorfismo (llama al metodo de la clase padre)
        echo parent::getInfo();    
        //return $result .= $ul;
        echo $result .= $ul;
        }
}    

// Creando Objeto - Instancia de la clase Comic
$comic1 = new Comic(
    'Mafalda',
    'Quino',
    1.50,
    10,
    3,
    ['Quino','Joaquín Salvador Lavado Tejón,'],
    1
);

// Mostrar informacion del Metodo
echo $comic1->getInfo();

?>