<div class="container shadow " style="top:20%; left:24%; position:fixed; ">
        <?php
        if(isset($_POST["fetch"])){ 
          if($_POST["mobile_name"]==""){
            header("Location:search_pro.php");
          }
            $query = "SELECT * FROM Mobiles WHERE Mobile_Names = '$_POST[mobile_name]'";   
            

            $result = mysqli_query($conn,$query);
            $rows=mysqli_fetch_array($result);
         echo "<p class='text-center h3 my-5'> <i>  $rows[0] </i></p>
                <p class=' h3 ' style='left:10%; position:relative;' ><i> Performance <i> </p>
                <div class='text-center progress' style='width: 30%; left:40.5%; top:36%; position:fixed;'>
                <div class='progress-bar bg-success rounded-pill border-success' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' style='width:$rows[1]%'>
                $rows[1] %
              </div>
              </div>
              <p class=' h5' style='left:72%; top:35%;  position:fixed; color:black;'>$rows[1]%</p>

                <p class='h3' style='left:10%; position:relative;'><i> Display<i>  </p>
                <div class='text-center progress' style='width: 30%; left:40.5%; top:41%; position:fixed;'>
                <div class='progress-bar bg-success rounded-pill border-success' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:$rows[2]%'>
                $rows[2] %
              </div> 
              </div>
              <p class=' h5' style='left:72%; top:40%;  position:fixed; color:black;'>$rows[2]%</p>



                <p class=' h3' style='left:10%; position:relative;'><i> Battery <i> </p>
                <div class='text-center progress' style='width: 30%; left:40.5%; top:46%; position:fixed;'>
                <div class='progress-bar bg-success rounded-pill border-success' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:$rows[3]%'>
                 $rows[3] %
              </div>
              </div>
              <p class=' h5' style='left:72%; top:45%;  position:fixed; color:black;'>$rows[3]%</p>



                <p class=' h3' style='left:10%; position:relative;' ><i> Camera <i> </p>
                <div class='text-center progress' style='width: 30%; left:40.5%; top:50.5%; position:fixed;'>
                <div class='progress-bar bg-success rounded-pill border-success' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:$rows[4]%'>
                $rows[4] %
              </div>
              </div>
              <p class=' h5' style='left:72%; top:49.5%;  position:fixed; color:black;'>$rows[4]%</p>



                <p class=' h3' style='left:10%; position:relative;'><i> Connectivity <i></p>
                <div class='text-center progress' style='width: 30%; left:40.5%; top:55%; position:fixed;'>
                <div class='progress-bar bg-success rounded-pill border-success' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:$rows[5]%'>
                 $rows[5] %
              </div>
              </div>
              <p class=' h5' style='left:72%; top:54.5%;  position:fixed; color:black;'>$rows[5]%</p>




                <p class=' h3' style='left:10%; position:relative;'> <i>Review Score <i> </p>
                <div class='text-center progress' style='width: 30%; left:40.5%; top:60%; position:fixed;'>
                <div class='progress-bar bg-success rounded-pill border-success' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:$rows[6]%'>
                 $rows[6] %
              </div>
              </div>
              <p class=' h5' style='left:72%; top:59%;  position:fixed; color:black;'>$rows[6]%</p>

               
                <br><br> ";
        }
        ?>
    </div>






SHOW


















































<?php
$server_name="localhost";
$username="root";
$password="9550990344";
$database_name="project";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $gender = $_POST['gender'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];

	 $sql_query = "INSERT INTO details1 (first_name,last_name,gender,email,mobile)
	 VALUES ('$first_name','$last_name','$gender','$email','$phone')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>







<html>
<head>
	<title>
		A Sample Tutorial for database connection.
	</title>
</head>
<body bgcolor="#32e692">
	<div align="center">
		<!--<h1>Details Entry Form</h1>-->
	</div>
<form action="./sample.php" method="post">
	<table border="1" align="center">
		<tr>
			<td>
			<label>Enter First Name</label></td>
			<td><input type="text" name="first_name" id="fname"></td>
		</tr>
		<tr>
			<td>
			<label>Enter Last Name</label></td>
			<td><input type="text" name="last_name"></td>
		</tr>
		<tr>
			<td>
			<label>Gender</label></td>
			<td><input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female</td>
		</tr>
		<tr>
			<td>
			<label>Enter Email</label></td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>
			<label>Enter Phone</label></td>
			<td><input type="phone" name="phone"></td>
		</tr>
		<tr>
			<td colspan="2" align="center" ><input type="submit" name="save" value="Submit" style="font-size:20px"></td>
		</tr>
	</table>
</form>
</body>
</html>






<?php
$server_name="localhost";
$user_name="root";
$password="Riyaz$03";
$database_name="Student";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
if(!$conn){
  die("Connection Failed" . mysqli_connect_error());
}
if(isset($_POST['submit'])){
    $reg_no=$_POST['Reg_no'];
    $name=$_POST['txt']; 
    $sql_query = "INSERT INTO stu (peru,reg_no)
    Values ('$name','$reg_no')";

}
$query = "SELECT * FROM stu";
$result = $conn->query($query);
// if($result->num_row >0){
    while($row = $result->fetch_assoc() ){
        echo "Roll" .
        $row["reg_no"] ." reg_no <br>".
        $row["peru"] ." Name ";

    }
// }
// else{
//     echo "0 entries<br>";
// }
if(mysqli_query($conn, $sql_query)){
    echo  "Done";
}
else{
    echo "Error". $sql . "" .mysqli_error($conn); 
}
mysqli_close($conn);
?>




submit.php




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <form action="./submit.php" method="post">
        <input type="text" name="Reg_no" id="Reg_no">
        <input type="text" class="txt" id="txt" name="txt">
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>



index.html






<?php
$server_name="localhost";
$user_name="root";
$password="Riyaz$03";
$database_name="Student";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
if(isset($_POST['submit'])){
    $reg_no=$_POST['Reg_no'];
    $name=$_POST['txt'];
    $img=$_POST['img'];
    $sql_query = "INSERT INTO stu (peru,reg_no)
    Values ('$name','$reg_no')";
    $sql_query2="INSERT INTO img(img) VALUES ('$img')";
}
$query = "SELECT * FROM stu";
$result = $conn->query($query);
// if($result->num_row >0){
    while($row = $result->fetch_assoc() ){
        echo "Roll" .
        $row["reg_no"] ." reg_no <br>".
        $row["peru"] ." Name ";
        
    }
    // }
    // else{
        //     echo "0 entries<br>";
        // }
        if(mysqli_query($conn, $sql_query)){
            echo  "Done1";
        }
        else{
            echo "Error". $sql . "" .mysqli_error($conn); 
        }
        if(mysqli_query($conn, $sql_query2)){
            echo  "Done2";
        }
        else{
            echo "Error". $sql . "" .mysqli_error($conn); 
        }
        mysqli_close($conn);
?>

