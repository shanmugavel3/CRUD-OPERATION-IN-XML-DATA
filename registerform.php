<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST" id="regform">
    <div class="container">
     
    <input type="text" id="name" >:name <br>
     <input type="tel" id="phone">:phone <br>
     <button name="submit">submit</button>
    </div>
    </form> -->
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-3">Update Data</h1>
        <form method="POST" action="" id="regform">
            <div class="mb-3">
                <input type="hidden" name="id">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" >
            </div>
           
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="phone" class="form-control" id="phone" name="phone">
            </div>
            <div class="div mb-3"> <input class="btn btn-secondary" type="submit"  name="submit"></div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


<script>
    const Regfrom = document.getElementById('regform');
    regform.addEventListener("submit",(e)=>{
        e.preventDefault();
      
 const name = document.getElementById("name");
 const phone = document.getElementById("phone");
//  var  xml =`<query><author>${name.value}</author></query>
//  <query><author>${phone.value}</author></query>`;
//  console.log(xml);
  var  data =`<query><name>${name.value}</name>
  <phone>${phone.value}</phone></query>`;

const xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST","register.php",true);
xmlhttp.setRequestHeader("Content-Type","application/xml");
// xhttp.setRequestHeader("Content-Type", "application/xml");

xmlhttp.onload = function(){
  console.log(this.response);
  location.href = './viewform.php'
  name.value= '';
  phone.value ='';

}

// var  xml =`<details><name>${name.value}</name></details>
// <details><phone>${phone.value}</phone></details> `;

 xmlhttp.send(data);

      


    })


    
    

</script>

</body>
</html>