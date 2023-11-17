<?php 
session_start();
if (isset( $_POST["submit"] )){
    include "config\database.php";
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql = "SELECT * FROM User WHERE Email = '$email' and Password = '$password'";
    $sqlres=mysqli_query($con, $sql);
    $rowcount=mysqli_num_rows($sqlres);
    

    if($rowcount >0){  
        $_SESSION['email'] = $email; ////add
        
            header("Location: TableEvents.php");
            exit;
    }
    else if($rowcount == 0){
       echo("your email or password is incorrect!");
    }
}

?>
<!DOCTYPE html>
<html>
    <head>

        <title>
            Login
        </title>
        <link rel="stylesheet" href="loginstyle.css">
        <link rel="shortcut icon" href="media/Logo.color.png" type="image/x-icon">
    </head>

    <body>
        <div class="card"><form action=# method="post">
           <img src="media/Logo.color.png" class="logo">
           <div class="input">
           <div style="position: absolute; padding-top: 55px; padding-left: 8px; color:  #769570;">E-mail</div>
           <input type="email" name="email" placeholder="email" class="email">
           <br>
           <div style="position: absolute; padding-top: 55px; padding-left: 8px; color:  #769570;">Password</div>
           <input type="password" name ="password" placeholder="password" class="password">
           <br>
           <a href=verfication.php class="forgot"> forgot password?</a>
           <br>
           <input type="submit" name="submit" value="Log In" class="login-button">
           </div></form>
        </div>

    </body>
</html>
