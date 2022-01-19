<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-3</title>
</head>
<body>
    <h1>HELLO WORLD</h1>
    <?php
/**
     * 
     *      Definire classe User:
     *          ATTRIBUTI (private):
     *          - username 
     *          - password
     *          - age
     *          
     *          METODI:
     *          - costruttore che accetta username, e password
     *          - proprieta' getter/setter
     *          - printMe: che stampa se stesso
     *          - toString: "username: age [password]"
     * 
     *          ECCEZIONI:
     *          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
     *          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
     *          - scatenare eccezione se age non e' un numero
     * 
     *          NOTE:
     *          - per testare il singolo carattere di una stringa
     * 
     *      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
     *      try-catch e eventualmente informare l'utente del problema
     * 
     */


        Class User {
            private $username;
            private $password;
            private $age;

            public function __construct ($username, $password, $age) {
                $this-> username = getUsername($username);
                $this-> password = $password;
                $this-> age = $age;
            }

            // GETTER
            public function getUsername () {
                return $this->username;
            }
            public function getPassword () {
                return $this->password;
            }
            public function getAge () {
                return $this->age;
            }

            // OR 
            // SETTER
            public function setUsername ($username) {
                $this->username = $username;
            }
            public function setPassword ($password) {
                $this->password = $password;
            }
            public function setAge ($age) {
                $this->age = $age;
            }

            // PRINTER
            public function __toString() {

                return $this -> username . " " . $this -> password . " " . $this -> age;
            }        
            
        }
        echo $u1;
        $u1 = new User ("Marco", "capo", 13);
     ?>

    






</body>
</html>