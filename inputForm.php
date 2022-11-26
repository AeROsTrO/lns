<?php
session_start();
// $val=$_SESSION['subject'];

    
    $servername="localhost";
    $username="root";
    $password="Rahul402!";
    $dbname="lns";
    $link=new mysqli($servername, $username, $password, $dbname);
    $subject=$_POST["subject"];
    $_SESSION['subj']=$subject;
    if($link->connect_error)
    die("connection failed: ".$link->connect_error);
    else{
        $query="SELECT * from shelves where subjectName='$subject'";
        $result=$link->query($query);
        // $msg="Not Found, Try again!";
        // echo $result;
        // $row=mysqli_fetch_row($result);
        // echo $row[1];
        if($result){
            $row=mysqli_fetch_row($result);
                $msg= "<p style='font-size:50'>shelf number for $subject is ".$row[2]."</p>";
                // echo $msg;
                $_SESSION['num']=$row[2];
                header("Location:homePage.php?msg=".$msg);
        }
    else{
            echo "oops! no such subject found!";
        }
    //     header("Location:homePage.php?msg=".$msg);
    }
    $link->close();

?>