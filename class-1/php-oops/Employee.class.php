<?php

    class Employee extends Admin {

        public static $EmployeeName = 'Arjun Kandel';

        public static function getEmployeeName () {
            return self::$EmployeeName;
        }

    }

?>