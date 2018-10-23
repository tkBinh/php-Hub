<!DOCTYPE html>
<?php
	setcookie("myCoo", "Cookie living...", time() + 600, "/", "",1);
?>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- PHP cung cấp hàm setCookie() để thiết lập một Cookie. Hàm này yêu cầu đến 6 tham số và nó nên được gọi trước thẻ <html>. Với mỗi Cookie, hàm này phải được gọi riêng biệt. -->
	<!-- setcookie(name, value, expire, path, domain, security); -->
	<?php
		if ( isset($_COOKIE["myCoo"])) 
		{
			echo "Nội dung cookie: " . $_COOKIE["myCoo"] . "<br />";
			return;
		}
			echo 'Cookie không tồn tại...';
	?>
</body>
</html>