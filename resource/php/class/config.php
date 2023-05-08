<?php
   class config {
        private $user = 'root';
        private $pass = '';
        // baguhin nyo na lng ung mga nakacomment kapag imimigrate 👍
        // private $user = '';
        // private $pass = '';
        public $pdo = null;
    
        public function con() {
            try {
                $this->pdo = new PDO('mysql:host=127.0.0.1:3307;dbname=transac_sys', $this->user, $this->password);
                // $this->pdo = new PDO('mysql:host=127.0.0.1:3307;dbname=transac_sys', $this->user, $this->password);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
            return $this->pdo;
        }
   } 
?>