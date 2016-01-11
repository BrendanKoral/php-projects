<?php
          class Cat {
              public $isAlive = true; 
              public $numLegs = 4; 
              public $name; 
              
        public function __construct($name) {
            $this->name = $name; 
        }
        public function meow() {
            return "Meow meow"; 
        }
          }
          
        $cat = new Cat("CodeCat"); 
        
        echo $cat->meow(); 
    ?>