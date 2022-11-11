<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['mail'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello Admin</h1>
     <a href="logout.php">Logout</a>
</body>
</html>
<?php

 
     if(isset($_SESSION['mail']))
     {
          
     }


?>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>