<!DOCTYPE html> 

<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
      <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/Style.css"> 
   </head> 
   <body> 
   <center>
<?php

echo'<h2 class = "grays">'.'<label class = "gray">'."Last Name: ".'</label>'.$users_item['lastname'].'</h2>' ;

echo'<h2 class = "grays">'.'<label class = "gray">'."First Name: ".'</label>'.$users_item['firstname'].'</h2>' ;

echo'<h2 class = "grays">'.'<label class = "gray">'."Middle Name: ".'</label>'.$users_item['midname'].'</h2>' ;

echo'<h2 class = "grays">'.'<label class = "gray">'."Email: ".'</label>'.$users_item['email'].'</h2>' ;

echo'<h2 class = "grays">'.'<label class = "gray">'."Gender: ".'</label>'.$users_item['gender'].'</h2>' ;

echo'<h2 class = "grays">'.'<label class = "gray">'."Nickname: ".'</label>'.$users_item['nickname'].'</h2>' ;

echo'<h2 class = "grays">'.'<label class = "gray">'."Home Address: ".'</label>'.$users_item['homeadd'].'</h2>' ;

echo'<h2 class = "grays">'.'<label class = "gray">'."Cellphone No.: ".'</label>'.$users_item['cellno'].'</h2>' ;

echo'<h2 class = "grays">'.'<label class = "gray">'."comment: ".'</label>'.$users_item['comment'].'</h2>' ;
?>

</body>
</html>