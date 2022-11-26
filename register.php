<?php
session_start();
    $servername="localhost";
    $usrname="root";
    $password="Rahul402!";
    $dbname="lns";
    //connecting to database
    $link=new mysqli($servername, $usrname, $password, $dbname);
    
    //getting info
    
    $reg_no=$_POST["regno"];
    $username=$_POST["username"];
    $mail=$_POST["email"];
    $pwd=$_POST["password"];
    $_SESSION['uname']=$username;
    $_SESSION['pwdd']=$pwd;
    if($link->connect_error)
    {
        die("connection failed: ".$link->connect_error);
    }
    else{
        $query="SELECT * FROM users WHERE reg_no='$reg_no'";
        $result=$link->query($query);
        if($result){
            if(mysqli_num_rows($result)>0){
                echo "it seems you are already a user... please login";
                header("refresh:2;url=init.html");
                
            }
            else{
                $hi=$link->prepare("insert into users(reg_no,username,email,  password) values (?,?,?,?)");
                $hi->bind_param("ssss", $reg_no, $username, $mail, $pwd);
                $hi->execute();
                echo "registration successful!";
                header("refresh:2;url=init.html");
                $hi->close();
            }
        }
        $link->close();
       
    }
    
   
    
?>