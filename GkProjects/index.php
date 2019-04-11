<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <h1><span style="color:green;font-size: 40px"><i>vvce</i></span>.com</h1><hr>
        <link rel="stylesheet" href="vvce1.css">
</head>
<body>
<ul>
            <li><a href="login.php">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="abc"><a href="index.php">login</a></li>
            <li class="abc"><a href="register.php">register</a></li>
          </ul>
    <form action="index.php" class="modal-content"  method="post" name="sessionform">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="login_img.jpg" alt="Avatar" class="login" width="500" height="100">
    </div>
    <div class="container">
        
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name1" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="submit" value="Submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='main.html'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>

<?php
$con=new mysqli("localhost","root","","my_db") or die(mysql_error()); 
if($con->connect_error){
    die("connection failed".
    $con->connect_error);
    echo "<script>alert('not connected')</script>";
}

if(isset($_POST['submit'])){
    $name=$_POST['name1'];
    $password=$_POST['password'];
    if($name==''){
        echo "<script>alert('enter the name')</script>";
    }
    else if($password==''){
        echo "<script>alert('enter the password')</script>";
    }
    else{
        $query="INSERT INTO login1(userid,password) VALUES('$name','$password')";
        if($con->query($query)){
            echo "<script>alert('y u r suffesssfull')</script>";
        }
        /*else{
            echo "Error:" .$query."<br>"
            .$con->error;
        }*/
    }
    mysqli_close($con);
}

?>
</body>
</html>
