<?php
$server_name="localhost";
$user_name="root";
$password="Mandarapu@12";
$database_name="nanoReview";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> -->
    </script>
    <title>Hello, world!</title>
  </head>
<?php
if (isset($_POST['send'])) {
  if($_POST['email']=='' or $_POST['subject']=='' or $_POST['name']==''){
    echo '<script>alert("Error in submission !")</script>';
      echo '<script>window.location.href="contact.php";</script>';
  }
    $gender = $_POST['gender'];
    echo $gender;
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $query = "INSERT INTO feedbacks VALUES ('$name','$email','$subject','$message','$gender')";
    echo $query;
    if(mysqli_query($conn,$query)){
      echo '<script>alert("'.$subject.' received successfully !")</script>';
      echo '<script>window.location.href="contact.php";</script>';
    }
}
?>
  <body style="background-color:#F3EFE0">
  <nav class="navbar navbar-expand-lg navbar-light top mask-custom shadow-0" style="background-color:#00000081">
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
  
  
    <br><br>
        <form class="rounded-lg text-center border border-light p-5 " action="contact.php" style="margin:auto 25%  auto 25% ;background-color:#434242 " method="post">

    <p class="h3 mb-4" style="color:#22A39F">Contact us</p>

    <!-- Name -->
    <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" required>

    <!-- Email -->
      <input type="text" name="email" name id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail" required>
          <div class="form-check form-check-inline">

    <!-- gender -->
        <input class="form-check-input " type="radio" name="gender" id="inlineRadio1" value="Male">
        <label class="form-check-label text-light" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
        <label class="form-check-label text-light" for="inlineRadio1">Female</label>
      </div>
      <br>
    <!-- Subject -->
    <label class='h4' style="color:#22A39F" name="subject">Subject</label>
    <select class="browser-default custom-select mb-4" name="subject" required>
        <option value="" selected disabled>Choose option</option>
        <option value="Feedback"   name="subject">Feedback</option>
        <option value="Bug_reported"  name="subject">Report a bug</option>
        <option value="Feature_request"  name="subject">Feature request</option>
        <!-- <option value="4">Feature request</option> -->
    </select>

    <!-- Message -->
    <div class="form-group">
        <textarea name="message" class="form-control rounded" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
    </div>

    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy" style="color:#F3EFE0">Send me a copy of this message</label>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit" name="send">Send</button>
    <img src="https://media1.giphy.com/media/z4aHMS8duCx3rBwDav/200w.webp?cid=ecf05e47ye3khf78lip2kj2th6cr7isa5vmvneix33kqziv0&rid=200w.webp&ct=s" alt="">

</form>
<br>
<br>
<!-- Default form contact -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
