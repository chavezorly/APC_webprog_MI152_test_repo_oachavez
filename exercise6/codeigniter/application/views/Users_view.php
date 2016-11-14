<!DOCTYPE html> 
<html lang = "en">
 
	<script>
	document.alert("In order to see the content, click the column title");
	</script>

	<title>My Home Page</title>

	
	
<body> 
   
     
         <?php 
            $i = 1; 
            echo "<tr>"; 
            
            echo "<td>User Id</td>"; 
            echo "<td>Last Name</td>"; 
            echo "<td>First Name</td>"; 
            echo "<td>Middle Name</td>"; 
			echo "<td>Email</td>"; 
            echo "<td>Gender</td>"; 
            echo "<td>Nickname</td>";    
            echo "<td>Home Address</td>"; 
            echo "<td>Cellphone no.</td>"; 
      
            
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$r->user_id."</td>"; 
               echo "<td>".$r->lastname."</td>"; 
               echo "<td>".$r->firstname."</td>"; 
               echo "<td>".$r->midname."</td>"; 
               echo "<td>".$r->email."</td>"; 
			   echo "<td>".$r->gender."</td>"; 
			   echo "<td>".$r->nickname."</td>"; 
			   echo "<td>".$r->homeadd."</td>"; 
			   echo "<td>".$r->cellno."</td>"; 
			  
			
               echo "<td><a href = '".base_url()."index.php/users/edit/"
                  .$r->user_id."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/users/delete/"
                  .$r->user_id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
      </div>
      </div>
      
      



   </body>
	
</html>