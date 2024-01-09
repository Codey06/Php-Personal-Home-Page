<?php
// $db=new mysqli("localhost","root","","test");
// echo $db?"connected":"failed"


// $db=new mysqli("localhost","root","");
// $db->select_db("test");
// echo $db?"connected":"failed"

$db=new mysqli();
$db->connect("localhost","root","");
$db->select_db("test");
echo $db?"connected":"failed"


?>