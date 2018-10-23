		<!-- Ghi file -->
		<?php
			$fileName = "train.txt";
			$file = fopen($fileName, "w");

			if ( $file == false )
			{
				echo ( 'Có lỗi khi mở file' );
				exit();
			}

			fwrite($file, 'xxxx');
			fclose( $file );
		?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<!-- Đọc file -->
		<?php
			$fileName = 'train.txt';
			$file = fopen($fileName, "r");

			if ($file == false)
			{
				echo 'Xảy ra lỗi khi mở file';
				exit();
			}

			$fileSize = filesize($fileName);
			$fileText = fread($file, $fileSize);
			fclose($file);

			echo ("Kích thước file: $fileSize <b>byte</b> <br />");
			echo ("Nội dung file... <br />");
			echo ("<b>$fileText</b>");
		?>

</body>
</html>