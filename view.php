<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:grey;
        }
    </style>    
</head>
<body>
<?php
    if(isset($_GET['id']))
    {
        session_start();
        $id=$_GET['id'];
        foreach($_SESSION['task'] as $key=>$value)
        {
            if($id==$value['id'])
            {   
                ?><h1><?php echo"DESCRIPTION OF  :".$value['title']."<br>";?></h1><?php
                echo $value['description'];
            }
        }
    }  
?>  
<br><br><b>
<a href="index.php"> GO BACK </a></b>
</body>
</html>

