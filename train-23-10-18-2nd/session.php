<?php
	session_start();

	if ( isset($_SESSION["mySess"] ))
	{
		$_SESSION["mySess"] += 1;	
	} 
	else 
	{
		$_SESSION["mySess"] =1;	
	}

	$msg = "Bạn đã refresh trang " . $_SESSION["mySess"] . " lần trong session này"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- Khi một Session bắt đầu -->
		<!-- Khởi tạo SessionID: Chuỗi 32 kí tự hexa ngẫu nhiên -->
		<!-- Tự động tạo Cookie PHPSESSID dưới client để lưu Session ID -->
		<!-- Một file được tạo trên Server dưới dạng sess_SessionID -->

	<!-- Khi cần lấy giá trị của Session -->
		<!-- PHP tự động lấy chuỗi định danh SessionID từ Cookie PHPSESSID, so sánh với server và lấy giá trị -->
		<!-- Một session kết thúc khi người dùng tắt trình duyệt hoặc sau khi rời khỏi site này, Server sẽ chấm dứt session sau một thời gian đã định trước, thường là 30 phút. -->
		<!-- Lời gọi hàm session_start() này được đề nghị đặt ở đầu của trang. -->
	<?php
		echo "$msg";
	?>
</body>
</html>