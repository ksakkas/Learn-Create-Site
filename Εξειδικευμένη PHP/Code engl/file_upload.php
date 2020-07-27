<?php
   if(isset($_FILES['image'])){ //The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
      $errors= array();
      $file_name = $_FILES['image']['name']; //name img
      $file_size =$_FILES['image']['size']; //size img
      $file_tmp =$_FILES['image']['tmp_name']; //temporary  img
      $file_type=$_FILES['image']['type']; //type img
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name']))); //The strtolower() function converts a string to lowercase.
      //The explode() function breaks a string into an array.

      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      <!--The enctype attribute specifies how the form-data should be encoded when submitting it to the server.-->
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>