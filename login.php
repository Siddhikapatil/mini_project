<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "common_content\db.php";
    // if (isset($_POST['register'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $cpassword = $_POST['cpass'];
    // echo $email;

    # code...
    $sql = mysqli_query($conn, "INSERT INTO `daily_hub_login` (`first_name`, `last_name`, `email`, `Password`, `date_time`) VALUES ('$first_name', '$last_name', '$email', '$cpassword', '2022-04-28 05:59:44.000000');");
    // print_r("INSERT INTO `daily_hub_login` (`first_name`, `last_name`, `email`, `Password`, `date_time`) VALUES ('$first_name', '$last_name', '$email', '$cpassword', '2022-04-28 05:59:44.000000');");
    $num_rows = mysqli_num_rows($sql);
    if ($num_rows <= 1) {
        echo '<script>window.location.href="html/index.php"</script>';
        echo '<script>alert("Succefully register")</script>';
    } else {

        echo '<script>alert("user alredy exits")</script>';
        echo '<script>window.location.href="/html/index.php"</script>';
    }
    // }
    if (isset($_POST['submit'])) {
        if ($email == 'email' && $cpassword == 'cpass') {
            $sql = mysqli_query($conn, "select * from `daily_hub_login` where email='$email' and 	Password='$cpassword'");
            $num_rows = ($sql);
            if ($num_rows == 1) {
                echo '<script>window.location.href="/html/index.php"</script>';
                echo '<script>alert("Succefully login")</script>';
            } else {

                echo '<script>alert("enter valid credential")</script>';
                echo '<script>window.location.href="/html/index.php"</script>';
            }
        } else {
            # code...
            echo '<script>alert("user does not present")</script>';
            echo '<script>window.location.href="html\index.php"</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>The Daily Hub</title>
    <link rel="stylesheet" href="css/login.css">
    <!---we had linked our css file----->
</head>

<body>
    <?php include "common_content\_navbar.php"; ?>

    <div id='login-form' class='login-page'>
        <div class="form-box">
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                <button type='button' onclick='register()' class='toggle-btn'>Register</button>
            </div>
            <form id='login' method="POST" action="login.php" class='input-group-login'>
                <input type='text' class='input-field' placeholder='Email Id' required name="email" id="email">
                <input type='password' class='input-field' placeholder='Enter Password' required name="pass">
                <input type='checkbox' class='check-box'><span>Remember Password</span>
                <button type='submit' class='submit-btn' name="submit">Log in</button>
            </form>
            <form id='register' method="POST" action="login.php"  class='input-group-register'>
                <input type='text' class='input-field' placeholder='First Name' required name="first_name">
                <input type='text' class='input-field' placeholder='Last Name ' required name="last_name">
                <input type='email' class='input-field' placeholder='Email Id' required name="email">
                <input type='password' class='input-field' placeholder='Enter Password' required name="password">
                <input type='password' class='input-field' placeholder='Confirm Password' required name="cpass">
                <input type='checkbox' class='check-box'><span>I agree to the terms and conditions</span>
                <button type='submit' class='submit-btn' name="register">Register</button>
            </form>
        </div>
    </div>
    </div>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }

        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>