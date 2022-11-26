<?php
session_start();
    // $imgSrc="imgTest.jpg";
    // header("Location: homePage.php?im=".$imgSrc);
    // echo $_SESSION['num'];
    
    $val=$_SESSION['subj'];
    echo "<p style='color:white; text-align:center; font-size:30px'>$val</p>";
    $img=array("railway engineering"=>"sam.jpeg", "flood control"=>"sam1.jpeg", "english fiction"=>"sam2.jpeg");
    // echo "<img src='./images/$img[$val]' style='height:600px; width:1000px;margin-left:440px'>";
    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:black;
        }
        img{
            align:center;
        }
    </style>
</head>
<body style="background-image=url('./images/<?php echo $img[$val] ?>')">
    
</body>
</html>
