<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
  
   </head> 
	
   <body> 
   <center>
      <form method = "" action = "">
      
      	<a href = "<?php echo base_url(); ?>index.php"> <h2>Back to main page</h2></a>
		
         <?php 
            echo form_open('Users_controller/update_student'); 
            echo form_hidden('old_user_id',$old_user_id); 
            
            echo form_label('User Id'); 
            echo form_input(array('id'=>'user_id',
            'name'=>'user_id','value'=>$records[0]->user_id)); 
            echo "<br/>"; 
             echo "<br/>"; 
				
            echo form_label('Last Name'); 
            echo form_input(array('id'=>'lastname','name'=>'lastname',
               'value'=>$records[0]->lastname)); 
            echo "<br/>"; 
             echo "<br/>"; 
				
			
             
            
            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close();
         ?> 
			
      </form> 
   </body>
	
</html>