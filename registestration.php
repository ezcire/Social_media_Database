<?php
    session_start();
    $database = "SocialMedia";
    $servername = "localhost";
    $username = "root";
    $password = "root";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    // //echo "hello <br>";
    if(isset($_POST['register_btn'])){
        echo "clicked the button it worked";
    }
    else
    {
        echo "here now";
    }
    //     session_start();
    //     $username=mysql_real_escape_string($_POST['username']);
    //     $email=mysql_real_escape_string($_POST['email']);
    //     $password=mysql_real_escape_string($_POST['password']);
    //     $password2=mysql_real_escape_string($_POST['password2']);
    //     $Fname=mysql_real_escape_string($_POST['Fname']);
    //     $Lname=mysql_real_escape_string($_POST['Lname']);
    //     $Mobile_number=mysql_real_escape_string($_POST['MobileNumber']);
    //     $Gender=mysql_real_escape_string($_POST['Gender']);
    //     $dob=mysql_real_escape_string($_POST['dob']);

    //     if($password==$password2){
    //         echo "reached here";
    //         //this right here will hash the password
    //         //$password=md5($password);
    //         $sql="INSERT into Member (Email, Fname, Lname, Mobile_number, Gender, DOB) VALUES ('$username', '$Fname', '$Lname', '$Mobile_number', '$Gender', '$dob')" ;
    //         if ($conn->query($sql) === TRUE) {
    //             $_SESSION['message']="You are now logged in";
    //             $_SESSION['username']=$username;
    //             //header("location:homes.php");//this will redirect you to new page
    //             //echo "New record created successfully";
    //             //echo "<br>";
    //         } else {
    //             $_SESSION['message']="You are not logged in";
    //             echo "Error: " . $list . "<br>" . $conn->error;
    //         }
    //     }
    //     else{
    //         $_SESSION['message']="The two passwords don't match";
    //     }
    // }

?>







<!DOCTYPE html>
<html>
    <head>
        <title>Register, login and logout using php mysql</title>
    </head>
    <body>
        <div class="header">
            <h1>Register, login and logout</h1>
        </div>
        <form method="post" action="register.php">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" class="textInput"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" class="textInput"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" class="textInput"></td>
                </tr>
                <tr>
                    <td>password again:</td>
                    <td><input type="password" name="password2" class="textInput"></td>
                </tr>
                <tr>
                    <td>FirstName:</td>
                    <td><input type="text" name="Fname" class="textInput"></td>
                </tr>
                <tr>
                    <td>LastName:</td>
                    <td><input type="text" name="Lname" class="textInput"></td>
                </tr>
                <tr>
                    <td>MobileNumber:</td>
                    <td><input type="text" name="MobileNumber" class="textInput"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="text" name="Gender" class="textInput"></td>
                </tr>
                <tr>
                    <td>DOB:</td>
                    <td><input type="text" name="dob" class="textInput"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="register_btn" value="Register"></td>
                </tr>
            </table>
        </form>
    </body>
</html>