<?php
include "opp1.php";
class Child extends Hello{
    function __construct(){
        parent::__construct('xyz');
    

    }

    public function Shawo(){
       
        $this->display('ali');      
    }
}
$ob=new Child();
$ob->Shawo();
?>