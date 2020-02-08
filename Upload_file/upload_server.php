
<?php
    
    $upload_errors = array(
        // http://www.php.net/manual/en/features.file-upload.errors.php
      UPLOAD_ERR_OK 		         => "No errors.",
      UPLOAD_ERR_INI_SIZE     	=> "Larger than upload_max_filesize.",
      UPLOAD_ERR_FORM_SIZE 	   => "Larger than form MAX_FILE_SIZE.",
      UPLOAD_ERR_PARTIAL 		   => "Partial upload.",
      UPLOAD_ERR_NO_FILE 		   => "No file.",
      UPLOAD_ERR_NO_TMP_DIR      => "No temporary directory.",
      UPLOAD_ERR_CANT_WRITE      => "Can't write to disk.",
      UPLOAD_ERR_EXTENSION    	=> "File upload stopped by extension."
    );
   
    if(isset($_POST['submit'])){
       
       echo "<pre>";
          print_r ($_FILES['image']);
        echo "</pre>";
      $tmp_file = $_FILES['image']['tmp_name'];
      $target_file = basename($_FILES['image']['name']);  
      $upload_dir = "images";
      if(move_uploaded_file($tmp_file,$upload_dir."/".$target_file)){

           $message = "sucessful";
          
      }else{
         $error=$_FILES['image']['error'];
         $message=$upload_errors[$error];
      }
      //echo $tmp_file."<br />";
      //echo $target_file."<br />";
              
     }
     
    echo "<hr />";
  
  
 ?>
<html>
   <body>
      <?php if (!empty($message)) {echo $message;}?>
    
      
      <form action="upload_server.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit" name="submit"/>
      </form>
      
   </body>
</html>