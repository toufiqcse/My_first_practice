<?php
    session_start();

    //connect to database
    $db = mysqli_connect("localhost", "root", "", "authentication");
     
    if (isset($_POST['register_btn'])) {
        $username =mysql_real_escape_string($_POST['username']);
        $email =mysql_real_escape_string($_POST['email']);
        $password =mysql_real_escape_string($_POST['password']);
        $password2 =mysql_real_escape_string($_POST['password2']);


        if ($password == $password2) {
            // create user
            $password = md5($password); //hash password before storing for sequrity purposes
            $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $username;
            header("location:home.php"); //redirect to home page
        }else{
            
            $_SESSION['message'] = "The Two Password Do Not Match";
        }
    }

 ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation</title>
</head>
<body>
    <div class="header">
        <h1> Rgistration Form</h1>
    </div>
    <form  method="post" action="register.php">
        <table>
            <tr>
                <td> User Name:</td>
                <td> <input type="text" name="username" class="textInput"> </td>
            </tr>
            <tr>
                <td> Email:</td>
                <td> <input type="email" name="email" class="textInput"> </td>
            </tr>
            <tr>
                <td> Password:</td>
                <td> <input type="password" name="password" class="textInput"> </td>
            </tr>
            <tr>
                <td> password Again:</td>
                <td> <input type="password" name="password2" class="textInput"> </td>
            </tr>

            <tr>
                <td>  </td>
                <td> <input type="submit" name="register_btn" value="Register"> </td>
            </tr>
        </table>
    </form>
</body>
</html>