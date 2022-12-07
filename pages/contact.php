<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <title>Hello, world!</title>
  </head>
  <!-- <?php
  if(isset($_POST['send'])){
    echo"got it";
    if(isset( $_POST['name']))
    $name = $_POST['name'];
    if(isset( $_POST['email']))
    $email = $_POST['email'];
    if(isset( $_POST['message']))
    $message = $_POST['message'];
    if(isset( $_POST['subject']))
    $subject = $_POST['subject'];
  
    $content="From: $name \n Email: $email \n Message: $message";
    $recipient = "shaikriyaz.20.csm@anits.edu.in";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $content, $mailheader) or die("Error!");
    echo "Email sent!";
  }
?> -->
<?php
if (isset($_POST['send'])) {
    $fromEmail = $_POST['email'];
    $toEmail = "shaikriyaz.20.csm@anits.edu.in";
    // $toEmail = $_POST['toEmail'];
    $subjectName = $_POST['subject'];
    $message = $_POST['message'];

    $to = $toEmail;
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div class="container">
                 '.$message.'<br/>
                    Regards<br/>
                  '.$fromEmail.'
				</div>
			</body>
			</html>';
    $result = @mail($to, $subject, $message, $headers) or die("Error!");

    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="index.php";</script>';
}
?>
  <body style="background-color:#F3EFE0">
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
            <br><br>
<form class="rounded-lg text-center border border-light p-5  " action="email_test.php" style="margin:auto 25%  auto 25% ;background-color:#434242; margin-top:8%; " method="post">

    <p class="h3 mb-4" style="color:#22A39F">Contact us</p>

    <!-- Name -->
    <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" required>

    <!-- Email -->
    <input type="email" name="email" name id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail" required>

    <!-- Subject -->
    <label class='h4' style="color:#22A39F">Subject</label>
    <select class="browser-default custom-select mb-4" name="subject" required>
        <option value="" disabled>Choose option</option>
        <option value="Feedback" selected>Feedback</option>
        <option value="Bug_reported">Report a bug</option>
        <option value="Feature_request">Feature request</option>
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