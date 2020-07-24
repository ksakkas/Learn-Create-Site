<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br> <!--$_POST["..."] = to get the entered data from the form 
                                                we always write $ _ and the name of the method we use
                                                in [] we write the name of the field we want to get the data-->
Your email address is: <?php echo $_POST["email"]; ?>
</body>
</html>