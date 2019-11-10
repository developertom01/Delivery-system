

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

           <h1>Login</h1>

           
           <div class="inputfield">
               <input type="text" placeholder="Username" id="username" name="member_name">
           </div>

        <div class="inputfield">
            <input type="password" placeholder="Password" id="pword-1">
        </div>

            <div class="login-btn">
                <input type="submit" value="Login" onclick="valid()">
            </div>

        <div class="notmember">
            <P>Not a member: <a href="registration.php">Sign In</a></p>
        </div>

       </div>
    </form>
    <script src="main.js"></script>
</body>
</html>