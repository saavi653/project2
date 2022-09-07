<?php
function validate($data)
{ 
    $err1=[];
    if(empty($data['title']))
    {
        $err1['title']="title is required";
    }
    if(empty($data['description']))
    {   
        $err1['description']="description is required<br>";
    }
    return $err1;
}
