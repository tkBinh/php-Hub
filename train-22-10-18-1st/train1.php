<?php
   if( $_POST["location"] )
   {
      $location = $_POST["location"];
      header( "Location:$location" );  
      exit();
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
      <p>Chọn một trang để truy cập:</p>
      
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
         <select name="location">.
         
            <option value="https://vietjack.com">
               vietjack.com
            </option>
         
            <option value="http://www.google.com">
               Google Search Page
            </option>
         
         </select>
         <input type="submit" />
      </form>
</body>
</html>