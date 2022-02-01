<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Classi oggetti proprietà metodi</title>
</head>
<body>

    <div class="container"> 

    <?php

    echo '<figure class="text-center"><blockquote class="blockquote"><p>Creazione di Classi </p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';

    class Persona{
        //Proprietà

        public $nome;
        public $cognome;
        public $eta;
        private $telefono;

        //Costruttore
        function __construct($nome, $cognome) {
            $this -> nome = $nome;
            $this -> cognome = $cognome;
        }

        //Getter e Setter
        function set_nome($nome){
            $this -> nome = $nome;
        }
        function get_nome(){
            return $this -> nome;
        }
        function set_eta($eta){
            $this ->eta = $eta;
        }
        function get_eta(){
            return $this ->eta;
        }
        function set_telefono($telefono){
            $this -> telefono = $telefono;
        }
        function get_telefono(){
            return $this -> telefono;
        }

        //Metodi
        function saluta() {
            echo "Ciao sono $this->nome $this->cognome <br>";
        }

    }

    class Fruits {
        public $name;
        public $color;
        public $weight;

        function set_name($n){
            $this -> name = $n;
        }

        protected function set_color($n){
            $this->color = $n;
        }
        private function set_weight($n){
            $this->weight = $n;
        }

        function change_color($n){
            $this -> set_color($n);
        }

    }

    $mango = new Fruits();
    $mango -> set_name('Mango');
    // $mango -> set_color('Yellow');    non accessibile dal di fuori della classe
    $mango -> change_color('Yellow');
    // $mango -> set_weight('300');      possibile cambiarle la proprietà dalla classe o da una sottoclasse
    
    $persona1 = new Persona("Luca","Rossi");            //se si usa questo non siusa il costruttore
    // $persona1 ->nome = "Luca";                       //accesso alla proprietà
    // $persona1 ->cognome = "Rossi";
    $persona1->set_eta(25);
    echo $persona1->get_nome();
    // $persona1->saluta();
    // var_dump($persona1);

    


    ?>
    
    </div>

</body>
</html>


