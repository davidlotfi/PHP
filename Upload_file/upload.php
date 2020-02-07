
<?php
 
 
    if(!empty($_FILES['image'])){
        echo "<pre>";
          print_r ($_FILES['image']);
        echo "</pre>";
     }
  
    echo "<hr />";
  
  
 ?>
<html>
   <body>
      
      <form action="upload.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>