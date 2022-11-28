<?php
session_start();
    $val=$_SESSION['num'];
    $img=array("56"=>"shelf56.jpeg", "43"=>"shelf43.jpeg", "55"=>"PicsArt_11-26-05.12.07.jpg");
   
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
   margin-top:0px;
   width:100%;
        }
        
    </style>
</head>
<body>
   <img src="./images/<?php echo $img[$val] ?>" alt="" > 
</body>
</html>
