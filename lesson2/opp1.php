<?php 
class Hello {
    public $name;
    public function display($magac){
        $this -> name = $magac;
        echo " Asc Walal so dhawaw <b>".$this->name. "<br>";
    }
    function __construct($xy){
        echo"<h1>kani waa conisturtor</h1>";
    }
    
}

?>