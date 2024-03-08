<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
class Movie{
    // creo variabili d'istanza
    public $genre;
    public $length;
    public $name;
    public static $language = "Italian";

    
    // definisco una funzione "costruttore" per inizializzare le variabili
    function __construct($_genre, $_length, $_name){
        $this->genre = $_genre;
        $this->length = $_length;
        $this->name = $_name;
    }
    
    //funzione per stampare a schermo
    public function getStampa(){
        echo "Genre: {$this->genre}";
        echo "Length: {$this->length}";
        echo "Name: {$this->name}";
    }
}

$movies = [

    $movie1 = new Movie(
        'Action', 
        120,
        'spiderman',     
        ),
    $movie2 = new Movie(
        'Police', 
        120,
        'Superman',
        ),
    ];

    echo "<h1> Primo Film </h1>";
    $movie1->getStampa();
    echo "<h1> Secondo Film </h1>";
    $movie2->getStampa();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie oop</title>
</head>
<body>

</body>
</html>