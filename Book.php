<?php
class Book{
    // Propiedades: caracteristicas de nuestros objetos
    // Metodos: definen el comportamiento de nuestros objetos
    // Metodos: Que pueden hacer nuestros objetos? 

    // Metodo magico
    public function __construct(
        private string $title,
        private string $autor,
        private float $price,
        private int $stock,
        private int $id,
    ){

    }
    public function getInfo(){
        $info = "<b> $this->title </b><br>";
        $info .= "<i>Escrito por : $this->autor </i><br>";
        $info .= "Precio $: {$this->price}<br>";
        $info .= "<b>Código - Id. : {$this->id}</b><br>";
        // Valida stock
        if($this->stock > 0){
            $info .= "Unidades disponibles : <span style = 'color:green'> {$this->stock} </span><hr>";
        }else{
            $info .= "<span style = 'color:red'> No disponible</span><hr>";
        }
        return $info;
    }
}
// Instancia de la clase Book
$book1 = new Book(
    'Confieso que he vivido',
    'Pablo Neruda',
    15.00,
    2,
    1
);

// Modifica la propiedad cuando esta es publica
//$book1->price = 0.00;
/// 

// echo $book1->getInfo();

$book2 = new Book(
    'Don Quijote de la Mancha',
    'Miguel de Cervates',
    50.00,
    3,
    1
);

// echo $book2->getInfo();

// var_dump($book1);
// Accediendo a las propiedades del metedo constructor
//echo $book1->title;
// echo '<br>';
// echo $book1->autor;


/*
    1.  Crear la clase
    2.  Mostrar contenido del objeto var_dump($Objet)
    3.  Se ejecuta automaticamente un metodo constructor
        para definir nuestros objetos.
            public function __construct(){
            //code
            }
    4.  El metodo constructor  recibe propiedades.
        Definimos el tipo de propiedad es cada uno        
            public function __construct(
                public $autor,
                public $title,                
            ){
            //code
            }
    5. En la instancia donde creamos el objeto, pasamos propiedades
           $book1 = new Book(
           'Cnfieso que he vivido',
            'Pablo Neruda',
             15.00,
             3,
             1
             );    
    6. Podemos acceder a las propiedades del objeto creado
        o instanciado con -> , aqui llama a una propiedad
        echo $book1->title;

    7. Metodo (funcion publica para acceder a la informacion)
        // $this-> Palabra reservada hace referencia al objeto 
        // que esta ejecutando el metodo en ese momento 

            public function getInfo(){
                $info = "<b> $this->title </b>";
                return $info;

            }  

            // Ejecutar metodo
            echo $book1->getInfo();      

*/


?>