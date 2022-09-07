
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
             font-size :20px;
        }
        table, td {
            border:2px solid black;
            padding :5px;
            margin-left:30%;
        }
        a{
            color: black;
        }
        th{
            background-color:grey;
            padding:10px;
            
        }
        tr{
                background-color:lightblue;
            }
        
    </style>
</head>
<body>
    <table>
        <th >TITLE</th>
        <th>BUTTONS :-</th>
        <?php
            session_start();
            foreach($_SESSION['task'] as $key=>$value)
            {
                echo "<tr>";
        ?>
        <td><?php echo $value['title']; ?></td>
        <td style="background-color:lightgreen";> <?php echo "<a href=\"edit.php?id=".$value['id']."\">edit</a>"?> </td>
        <td style=" background-color:orange";><?php echo "<a href=\"delete.php?id=".$value['id']."\">delete</a>"?></td>
        <td style=" background-color:pink";><?php echo "<a href=\"view.php?id=".$value['id']."\">view</a>"?></td>
        <?php
            echo "</tr>";
            }
        ?> 
    </table>
    <div style="text-align:center">
    <?php
        if(empty($_SESSION['task']))
        {
            echo "<b>no record found </b><br>";
        }
        echo "Add more ?<b><a href=\"add.php\"> ADD</a></b>";
    ?>
    </div>
</body>
</html>
