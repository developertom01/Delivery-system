<?php

session_start();

$db=mysqli_connect('localhost','root','','uenr_html_club') or die("Could not connect to database");

$member_name="";
$course=" ";
$email=" ";
$password1=" ";
$password2=" ";


$errors=array();


if (isset($_POST['member_name']) && isset($_POST['course']) && isset($_POST['email']) && isset($_POST['password_1']) && isset($_POST['password_2'])){ 
$member_name= mysqli_real_escape_string($db, $_POST['member_name']);
$course=mysqli_real_escape_string($db, $_POST['course']);
$email=mysqli_real_escape_string($db, $_POST['email']);
$password1=mysqli_real_escape_string($db, $_POST['password_1']);
$password2=mysqli_real_escape_string($db, $_POST["password_2"]);
}

#Handling errors
if(empty($member_name)){ array_push($errors, "Name of member needed");}
if(empty($course)){ array_push($errors,"Course of member needed");}
if(empty($email)){ array_push($errors,"Email has to be inputed");}
if(empty($password1)){ array_push($errors,"Password needed");}
if($password1 != $password2){array_push($errors, "Passwords do not match");}


$user_check_query=" SELECT* FROM members WHERE member_name='member_name' or email='$email' lIMIT 1 ";
$results= mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($results);
if ($user){
    if($user['member_name']===$member_name){
        array_push($errors, 'there exist a username');
    }
    if($user['email']===$email){
        array_push($errors, 'email already exist');
    }
}
// Register member

if (count($errors)==0){
    $password=md5($password1);

    $query="INSERT INTO members (member_name, course, email, passwords) VALUES ('$member_name','$course','$email','$password')";
    myspli_query($db,$query);
    $_SESSION["username"]=$username;
    $_SESSION["SUCCESS"]="You are now logged in";
    header("location: dashboard.php ");
    exit(0);
}

?>


