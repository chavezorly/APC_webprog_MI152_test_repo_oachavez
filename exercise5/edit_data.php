<?php
include_once 'dbconfig.php';            
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
 // sql query for update data into database
 $sql_query = "UPDATE users SET  lastname='$lastname', firstname='$firstname', midname='$midname', email='$email', gender='$gender', nickname='$nickname', homeadd='$homeadd', cellno='$cellno', comment='$comment' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='MyHomePage.php';
  </script>
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: MyHomePage.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

    <form method="post">
<br><br>
Last Name: <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $fetched_row['lastname']; ?>">
  <span class="error">* </span>
  <br><br>
First Name: <input type="text" name="firstname" placeholder="First Name" value="<?php echo $fetched_row['firstname']; ?>">
  <span class="error">* </span>
  <br><br>
Middle Name: <input type="text" name="midname" placeholder="Middle Name" value="<?php echo $fetched_row['midname']; ?>">
  <span class="error">* </span>
  <br><br>
Nickname: <input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>">
  <span class="error">* </span>
   <br><br>
Home Address: <input type="text" name="homeadd" placeholder="Home Address" value="<?php echo $fetched_row['homeadd']; ?>">
  <span class="error">(optional) </span>
  <br><br>
Cellphone No.: <input type="text" name="cellno" placeholder="Cellphone No." value="<?php echo $fetched_row['cellno']; ?>">
  <span class="error">* </span>
  <br><br>
Email: <input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>">
  <span class="error">* </span>
  <br><br>
<textarea name="comment" placeholder="Comment" value="<?php echo $fetched_row['comment']; ?>" rows="5" cols="40"></textarea>
  <span class="error">(optional) </span>
  <br><br>
  Gender:
  <input type="radio" name="gender"  <?php if (isset($gender) && $gender=="female") echo $fetched_row['gender']; ?> value="female">Female
  <input type="radio" name="gender"  <?php if (isset($gender) && $gender=="male") echo $fetched_row['gender']; ?> value="male">Male
  <span class="error">* </span>
  <br><br>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </form>
    

</center>
</body>
</html>