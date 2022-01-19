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

            public function __construct ($username, $password) {
                $this->setUsername($username);
                $this->setPassword($password);
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
                if (strlen($username) < 3 || strlen($username) > 16) {
                    throw new Exception("Error: Il nome deve contenere dai 3 ai 16 caratteri");
                    
                 }else {
                     $this->username = $username;
                 }
            }
            public function setPassword ($password) {
                if (ctype_alnum($password)) {
                    throw new Exception("Error: La password deve contenere almeno un caratter speciale");
                } else {
                    $this->password = $password;
                }
            }
            public function setAge ($age) {
                if (!is_numeric($age)) {
                    throw new Exception("Error: L'età deve essere scritta in numeri");
                }else {
                    $this->age = $age;
                }
            }

            // PRINTER
            public function __toString(){
                return "-Nome : " . $this-> getUsername() . "<br> -  Anni : " . $this->getAge() . "<br> Password : [" . $this->getPassword() . "]";
            }
            public function printMe(){
                echo $this;
            }     
            
        }
        // DATI
        try {
            $u1 = new User ("Marco", "YO:YO");
            $u1-> setAge (14);
            $u1->printMe() . "<br>";
        } catch (exception $e) {
            echo $e->getMessage();
        }
     ?>

    






</body>
</html>