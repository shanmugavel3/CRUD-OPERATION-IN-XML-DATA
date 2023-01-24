<?php
$conn = mysqli_connect('localhost','root','','learn');
  $xml = simplexml_load_string(file_get_contents('php://input'));
  $id = $xml->id;
  $name =$xml->name;
  $phone =$xml->phone;
 


  $query ="UPDATE details SET name= '$name',phone='$phone' WHERE id= '$id'";

  $result = mysqli_query($conn,$query);
?>