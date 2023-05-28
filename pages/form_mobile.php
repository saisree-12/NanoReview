<?php
$server_name="localhost";
$user_name="root";
$password="Mandarapu@12";
$database_name="nanoReview";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
// $result1 = mysqli_query($conn, $query);
// $result2 = mysqli_query($conn , $query);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-color:#A7BBC7">
      <header>
          <!-- Navbar -->
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
                  <a class="nav-link" href="./laptops.php" style="color: #ffc2d6">Laptops</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./mobiles.php" style="color: #ffc2d6">Mobiles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./processors.php" style="color: #ffc2d6">Processors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./Validate.php" style="color: #ffc2d6">Contibute</a>
                </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffc2d6">
                      Compare
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="./laptop_compare.php">Laptops</a>
                      <a class="dropdown-item" href="./mobile_compare.php">Mobiles</a>
                      <a class="dropdown-item" href="./processor_compare.php">Processors</a>
                    </div>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="./About_us.html" style="color: #ffc2d6">About Us</a>
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
    <center>
    <!-- Mobile( bars )-->
    <div class="container shadow my-5 p-5 "style="background-color:#E1E5EA;">
        <h1>Add a Review</h1>   
    <div class='container shadow my-5 p-5 'style="background-color:#A7BBC7">
        <form action="form_mobile.php" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Name" style="height:50px" id="floatingInput" required placeholder="<?php
             if(isset($_POST['Name']))
             echo $_POST['Name'];
             else
             echo 'Name';
             ?>">
        </div><br>
        <div class="row row-cols-2">
            <div class="col-auto ms-auto col-sm-3" style="margin-left:20%">
                <input type="number" class="form-control" name="Performance" id="floatingInput" required rows="3"  min='0' step='1' max='100'placeholder="<?php
             if(isset($_POST['Performance'])){
                 echo $_POST['Performance'];
                }
                else
                echo 'Performance';?>"
             >
            </div>
            <div class="col-auto ms-auto col-sm-3">
            <input type="number" class="form-control" id="floatingInput" name="Display"  required rows="3"  min='0' step='1' max='100'placeholder="<?php
             if(isset($_POST['Display']))
             echo $_POST['Display'];
             else
                echo 'Display';?>">
            </div>
        </div><br><br>
        <div class="row row-cols-2">
            <div class="col-auto ms-auto col-sm-3" style="margin-left:20%">
                <input type="number" class="form-control" id="floatingInput" name="Battery"  required rows="3"  min='0' step='1' max='100'placeholder="<?php
             if(isset($_POST['Battery']))
             echo $_POST['Battery'];
             else
                echo 'Battery';?>">
            </div>
            <div class="col-auto ms-auto col-sm-3">
            <input type="number" class="form-control" id="floatingInput"  name="Camera" required rows="3"  min='0' step='1' max='100'placeholder="<?php
             if(isset($_POST['Camera']))
             echo $_POST['Camera'];
             else
                echo 'Camera';?>">
            </div>
        </div><br><br>
        <div class="row row-cols-2">
            <div class="col-auto ms-auto col-sm-3" style="margin-left:20%">
                <input type="number" class="form-control" id="floatingInput"  name="Connectivity" required rows="3"  min='0' step='1' max='100'placeholder="<?php
             if(isset($_POST['Connectivity']))
             echo $_POST['Connectivity'];
             else
                echo 'Connectivity';?>">
            </div>
            <div class="col-auto ms-auto col-sm-3">
            <input type="number" class="form-control" id="floatingInput"  name="Review_Score" required rows="3"  min='0' step='1' max='100'placeholder="<?php
             if(isset($_POST['Review_Score']))
             echo $_POST['Review_Score'];
             else
                echo 'Review_Score';?>">
            </div>
            </div>
        </div><br><br>
        

        <h1>Somemore please</h1>
        <div class='container shadow my-5 p-5 'style="background-color:#A7BBC7">
        <!-- <form action='form_mobile.php' method='post' > -->
        <!-- <input type='text' class='form-control' name='Name' style='height:50px' id='floatingInput' placeholder='Name'> -->
        <div class='form-floating mb-3'>
        </div><br>
        <div class='row row-cols-2'>
            <div class='col-auto ms-auto col-sm-3' style='margin-left:20%'>
                <input type='file' class='form-control' name='image' id='image' accept='.jpg, .jpeg, .png' id='floatingInput' required rows='3' placeholder='Image'>
            </div>
            <div class='col-auto ms-auto col-sm-3'>
            <input type='text' class='form-control' id='floatingInput' name='ROM'  required rows='3' placeholder='ROM'>
            </div>
        </div><br><br>
        <div class='row row-cols-2'>
            <div class='col-auto ms-auto col-sm-3' style='margin-left:20%'>
                <input type='text' class='form-control' id='floatingInput' name='Processor'  required rows='3' placeholder='Processor'>
            </div>
            <div class='col-auto ms-auto col-sm-3'>
            <input type='text' class='form-control' id='floatingInput'  name='Rear_Camera' required rows='3' placeholder='Rear_Camera'>
            </div>
        </div><br><br>
        <div class='row row-cols-2'>
            <div class='col-auto ms-auto col-sm-3' style='margin-left:20%'>
                <input type='text' class='form-control' id='floatingInput'  name='Front_Camera' required rows='3' placeholder='Front_Camera'>
            </div>
            <div class='col-auto ms-auto col-sm-3'>
            <input type='text' class='form-control' id='floatingInput'  name='Display_name' required rows='3' placeholder='Display'>
            </div>
        </div><br><br>
        
        <!-- <input type="text" name="text1"
        placeholder="<?php
             if(isset($_POST['text1']))
             echo $_POST['text1']?>"> -->
        <!-- <button type="submit" name="Submit" class="btn btn-outline-success" onclick="this.style.display='none'">Next</button> -->
    </div>
        <button type='submit' name='Final_Submit' class='btn btn-outline-success' style='width:60%'> <br> <h4> Submit </h4><br></button>
            </center>
        </form>
     <?php
    if(isset($_POST['Final_Submit'])){

        echo var_dump($_POST);
        $product_name=$_POST['Name'];
        $performance=$_POST['Performance'];
        $display=$_POST['Display'];
        $battery=$_POST['Battery'];
        $camera=$_POST['Camera'];
        $connectivity=$_POST['Connectivity'];
        $review_score=$_POST['Review_Score'];

        $query = "INSERT INTO mobile_details(mobile_name,performance,display,battery,camera,connectivity,total_score)
                VALUES ('$product_name',$performance,$display,$battery,$camera,$connectivity,$review_score)";
        $result=mysqli_query($conn,$query);
        if($result){
            echo"
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            </div>
            ";
        }



        // $product_name = $_POST['Name'];
        $Rom=$_POST['ROM'];
        $Processor=$_POST['Processor'];
        $Rear_Camera=$_POST['Rear_Camera'];
        $Front_Camera=$_POST['Front_Camera'];
        $Display_Name=$_POST['Display_name'];
        if($_FILES["image"]["error"]==4){
            echo
            "<script>  alert('Image Does Not Exist'); </script>";
        }
        else{
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];
        
            $validImageExtension = ['jpg', 'jpeg', 'png','gif'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            // if ( !in_array($imageExtension, $validImageExtension) ){
            //   echo
            //   "
            //   <script>
            //     alert('Invalid Image Extension');
            //   </script>
            //   ";
            // }
            if($fileSize > 1000000){
              echo
              "
              <script>
                alert('Image Size Is Too Large');
              </script>
              ";
            }
            else{
                // $nuewImageName =uiqid();
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;
                move_uploaded_file($tmpName, '../images/mobiles/' . $newImageName);
                // mobile_name,performance,display,battery,camera,connectivity,total_score
                $query="INSERT INTO mobile_image(mobile_name,processor,rom,display,front_camera,rear_camera,mobile_image) VALUES
                         ('$product_name','$Processor','$Rom','$Display_Name','$Front_Camera','$Rear_Camera','$newImageName')";
                mysqli_query($conn,$query);
                echo
                    "
                    <script>
                        alert('Successfully Added');
                        document.location.href = './admin.php';
                    </script>
                    ";
            }
        // echo $Name.
        // $Performance.
        // $Display.
        // $Battery.
        // $Camera.
        // $Connectivity.
        // $Review_Score."\n".var_dump($_POST);
    }

    }

    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>










