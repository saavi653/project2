<?php
    session_start();
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
             background-color: grey;
        }
    </style> 
</head>
<body>
    <form action="check.php" method="post">
        <h1>TO DO LIST </h1>
        <label>TITLE  :</label>
        <input type="text" name="title" /><br>
        <?php
            if(!empty($_SESSION['error']))
            { 
                if(isset($_SESSION['error']['title']))
                {
                     echo $_SESSION['error']['title'];
                }     
            }
        ?>
        <br><label>DESCRIPTION  :</label><br>
        <textarea rows="10" cols="50"  name="description" ></textarea><br>
        <?php
            if(!empty($_SESSION['error']))
            {   
                if(!empty($_SESSION['error']['description']))
                {
                    echo $_SESSION['error']['description'];
                }    
            }
            unset($_SESSION['error']);  
        ?>
        <input type="submit" name="submit" value="submit" />
    </form>   
</body>
</html>