<?php
session_start();
$servername="sql202.epizy.com";
$username="epiz_33084360";
$pssword="JNlx3W8ZDd3WZ";
$dbname="epiz_33084360_lns";
//connecting to database
$link=new mysqli($servername, $username, $pssword, $dbname);
$uname=$_SESSION['uname'];
$pwd=$_SESSION["pwdd"];
if($link->connect_error)
{
    die("connection failed: ".$link->connect_error);
}
else{
    $query="SELECT * FROM users WHERE username='$uname'  AND password='$pwd'";
    $result=$link->query($query);
    if($result){
        if(mysqli_num_rows($result)==1){
            echo "login successful!! Welcome to Library Navigation System";
            header("Location:homePage.php");
        }
        else{
            echo "invalid login credentials or not registered yet";
        }
    }
    $link->close();
   
}

?>