<?php


$conn = mysqli_connect('localhost','root','','learn');
  $xml = simplexml_load_string(file_get_contents('php://input'));
//   header("Content-Type: application/xml");
//   $data = $xml->asXML();

//   foreach($xml->children() as $val){
   
  

//   } 
  $name =$xml->name;
  $phone =$xml->phone;

  $query = "INSERT INTO details (name,phone)VALUES('$name','$phone')";

  $result = mysqli_query($conn,$query);


  ?>