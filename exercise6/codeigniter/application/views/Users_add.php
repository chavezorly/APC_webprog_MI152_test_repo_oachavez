<!DOCTYPE html> 

<html lang = "en">
 
   <head> 

   </head> 
   <body> 
   <center>
   
   <a href = "<?php echo base_url(); ?>index.php"> <h2>Back to main page</h2></a>
   
         <?php 
        
            echo form_open('Users_controller/add_student');
            
            echo form_label('User Id'); 
            echo form_input(array('id'=>'user_id', 'name'=>'user_id')); 
            echo "<br/>"; 
             echo "<br/>"; 
				
            echo form_label('Last Name'); 
            echo form_input(array('id'=>'lastname','name'=>'lastname')); 
            echo "<br/>"; 
             echo "<br/>"; 
				
			
             
			
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
            
         ?>
         
   </body>
</html>