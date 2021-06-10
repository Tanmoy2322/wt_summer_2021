<?php 
$nameError = $emailError = $phoneError = $passwordError = "";
$name = $email = $phone = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) {
    $nameError = "! Name is mandatory";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameError = "! Only letters allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailError = "! Email is mandatory";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "! Invalid email format";
    }
  }
    
  if (empty($_POST["phone"])) {
    $phoneError = "PhoneNumber is mandatory";
  } else {
    $phone = test_input($_POST["phone"]);
  }


  if (empty($_POST["password"])) {
    $passwordError = "! password is mandatory";
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }else{
        echo 'Strong password.';
    }
  }

}


function test_input($data) {
  $data = trim($data);   
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .errorColor {color: #D30000;}
    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">

                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h2 class="text-center">Registration-Form</h2>
                    <p class="text-center">Create a Free account</p>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" >
                        <span class ="errorColor"><?php echo $nameError;?></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" >
                        <span class ="errorColor"><?php echo $emailError;?></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="mobile" name="phone" placeholder="Phone Number">
                        <span class ="errorColor"><?php echo $phoneError;?></span>

                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                        <span class ="errorColor"><?php echo $passwordError;?></span>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="register" value="Register">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
    <?php
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $password;
    echo "<br>";
    ?>
</body>
</html>

<br>Here is the PHP Registration Form Validation .