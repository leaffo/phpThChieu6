<?php

class pdoClass {

    private $username = 'root';
    private $password = '';
    private $host = 'localhost';
    private $dbo = 'angularcode_task';
    private $pdo = null;

    function __construct() {
        $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbo, $this->username, $this->password);
    }

//    function pdoClass(){
//        
//    }



    public function querySql($sql) {

        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function execSQL($sql) {
        return $this->pdo->exec($sql);
    }

}

?>
