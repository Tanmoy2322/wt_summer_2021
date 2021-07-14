<?php
include('../model/db.php');


 $error="";

if (isset($_POST['submit'])) {
$error = "please give product name !";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"student",$_SESSION["username"],$_POST['firstname'],$_POST['email'],$_POST['gender'],$_POST["dob"]);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>