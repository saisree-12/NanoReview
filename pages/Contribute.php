



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="./popup.css"> -->
</head>
<body  style="background-color: #DAE2B6;">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0" style="background-color:#00000081">
          <div class="container">
            <a class="navbar-brand" href="./index.html"><span style="color: #06ede2;">Nano</span><span style="color: rgb(255, 255, 255);">Review</span></a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
              data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link" href="./L_search_pro.php" style="color: #ffc2d6">Laptops</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./search_pro.php" style="color: #ffc2d6">Mobiles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="P_search_pro.php" style="color: #ffc2d6">Processors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./Validate.php" style="color: #ffc2d6">Contibute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!" style="color: #ffc2d6">Compare</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="./About_us.html" style="color: #ffc2d6">About Us </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="./contact.php" style="color: #ffc2d6">Contact</a>
                </li>
              </ul>
              <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#!">
                    <i class="fas fa-shopping-cart"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#!">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#!">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      <?php
$server_name="localhost";
$user_name="root";
$password="Mandarapu@12";
$database_name="nanoReview";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
if(isset($_POST['Submit'])){
  // echo $_POST['Mobile_Name'].$_POST['division'];
  $mobile1= $_POST['name'];
  // $performance = $_POST[''];
  // echo var_dump($name_string) . var_dump($_POST['division']);
  $query= "INSERT INTO $_POST[division](name,Performance,Display,Battery,Camera,Connectivity,Review_Score) VALUES ('$mobile1',$_POST[Performance]
  ,$_POST[Display],$_POST[Battery],$_POST[Camera],$_POST[Connectivity],$_POST[Review_Score])";
  // echo var_dump($query);
  if(mysqli_query($conn,$query)){
    echo"
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Thank you!</strong> Your response has been successfully submited.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>
    ";
  // echo"<button>hello</button>";
  }
  else{
    echo"
    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Something went wrong!</strong> Some kind of error found.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>
    ";
  }
}
// header('Location: ./Contribute.php');
?>
<br><br><br>
<div class=" container rounded p-5 rounded-lg shadow" style="width:50%; background-color:#CCD6A6">
  <center>
    <form action="./Contribute.php" method="post" style="margin-top: 5em; width:60%; ">
      <h4> Share your experience</h4>
    <br>
    <div class="form-floating">
      <select class="form-select" id="division" name="division" aria-label="Floating label select example">
        <option selected>Open this select menu</option>
        <option value="laptops" >Laptops</option>
        <option value="mobiles" >Mobiles</option>
        <option value="tablets" >Tablets</option>
      </select>
      <label for="floatingSelect">Select the Catogery</label>
    </div>
    <br>
    <hr>
    <div class="form-group h3">
      <label for="exampleFormControlTextarea1">Name of the product</label>
      <input name="name" type="text" class="form-control my-3" id="exampleFormControlTextarea1" rows="3"></input>
    </div>
    <br>
    <hr>
    <div class="form-group h4">
      <label for="exampleFormControlTextarea1">Performance</label>
      <input name="Performance" type="number" class="form-control my-3" id="exampleFormControlTextarea1" rows="3"  min='0' step='1' max='100'></input>
    </div>
    <br>
    <hr>
    <div class="form-group h4">
      <label for="exampleFormControlTextarea1">Display</label>
      <input  type="number" name="Display"  class="form-control my-3" id="exampleFormControlTextarea1" rows="3"  min='0' step='1' max='100'></input>
    </div>
    <br>
    <hr>
    <div class="form-group h4">
      <label for="exampleFormControlTextarea1">Battery</label>
      <input name="Battery"  type="number" class="form-control my-3" id="exampleFormControlTextarea1" rows="3"  min='0' step='1' max='100'></input>
    </div>
    <br>
    <hr>
    <div class="form-group h4">
      <label for="exampleFormControlTextarea1">Camera</label>
      <input name="Camera" value="" type="number" class="form-control my-3" id="exampleFormControlTextarea1" rows="3"  min='0' step='1' max='100'></input>
    </div>
          <br>
          <hr>
          <div class="form-group h4">
            <label for="exampleFormControlTextarea1">Connectivity</label>
            <input name="Connectivity" type="number" class="form-control my-3" id="exampleFormControlTextarea1" rows="3"  min='0' step='1' max='100'></input>
          </div>
          <br>
          <hr>
          <div class="form-group h4">
            <label for="exampleFormControlTextarea1">Overall_Review</label>
            <input name="Review_Score" type="number" class="form-control my-3" id="exampleFormControlTextarea1" rows="3"  min='0' step='1' max='100'></input>
          </div>
          <br>
          <hr>
          <!-- <input type="submit"> -->
          <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="" name="Submit">Save</button>
        </div>
      </form>
    </center>
      <div class="container" style="position:absolute; top:10%;left:80%;">
        <img src="https://media1.giphy.com/media/AbFteRAmNrZ5T70G6p/200w.webp?cid=ecf05e479yuy7s9bntmrjuiw4pw5mkw5cpfq62yb4y9zl4hu&rid=200w.webp&ct=s" alt="">
      </div>
      <br><br><br>
      <!-- Product Search Box -->
      <!-- Product Search Box -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>