
<?php
include('validation.php');
if(isset($_POST['submit']))
{ 
    session_start();
    $err=[];
    $err=validate($_POST);
    if(!empty($err))
    {
        $_SESSION['error']=$err;
        header('location:add.php');
    }
    else
    {
        if(!empty($_SESSION['error']))
        {
            unset($_SESSION['error']);
        }
        $count=isset($_SESSION['task'])?count($_SESSION['task']):0;
        $_POST['id']=$count+1;
        $_SESSION['task'][]=$_POST;
        header('location:index.php');
    }
}
?>
