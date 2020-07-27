<?php
   if(isset($_FILES['image'])){ //Η συνάρτηση Isset () ελέγχει εάν έχει οριστεί μια μεταβλητή, πράγμα που σημαίνει ότι πρέπει να δηλωθεί και να μην είναι NULL.
      $errors= array();
      $file_name = $_FILES['image']['name']; //όνομα εικόνας
      $file_size =$_FILES['image']['size']; //μέγεθος εικόνας
      $file_tmp =$_FILES['image']['tmp_name']; //πληροφοριες εικόνας
      $file_type=$_FILES['image']['type']; //τύπος εικόνας
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name']))); //Η συνάρτηση strtolower () μετατρέπει μια συμβολοσειρά σε πεζά.
      //Η συνάρτηση explode () σπάει μια συμβολοσειρά σε έναν πίνακα.
      
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
      <!--Το χαρακτηριστικό enctype καθορίζει τον τρόπο με τον οποίο τα δεδομένα φόρμας πρέπει να κωδικοποιούνται κατά την υποβολή τους στο διακομιστή.-->
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>