<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php      
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data       
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $midname = $_POST['midname'];
 $email = $_POST
        // sql query for inserting data into database
 
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" contene="text/css" />
</head>
<body>
<center>

<?php
// define variables and set to empty values
$lastnamErr = $firstnamErr =$midnamErr = $emailErr = $genderErr = $nicknamErr = $homeaddErr = $cellnoErr ="";
$lastname = $firstname=$midname= $email = $gender = $nickname = $homeadd= $cellno= $comment  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["lastname"])) {
    $lastnamErr = "Last name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);

    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnamErr = "Only letters/white space are allowed"; 
    }
  }
  
  if (empty($_POST["firstname"])) {
    $firstnamErr = "First name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
   
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnamErr = "Only letters/white space are allowed"; 
    }
  }
  
  if (empty($_POST["midname"])) {
    $midnamErr = "Middle name is required";
  } else {
    $midname = test_input($_POST["midname"]);
 
    if (!preg_match("/^[a-zA-Z ]*$/",$midname)) {
      $midnamErr = "Only letters/white space are allowed"; 
    }
  }
  
   if (empty($_POST["nickname"])) {
    $nicknamErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
   
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknamErr = "Only letters/white space are allowed"; 
    }
  }
  
   if (empty($_POST["cellno"])) {
    $cellnoErr = "Cellphone number is required";
  } else {
    $cellno = test_input($_POST["cellno"]);
    
    if (!preg_match("/^[1-9][0-9]*$/",$cellno)) {
      $cellnoErr = "Only numbers are allowed"; 
    }
  }
  
$homeadd = test_input($_POST["homeadd"]);
  
    if (!preg_match("/[A-Za-z0-9]+/", $homeadd)) {
      $homeaddErr = "Only letters/ numbers/white space are allowed";
    }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2><a href="MyHomePage.php">back to main page</a></h2>
<p><span class="error">* required field.</span></p>

<form method="post" >  
 <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>">
  <span class="error">* <?php echo $lastnamErr;?></span>
  <br><br>
 <input type="text" name="firstname" placeholder="First Name" value="<?php echo $firstname;?>">
  <span class="error">* <?php echo $firstnamErr;?></span>
  <br><br>
 <input type="text" name="midname" placeholder="Middle Name" value="<?php echo $midname;?>">
  <span class="error">* <?php echo $midnamErr;?></span>
  <br><br>
 <input type="text" name="nickname" placeholder="Nickname"value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknamErr;?></span>
  <br><br>
 <input type="text" name="homeadd" placeholder="Home Address" value="<?php echo $homeadd;?>">
  <span class="error">(optional) <?php echo $homeaddErr;?></span>
  <br><br>
 <input type="text" name="cellno" placeholder="Cellphone No." value="<?php echo $cellno;?>">
  <span class="error">* <?php echo $cellnoErr;?></span>
  <br><br>
 <input type="text" name="email" placeholder="Email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
<textarea name="comment" placeholder="Comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <span class="error">(optional) </span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <button type="submit" name="btn-save"><strong>SAVE</strong></button>
</form>
  
</center>
</body>