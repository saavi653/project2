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
             text-align :left ;
        }  
    </style>    
</head>
<body>
<?php
    session_start();
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $record=[];
        foreach($_SESSION['task'] as $key=>$value)
        {
            if($id==$value['id'])
            {
                $record=$value;
            }
        }
    } 
   
?>
<form action=" " method="POST">
    TITLE<input type="textbox" name="title" value=<?php echo $record['title'] ?> ><br><br>
    DESCRIPTION<br><textarea name="description" rows="10" cols="50"><?php echo $record['description']?></textarea><br><br>
    <input type="submit" name ="submit"/>  
</form>    
</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
     foreach($_SESSION['task'] as $key=>$value)
     {
        if($id==$value['id'])
        {
             $_SESSION['task'][$key]=$_POST;
             $_SESSION['task'][$key]['id']=$id;
             header('location:index.php');
        }
     }
 }  
 ?>
  
