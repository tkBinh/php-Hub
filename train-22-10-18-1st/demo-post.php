<?php
   if( $_POST["name"] || $_POST["age"] )
   {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] ))
      {
         die ("Tên không hợp lệ - nên là các chữ cái");
		}
      echo "Chào mừng ". $_POST['name']. "<br />";
      echo "Bạn ". $_POST['age']. " tuổi.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action="<?php $_PHP_SELF ?>" method="POST">
         Họ tên: <input type="text" name="name" />
         Tuổi: <input type="text" name="age" />
         <input type="submit" />
      </form>
   
   </body>
</html>