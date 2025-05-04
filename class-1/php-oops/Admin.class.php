<?php

    class Admin extends Database {
        
        public $name = "Jon Doe";
        protected $email = "jon.doe@gmail.com";
        private $password = "hello123";

        public function __construct() {
            echo "Admin class is constructed" . "<br />";
        }

        public function __destruct () {
            echo "Admin class is destructed" . "<br />";
        }

        public function getAdminName () {
            echo $this->connect();
            return $this->name;
        }

        public function getAdminEmail () {
            return $this->email;
        }

        public function getAdminNameAndMessage ($message) {
            return $message . " " . $this->getAdminName();
        }

    }

    $Admin = new Admin();


?>