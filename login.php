<!doctype html>  
<html>  
<head>  
<title>Login</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: PowderBlue ;  
    color: palevioletred;  
    font-family: cambria;  
    font-size: 110%  
      
        }  
            h1 {  
    color: indigo;  
    font-family: Cambria;  
    font-size: 130%;  
}  
        h3 {  
    color: indigo;  
    font-family: Cambria;  
    font-size: 110%;  
} </style>  
</head>  
<body>  
     <center><h1>LOGIN FORM FOR SALES SHEET
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
<h3>Login Form</h3>  
<form action="" method="POST">  
Username: <input type="text" name="username"><br />  
Password: <input type="password" name="password"><br />   
<input type="submit" value="Login" name="submit" />  
</form>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
  
   $bool = true;
    $con=mysqli_connect("localhost","root","") or die(mysqli_error());  
    mysqli_select_db($con,"user-registration") or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: SalesSheet.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   