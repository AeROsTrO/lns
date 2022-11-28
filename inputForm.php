<?php
session_start();
$servername="sql202.epizy.com";
$username="epiz_33084360";
$password="JNlx3W8ZDd3WZ";
$dbname="epiz_33084360_lns";
    $link=new mysqli($servername, $username, $password, $dbname);
    $subject=$_POST["subject"];
    $_SESSION['subj']=$subject;
    if($link->connect_error)
    die("connection failed: ".$link->connect_error);
    else{
        $query="SELECT * from shelves where subjectName='$subject'";
        $result=$link->query($query);

        if($result){
            $row=mysqli_fetch_row($result);
                $msg= "<p style='font-size:50'>shelf number for $subject is ".$row[2]."</p>";
                
                $_SESSION['num']=$row[2];
                header("Location:homePage.php?msg=".$msg);
        }
    else{
            echo "oops! no such subject found!";
        }
    }
    $link->close();
?>