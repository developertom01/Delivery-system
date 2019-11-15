<?php

session_start();

//initiate variables

$f_name="";
$l_name="";
$username="";
$email="";

$error=array();

$db=mysqli_connect('localhost','root','','gtl') or die("Could not connect to database");
if (isset($_REQUEST['f_name']) && $_REQUEST['l_name'] && $_REQUEST['username']){
$f_name=mysqli_real_escape_string($db,$_REQUEST['f_name']);
$l_name=mysqli_real_escape_string($db,$_REQUEST['l_name']);
$username=mysqli_real_escape_string($db,$_REQUEST['username']);
$email=mysqli_real_escape_string($db,$_REQUEST['email']);
$password1=mysqli_real_escape_string($db,$_REQUEST['password1']);
$password2=mysqli_real_escape_string($db,$_REQUEST['password2']);

}
// Handle somw empty errors

if(empty($f_name)){
    array_push($error,'first name is required');
}
if(empty($l_name)){
    array_push($error,'last name is required');
}

if(empty($email)){
    array_push($error,'email name is required');
}
if(empty($password1)){
    array_push($error,'password name is required');
}

// check if passwords match
if ($password1==$password2){
    array_push($error, 'password does not much');
}

// ran a query and check if userbane exsits
$user_check_query=" SELECT* FROM user_data WHERE username='$username' or email='$email' lIMIT 1 ";
$results= mysqli_query($db, $user_check_query);
$user=mysqli_fetch_assoc($results);

if ($user){
    if($user['username']===$username){
        array_push($error, 'there exist a username');
    }
    if($user['email']===$email){
        array_push($error, 'email already exist');
    }
}

// Register the user
if (count($error)==0){
    $password=md5($password1);

    $query="INSERT INTO users_data(f_name,l_name,username,email,password) VALUES($f_name,$l_name,$username,$email,$password)";
    myspli_query($db,$query);
}


?>