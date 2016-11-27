<!DOCTYPE html> 

<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
      <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/Style.css"> 
   </head> 
   <body> 
   <center>
<?php echo validation_errors(); ?>
 
<?php echo form_open('users/create'); ?>    
    		<br>
            <br>
        
            <label for="lastname">Last Name</label>
            <input type="input" name="lastname" size="20" />
            <br>
            <br>
        
            <label for="firstname">First Name</label>
            <input type="input" name="firstname" size="20" />
        	<br>
            <br>
        
            <label for="midname">Middle Name</label>
            <input type="input" name="midname" size="20" />
        	<br>
            <br>
        
			<label f	or="email">Email</label>
            <input type="input" name="email" size="20" />
        	<br>
            <br>

            <label for="gender">Gender</label>
            <input type="input" name="gender" size="20" />
    		<br>
            <br>    

            <label for="nickname">Nickname</label>
            <input type="input" name="nickname" size="20" />
        	<br>
            <br>

            <label for="homeadd">Home Address</label>
            <input type="input" name="homeadd" size="20" />
	        <br>
            <br>

            <label for="cellno">Cellphone No.</label>
            <input type="input" name="cellno" size="20" />
 			<br>
            <br>       
        
            <label for="comment">Comment</label>
            <textarea name="comment" rows="10" cols="40"></textarea>
        	<br>
            <br>

            
            <input type="submit" name="submit" value="Create Users item" />
        
    
</form>

   </body>
</html>