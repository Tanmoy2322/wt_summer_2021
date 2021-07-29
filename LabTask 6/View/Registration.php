<?php   include '../Control/PhpValidation.php' ; ?>

<!DOCTYPE html>
<html>
<head>
<script src="../Js/JavaScriptValidation.js"></script>
<title>Registration Form </title>

</head>
<body>



<table>
<h1>Registration Form</h1>
<form action="" onsubmit="return jsvalidationForm()" method="post" >
<tr>
<td> Full Name : </td>
<td><input type="text" id="name" name="name" > <?php echo $Name; ?> </td> <td> <p id="err_name"></p></td>
</tr>


<tr>
<td> Email :  </td>
<td><input type="text" id="email" name="email"> <?php echo $v_email; ?> </td> <td> <p id="err_email"></p></td>
</tr>


<tr>
<td>Password :  </td>
<td><input type="password" id="password" name="password"><?php echo $v_password; ?></td> <td> <p id="err_password"></p></td>
</tr>

<tr>
<td>Comment :</td>
<td><textarea rows="5" cols="25" id="comment" name="comment"></textarea> <?php echo $v_comment; ?></td><td> <p id="err_comment"></p></td>
</tr>


<tr>
<td> Gender : </td>
<td>
<input type="radio" name="gender" id="gender" value="Male"> Male 
<input type="radio" name="gender" id="gender" value="Female"> Female 
<input type="radio"  name="gender"  id="gender" value="Other"> Other <br> <?php echo $v_gender; ?><br> <td> <p id="err_gender"></p></td>
</td>
</tr>

<tr>
<td>  Hobby :</td>
<td>

<input type="checkbox"  name="Singing" id="Singing" value="Singing"> Singing
<input type="checkbox" name="Dancing" id="Dancing" value="Dancing">Dancing
<input type="checkbox" name="Reading"  id="Reading" value="Reading">Reading <br> <?php echo $v_hobby; ?>  <td> <p id="err_hobby"></p></td>

</td>
</tr>



<tr>
<td> <label for="file ">Please Choose a File : </label> </td>
<td><input type="file" id="file"></td>
</tr>


<tr>
<td> <input type="submit" name="Submit" > 
 <input type="reset" name="Reset">
</td>
</tr>


</form>


</table>

</body>
</html>