<?php

    class student {
        public $name = "Kawsar";

        public function set_name($name) {
            $this -> name = $name;
        }
    }

    $student = new Student();
    echo $student -> name;
    $student -> set_name("Samim");
    echo $student -> name;


?>