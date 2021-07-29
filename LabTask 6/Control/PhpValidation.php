<?php
$Name="";
$email="";
$Password="";
$Comment="";
$v_email="";
$v_password="";
$v_comment="";
$v_gender="";
$v_hobby="";
$h1=$h2=$h3="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Name=$_REQUEST["name"]; 
$email=$_REQUEST["email"]; 
$Comment=$_REQUEST["comment"];
$Password=$_REQUEST["password"];

if(!empty($Name) && strlen($Name)>=4) 
{
    $Name="You are ".$Name;
}

else if(empty($Name))
{
    $Name="* Name Can not be empty !";
}
else if( strlen($Name)<4)
{
    $Name="* Name Must contain at least 3 character !!";
}
else if(empty($Name) &&  strlen($Name)<4)
{
    $Name="Invalid Name !!";
}



if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $v_email="You Must Enter Valid Email";
}
else{
    $v_email= "Your Email is ".$email;
}


if(strlen($Password)<8)
{
    $v_password="** Password Must Contain 8 character!!";
}
else{
    $v_password=$Password;
}



if(strlen($Comment)<10)
{
    $v_comment=" ** Comment Must Contain 10 character!!";
}
else{
    $v_comment=$Comment;
}

if(isset($_REQUEST["gender"]))
{
    $v_gender= "Gender - ".$_REQUEST["gender"];
}
else{
    $v_gender= " ** Please Select Your Gender";
}



if(!isset($_REQUEST["Dancing"])&&!isset($_REQUEST["Singing"])&&!isset($_REQUEST["Reading"]))
{
    $v_hobby = " ** Please Select at Least One Hobby";
    
}
else{
    $v_hobby=" >>  Selected Hobby : ";
   if(isset($_REQUEST["Dancing"]))
   {
       $h1= $_REQUEST["Dancing"];
       $v_hobby=$v_hobby.$h1;
   }
   if(isset($_REQUEST["Singing"]))
   { 
       $h2= $_REQUEST["Singing"];
       $v_hobby=$v_hobby.",".$h2;
   }
   if(isset($_REQUEST["Reading"]))
   {
    $h3= $_REQUEST["Reading"];
    $v_hobby=$v_hobby.",".$h3;
   }
   
}




} 
 ?>
