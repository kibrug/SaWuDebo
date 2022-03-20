<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Debo</title>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </head>
  <body>
        <!--navbar start-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid  text-end">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Detail</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
       
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--navbar end-->
  <?php include './connect.php'?>
    <div class="container">
  <div class="row text-center">
  <div class="col-sm-12 ">
  <h1>Debo Admin Page Detail</h1>
    </div>
    </div>
    </div>

     <!--fetch from data base -->
     <?php
   if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  
  $con = mysqli_connect($servername, $username, $password, $database);
  
  //$id=$_GET['donet_id'];
  $sql= " SELECT * FROM userdont ";
 // $sql= "SELECT * FROM userdont WHERE donet_id='.$id.'";
  //"SELECT * FROM contacts ORDER BY id DESC")->fetchAll(PDO::FETCH_CLASS, 'Contact'

  $result=mysqli_query($con,$sql);
  if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $donet_id=$row["donet_id"];
      $fullname=$row["fullname"];
      $email=$row["email"];
      $countrycode=$row["countrycode"];
      $comment=$row["comment"];
      $imagfield=$row["imagfield"];
     
  
       echo'

       <!-- Optional my style; choose one of the two! -->
<div class="container">
  <div class="row">

    <div class="card-group ">
    
        <div class="card">
           <div class="col-sm-6">
        
                 <div class="card-body">
                     <img src='.$imagfield.' class="card-img-top img-fluid rounded-circle" alt="..."  style="width:200px;height:200px;">
                      <div class="card-body">
                      <h5 class="card-title">Name:'.$fullname.'</h5>
                      <h5 class="card-title">Email:'.$email.'</h5>
                       <h5 class="card-title">Countary Code:'.$countrycode.'</h5>
                       <p class="card-text">'.$comment.'</p>
                       <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                      <a href="index.php" class="btn btn-primary">Show All</a>
                 </div>
                      
        </div>
              


      </div>
     </div> 
  </div>
</div>
   

        ';
    }
  } else {
    echo "0 results";
  }
  


?>
   
    
  </body>
</html>