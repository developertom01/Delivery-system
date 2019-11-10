
<?php
session_start();

if(!isset($_SESSION['member_name'])) {
    $_SESSION['msg']="you must log in first";
    header("location:signin.php");
}
if (isset($_GET["logout"])){
    session_destroy();
    unset($_SESSION["member_name"]);
    header(signin.php);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>

<h3> You are <?php echo $_SESSION["username"] ?> </h3>
<p> You now a member of the uenr Website and database development club. <br> You will be given further notice on the role all mebers will be playing in the group.   </p>
    
</body>
</html>