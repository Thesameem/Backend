<?php

    class User extends Admin {

        public $UserName = "User Name";

        public function getUserName () {
            echo $this->connect();
            return $this->UserName;
        }
    }

?>