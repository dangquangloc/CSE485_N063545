<?php
	session_start(); 
	
 ?>
<?php include "menu.php" ?>
<?php include ("permission.php"); ?>
<?php require_once("demo/connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
  body{

margin: 0%;

padding: 0%;


}

h4{

font-family: 'Courier New', Courier, monospace;

color: black;



}

#noidung{

margin-left: 300px;

}
    </style>
</head>
<body>
     <div id ="anh" width = 40%>
       <Center>  <img src ="images/admin.jpg"></Center>
       
        
    </div>
    </div>

    <div id ="noidung" width = 40%>
       
        <h4>Họ Tên  : <?php echo $_SESSION['name'] ?></h4><br>
        <h4>Email: <?php echo $_SESSION['email']?></h4><br>
        <h4>Chức vụ : Kiểm Duyệt Viên</h4>
      
        
     </div>  

</body>
</html>

