<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRATION</title>
</head>
<body>
    <div class="container">
    <div class="header">
    
    <header>
    
    <h2>  Rgister Here </h2>
    </header>
    
    </div>


    <div class="form">
    
    <form action="handler.php" method="POST">
    
    <div class="form_control">
    <label> First Name</label>
    <input type="text" name="f_name" required>
    </div>
    
    <div class="form_control">
    <label> Last Name</label>
    <input type="text" name="l_name" required>
    </div>


    <div class="form_control">
    <label> Username</label>
    <input type="text" name="username" palceholder="eg. tommy90" required>
    </div>

    <div class="form_control">
    <label>Email</label>
    <input type="email" name="email" required>
    </div>

    <div class="form_control">
    <label> Password</label>
    <input type="password" name="passwrod1" required>
    </div>

    <div class="form_control">
    <label>Confirm password</label>
    <input type="password" name="passwrod2" required>
    </div>

    <button type="submit" name="submit">Register</button>

    <p>Already has an account? <a href="signin.php">login</a></p>
    </form>
    </div>





    </div>
</body>
</html>