<?php

    class komputer 
    {
        public $prosesor;
        public $memory;

        public function __construct($prosesor, $memory = "6 GB")
        {
            $this->prosesor = $prosesor;
            $this->memory = $memory;
        }
    }

    $jos = new komputer("CORE I7");

    echo $jos->prosesor;
    echo "<br/>";
    echo $jos->memory;

?>