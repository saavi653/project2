<?php
session_start();
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    foreach($_SESSION['task'] as $key=>$value)
    {
        if($id==$value['id'])
        {
            unset($_SESSION['task'][$key]);
            header('location:index.php');
        }
    }
}
?>