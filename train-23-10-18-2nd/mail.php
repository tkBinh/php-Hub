<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- Gửi mail văn bản -->
	<!-- mail( to, subject, message, headers, parameters ); -->

	<?php
	ini_set("SMTP", "aspmx.l.google.com");
    ini_set("sendmail_from", "binh13it@gmail.com");
		/* người nhận */
		$to = "binh.hathanh@vietis.com.vn";
		/* chủ đề mail */
		$title = "Test tính năng gửi mail";
		/* nội dung */
		$content = "Test tính năng gửi mail, đây là nội dung test =)))";

		$sendMail = mail($to, $title, $content);
		if ($sendMail == true)
		{
			echo "Gửi thành công...";
			return;
		}
		echo "Gửi thất bại, kiểm tra lại";
	?>
</body>
</html>