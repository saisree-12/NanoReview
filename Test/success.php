<?php
if(isset($_POST['submit'])){
    echo"hello";
    echo(var_dump($_POST));
    echo"
    <div class='container shadow'>
        <form action='success.php' action='post'>
            <input type='text' name='text1'>
            <input type='submit' name='submit2'>
        </form>
    </div>
    ";
}
echo var_dump($_POST);
?>