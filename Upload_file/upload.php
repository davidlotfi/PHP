
<?php
    
    $upload_errors = array(
        // http://www.php.net/manual/en/features.file-upload.errors.php
      UPLOAD_ERR_OK 		    => "No errors.",
      UPLOAD_ERR_INI_SIZE     	=> "Larger than upload_max_filesize.",
      UPLOAD_ERR_FORM_SIZE 	    => "Larger than form MAX_FILE_SIZE.",
      UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
      UPLOAD_ERR_NO_FILE 		=> "No file.",
      UPLOAD_ERR_NO_TMP_DIR     => "No temporary directory.",
      UPLOAD_ERR_CANT_WRITE     => "Can't write to disk.",
      UPLOAD_ERR_EXTENSION    	=> "File upload stopped by extension."
    );
   
    if(!empty($_FILES['image'])){
        $error=$_FILES['image']['error'];
        $message=$upload_errors[$error];
        echo "<pre>";
          print_r ($_FILES['image']);
        echo "</pre>";
     }
    
    echo "<hr />";
  
  
 ?>
<html>
   <body>
      <?php if (!empty($message)) {echo $message;}?>
    
      
      <form action="upload.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>