<?php
session_start();
$servername="sql212.epizy.com";
$username="epiz_33071469";
$pssword="q2Fo5VarcCev5vq";
$dbname="epiz_33071469_lns";
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