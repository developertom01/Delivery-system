

<?php
include('controller.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Registration</title>

</head>
<body>
        <div class="light-blue-color"></div>
        
    <form action="dashboard.php" method="post" id="Sign-In">
       <div class="login-form">

           <h1>Register</h1>

            <?php include('erros.php'); ?>

            <div class="inputfield">
               <input type="text" placeholder="Full Name" id="fullname"  name="member_name" >
            </div>

                    <div class="inputfield">
                        <input type="text" placeholder="Course " id="course" name="course" >
                    </div>

            <div class="inputfield">
                <input type="email" placeholder="Email" id="email" name="email">
            </div>

                <div class="inputfield">
                    <input type="password" placeholder="Password" id="pword-1"name="password_1">
                </div>
            
            <div class="inputfield">
                <input type="password" placeholder="Confirm Password" id="pword-2" name="password_2" >
            </div>    

            <div class="login-btn">
            <button type="submit"value="SignIn" name="submit">Login</button>
            </div>

        <div class="notmember">
            Already a member? <a href="login.php">Login</a>
        </div>

       </div>
    </form>
    <script src="main.js"></script>
</body>
</html>

