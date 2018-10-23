<!DOCTYPE html>
<html>
<head>
	<title>Train php</title>
</head>
<body>
	<!-- <?php echo 'Kết quả lệnh echo <br />' ?>
	<?php print 'Kết quả lệnh print' ?> -->

	 <!-- Lệnh print là một hàm số, khi được thực thi nó sẽ trả về kết quả là 1, nếu không thì trả về kết quả 0.
	 Do đó, bạn có thể gán kết quả của lệnh print này cho một biến, còn với lệnh echo thì không. -->
	 <!-- Lệnh print chỉ có thể được sử dụng với một tham số, trong khi lệnh echo có thể được dùng với nhiều tham số. -->

	 <!-- php không phân biệt khoảng trắng -->
	 <!-- php là case sensitive -->
	 <!-- biến trong chuỗi nháy đơn sẽ không được in ra, biến in ra đặt trong nháy kép, chuỗi đặt trong nháy đơn là chuỗi tĩnh, chuỗi đặt trong nháy kép là chuỗi động -->
	 <!-- Để định nghĩa biến cần viết kí tự $ vào trước, ngược lại hằng thì không cần. -->
	 <!-- Hằng không thể được định nghĩa bằng phép gán đơn giản, chúng chỉ có thể được định nghĩa bằng cách sử dụng hàm define().
	Hằng có thể được định nghĩa và truy cập bất cứ đâu mà không quan tâm đến quy tắc phạm vi biến.
	Một hằng khi đã được định nghĩa, nó không thể định nghĩa lại hoặc hủy định nghĩa. -->
	<!-- Sử dụng hàm array() để tạo mảng -->
	<?php 
		$mang = array(1, 2, 3, 4, 5);
		foreach ($mang as $value) {
			echo "giá trị phần tử mảng: $value <br />";
		}
	?>
	 <!-- Mảng liên hợp key =>value -->
	 <?php 
		$mangLienHop = array("a" => 1000, "b" => 2000, "c" => 3000);
		echo "Giá trị của a là: " . $mangLienHop['a'] . "<br />";
	?>
	<!-- Hàm strlen() trong PHP được sử dụng để tìm độ dài của một chuỗi. -->
	<?php 
		echo strlen('Một chuỗi cần tính độ dài');
		echo '<br />';
	?>
	<!-- Hàm strops() được sử dụng để tìm một chuỗi hoặc ký tự bên trong một chuỗi -->
	<?php echo strpos('Chuỗi dùng để tìm kiếm', 'ùng') ?>
	<!-- Vị trí đầu tiên trong chuỗi là 0 -->
	<!-- PHP cung cấp hàm getenv() để truy cập giá trị của tất cả biến môi trường. Thông tin được chứa trong biến môi trường HTTP_USER_AGENT có thể được sử dụng để tạo nội dung động thích hợp với trình duyệt. -->
	<?php
		 function getBrowser()
         { 
            $u_agent = $_SERVER['HTTP_USER_AGENT']; 
            $bname = 'Unknown';
            $platform = 'Unknown';
            $version= "";
            
            //Trước hết, chúng ta kiểm tra nền tảng platform
            if (preg_match('/linux/i', $u_agent)) {
               $platform = 'linux';
            }
            
            elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
               $platform = 'mac';
            }
            
            elseif (preg_match('/windows|win32/i', $u_agent)) {
               $platform = 'windows';
            }
            
            // Tiếp đó, lấy tên của User Agent
            if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
            {
               $bname = 'Internet Explorer';
               $ub = "MSIE";
            }
            
            elseif(preg_match('/Firefox/i',$u_agent))
            {
               $bname = 'Mozilla Firefox';
               $ub = "Firefox";
            }
            
            elseif(preg_match('/Chrome/i',$u_agent))
            {
               $bname = 'Google Chrome';
               $ub = "Chrome";
            }
            
            elseif(preg_match('/Safari/i',$u_agent))
            {
               $bname = 'Apple Safari';
               $ub = "Safari";
            }
            
            elseif(preg_match('/Opera/i',$u_agent))
            {
               $bname = 'Opera';
               $ub = "Opera";
            }
            
            elseif(preg_match('/Netscape/i',$u_agent))
            {
               $bname = 'Netscape';
               $ub = "Netscape";
            }
            
            // Cuối cùng, lấy tên của version
            $known = array('Version', $ub, 'other');
            $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
            
            if (!preg_match_all($pattern, $u_agent, $matches)) {
               // nếu không có so khớp nào, tiếp tục ...
            }
            
            
            $i = count($matches['browser']);
            
            if ($i != 1) {
               
               
               //kiểm tra xem version là trước hay sau
               if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
                  $version= $matches['version'][0];
               }
               else {
                  $version= $matches['version'][1];
               }
            }
            else {
               $version= $matches['version'][0];
            }
            
            
            if ($version==null || $version=="") {$version="?";}
            return array(
               'userAgent' => $u_agent,
               'name'      => $bname,
               'version'   => $version,
               'platform'  => $platform,
               'pattern'   => $pattern
            );
         }
         
         //hiển thị kết quả
         $ua=getBrowser();
         $yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
         
         print_r($yourbrowser);
         ?>
</body>
</html>