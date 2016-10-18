<!DOCTYPE html>
<html lang="en-US">

<head>

<script>
document.alert("In order to see the content, click the column title");
</script>

<title>My Home Page</title>

<link rel="stylesheet" type="text/css" href="Style.css">

<body>

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

<h2>Guest user? Fill up the form here!</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Last Name: <input type="text" name="lastname" value="<?php echo $lastname;?>">
  <span class="error">* <?php echo $lastnamErr;?></span>
  <br><br>
  First Name: <input type="text" name="firstname" value="<?php echo $firstname;?>">
  <span class="error">* <?php echo $firstnamErr;?></span>
  <br><br>
  Middle Name: <input type="text" name="midname" value="<?php echo $midname;?>">
  <span class="error">* <?php echo $midnamErr;?></span>
  <br><br>
  Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknamErr;?></span>
  <br><br>
  Home Address: <input type="text" name="homeadd" value="<?php echo $homeadd;?>">
  <span class="error">(optional) <?php echo $homeaddErr;?></span>
  <br><br>
  Cellphone Number: <input type="text" name="cellno" value="<?php echo $cellno;?>">
  <span class="error">* <?php echo $cellnoErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <span class="error">(optional) </span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2 id='input'>Your Input:</h2>";
echo $lastname;
echo "<br>";
echo $firstname;
echo "<br>";
echo $midname;
echo "<br>";
echo $nickname;
echo "<br>";
echo $homeadd;
echo "<br>";
echo $cellno;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<h2>About Me</h2>
<p id="note">Note: the table headings are clickable, try to press it to see the content</p><br>

<div class="tables">
<table>

  <tr>	
    <th><button type="button" onclick="document.getElementById('name').style.display='table-cell'">NAME</button></th>
    <th><button type="button" onclick="document.getElementById('nickname').style.display='table-cell'">NICKNAME</button></th> 
    <th><button type="button" onclick="document.getElementById('hobbies').style.display='table-cell'">HOBBIES</button></th>
	<th><button type="button" onclick="document.getElementById('interests').style.display='table-cell'">INTERESTS</button></th>
	<th><button type="button" onclick="document.getElementById('websites').style.display='table-cell'">FAVORITE WEBSITES</button></th>	
  </tr>

  <tr>
  
    <td id="name" style="display:none">Orly Aguila Chavez<br> 
    <img src="me.jpg" alt="Formal Photo:" style="width:300px;height:450px;"> 
    </td>
    
    <td id="nickname" style="display:none">Orly</td>
    
    <td id="hobbies" style="display:none">
	<br>
	Playing Volleyball <br>
	<img src="volley.jpg" style="width:304px;height:180px;"> <br>
	Basketball<br>
	<img src="bask.jpg" style="width:304px;height:180px;"> <br>	
	Guitar<br>
	<img src="guit.jpg" style="width:304px;height:180px;"> <br>	
	Computer Games<br>
	<img src="comp.jpg" style="width:304px;height:180px;">
	</td>
	
	<td id="interests" style="display:none">
	<br>
	Java Programming<br>
	<img src="java.gif" alt="Java" style="width:304px;height:180px;"> <br>
	Visual Basic Programming<br>
	<img src="vb.gif" alt="Visual Basic" style="width:304px;height:180px;"> <br>
	Database<br>
	<img src="database.gif" alt="Database" style="width:304px;height:180px;"> <br>
	HTML<br>
	<img src="html1.gif" alt="HTML5 Icon" style="width:304px;height:180px;"> 
	</td>


	<td id="websites" style="display:none">
	<a href="http://www.w3schools.com">
	<img src="w3.png" alt="w3schools" style="width:80px;height:80px;">
	</a><br>
	<a href="https://www.khanacademy.org">
	<img src="khan.png" alt="khanAcademy" style="width:80px;height:150px;">
	</a><br>	
	<a href="https://www.facebook.com">
	<img src="fb.png" alt="Facebook" style="width:80px;height:80px;">
	</a> <br>
	<a href="https://www.youtube.com">
	<img src="youtube.png" alt="Youtube" style="width:180px;height:180px;">
	</a>
	</td>
  </tr
</table>
</div>


<div class="trivia">

<h2>Wanna know some trivias about me? 
<button type="button" onclick="document.getElementById('triviaa').style.display='block'">click here!</button>
</h2>


<div id="triviaa" style="display:none">

<ul>
<li class="question"> What do you think is my main sport?
</ul>

<p id="volley" style="display:none">Some might think this is obvious because I placed it first in my hobbies so yes, It's Volleyball! and guess what, I became a captain ball in this sport</p>
<button type="button" onclick="document.getElementById('volley').style.display='block'">Show the answer!</button>

<ul>
<li  class="question"> Try guessing my favorite online game
</ul>

<p id="csgo" style="display:none">I'm not a big fan and a player of LOL or DOTA just like my classmates but i know how to play those. However I'm a player of CS:GO, and my highest rank achievement is Legendary Eagle </p>
<button type="button" onclick="document.getElementById('csgo').style.display='block'">Show the answer!</button>

<ul>
<li  class="question"> Here's the interesting part, taking this I.T. major is my second choice/option wanna know if what is my first choice?
</ul>

<p id="milit" style="display:none"> My biggest dream is to be in the military, I took up the PMAEE and I passed it. Unluckily I failed in Medical examination because they diagnosed something and that's why I took I.T. Major</p>
<button type="button" onclick="document.getElementById('milit').style.display='block'">Show the answer!</button>

<ul>
<li  class="question"> My favorite Foods
</ul>
<p id="food" style="display:none"> Chicken Adobo, Chicken Curry, Beef and Pork steak</p>
<button type="button" onclick="document.getElementById('food').style.display='block'">Show the answer!</button>

<ul>
<li  class="question"> Among those interests listed above, can you gess which one is my favorite? 
</ul>
<p id="inte" style="display:none"> Visual Basic Programming </p>
<button type="button" onclick="document.getElementById('inte').style.display='block'">Show the answer!</button>
</div>
</div>

<div id="changefont">
<button type="button" onclick="document.getElementById('triviaa').style.fontFamily='monospace'">Click Me to change font</button>
</div>
<p id="note2">Note: Make sure all of the buttons were clicked before pressing these buttons to see the transition.
</p>
<div id="changefontsize">
<button type="button" onclick="document.getElementById('triviaa').style.fontSize='25px'">Click Me to change font Size</button>
</div>

</body>
</html>