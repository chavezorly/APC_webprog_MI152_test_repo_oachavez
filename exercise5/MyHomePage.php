<?php
include_once 'dbconfig.php';
// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}                
// delete condition
?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Are yo sure you want to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Are you sure you want to Delete ?'))
 {
  window.location.href='MyHomePage.php?delete_id='+id;
 }
}
</script>

<title>My Home Page</title>

<link rel="stylesheet" type="text/css" href="Style.css">

<body>

<h2>Guest user? <a href="add_data.php">Fill up the form here</a></h2>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan= "11"> User list</th>
    </tr>
    <th>Last Name</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Nickame</th>
    <th>Home Address</th>
    <th>Cellphone Number</th>
    <th>Comment</th>

    
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
        <td><?php echo $row[7]; ?></td>
        <td><?php echo $row[8]; ?></td>
        <td><?php echo $row[9]; ?></td>
        
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

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