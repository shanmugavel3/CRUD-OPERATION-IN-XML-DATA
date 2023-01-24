<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    </style>

</head>

<body>
    <div class="container">
        <h1 class="text-center text-uppercase my-5 text-success">DETAILS</h1>
        <a href="./registerform.php" class="btn btn-outline-primary mb-5 ">Create Data</a>
        <table class="table table-bordered">
            <thead>
                <tr class=" table table-success">
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Phone Number</th>
                   <th class="text-center">ACTIONS</th>
                  
                </tr>
            </thead>
             <tbody id="body">
               
              
                   

                
            </tbody>
        </table> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
  
      

  
  
  const xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","./getdata.php",true);
  xmlhttp.setRequestHeader('Content-Type','application/xml')
  xmlhttp.onload = function(){

 const data = this.responseXML;

// var x = data.querySelectorAll('user');
    let x = data.getElementsByTagName('user');

    console.log(x);


  template= '';

 let  innervalue = document.getElementById('body');



for(let i = 0; i < x.length; i++){

    let id = data.getElementsByTagName('id')[i].firstChild;
    let name = data.getElementsByTagName('name')[i].firstChild;
    let phone = data.getElementsByTagName('phone')[i].firstChild;
     template +=` <tr>
                        <td class="text-center">${id.nodeValue}</td>
                        <td class="text-center">${name.nodeValue}</td>
                        
                        <td class="text-center">${phone.nodeValue}</td>
                        <td class="text-center"><a class="btn btn-outline-dark me-3" href="./updateform.php?id=${id.nodeValue}">Update</a>
                        
                            <a class="btn btn-outline-danger me-3" href="./delete.php?id=${id.nodeValue}">Delete</a>
                        </td>

                    </tr>`;
    
}


 innervalue.innerHTML= template;
   
  }
  
 
  
   xmlhttp.send();
  
      </script>
</body>

</html>






