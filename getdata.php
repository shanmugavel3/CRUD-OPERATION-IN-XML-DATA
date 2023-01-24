<?php

 $conn = mysqli_connect('localhost','root','','learn');


 $query = "SELECT *   FROM  details";

 $result = mysqli_query($conn,$query);



// $data = $result->fetch_all();

// for ($i=0; $i < count($result); $i++) { 
//      echo $result['name'];
// }

$xw = xmlwriter_open_memory();
xmlwriter_set_indent($xw, 1);
xmlwriter_start_document($xw, '1.0', 'UTF-8');
 

xmlwriter_start_element($xw, 'people');


foreach($result as $val){

  xmlwriter_start_element($xw, 'user');
   
xmlwriter_start_element($xw, 'id');
xmlwriter_text($xw, $val['id']);
xmlwriter_end_element($xw);

  xmlwriter_start_element($xw, 'name');
  xmlwriter_text($xw, $val['name']);
  xmlwriter_end_element($xw);

  xmlwriter_start_element($xw, 'phone');
  xmlwriter_text($xw, $val['phone']);
  xmlwriter_end_element($xw);

xmlwriter_end_element($xw); 
}

// for ($i=0; $i < count($data); $i++) { 


     
// }

xmlwriter_end_element($xw); 

xmlwriter_end_document($xw);

$user = xmlwriter_output_memory($xw);
header("Content-Type: application/xml");
echo $user;

?>