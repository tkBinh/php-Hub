<!-- PHP cung cấp mảng liên hợp $_GET để truy cập tất cả các thông tin đã được gửi bởi phương thức GET. -->
<?php
	if ( $_GET["ten"] || $_GET["matKhau"])
	{
		echo "Tên đăng nhập: " . $_GET['ten'] . "<br />";
		echo "Mật khẩu: " . $_GET['matKhau'] . "<br />";
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php
		$_PHP_SELF
	?>" method="GET">
	Tên: <input type="text" name="ten" /> <br />
	Mật khẩu: <input type="text" name="matKhau"><br />
	<button type="submit">Submit</button>
	</form>
</body>
</html>