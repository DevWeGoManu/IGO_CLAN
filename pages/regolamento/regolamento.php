<?php
include "tool-bar-editor/config.php";

    $query = "SELECT * FROM editor;";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="page-main">
        <div class="content">
            <button style="float:right;height: 25px;">modifica</button>
            <?php
                if($result = $db->query($query))
                {
                    $row = $result-> fetch_assoc();
                    echo $row['content'];
                }
            ?>
        </div>
    </div>


</body>
</html>