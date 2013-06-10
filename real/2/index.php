<?php
require '../../SSI.php';

isallowedTo('hackme');

function encrypt($string, $key) {
	$j=0;
	for ($i=0; $i<strlen($string); $i++) {
		$string[$i] = $string[$i]^$key[$j];
		if ($j<(strlen($key)-1)) $j++;
		else $j=0;
	}
	return base64_encode($string);
}

$content = <<<HTML
					อัพโหลดรูปได้เลยจ้าาา ไม่จำกัดไฟล์ ไม่ลบไฟล์ด้วยแหละ เจ๋งปะละ มีที่นี้ที่เดียว<br>
					*รับแต่ภาพ .jpg และ .gif นะ<br>
					<form method="post" enctype="multipart/form-data" action="">
					หัวข้อ: <input type="text" name="title"><br>
					<input type="file" name="img" class="input" size="30" /> <input type="submit" value="Up!">
					</form>
HTML;

if(!empty($_FILES)) {
	if($_FILES['img']['name'] == 'xx.htm') {
		if($_FILES['img']['type'] == "image/jpeg" || $_FILES['img']['type'] == "image/gif") {
			die('ยินดีด้วย! ที่แก้หน้า xx.htm ได้สำเร็จ!<br>นำโค๊ดนี้ไปกรอกที่หน้า<a href="'.$scripturl.'real2">ภารกิจ</a>เลย: '.encrypt($user_info['username'], '2x09jfd2'));
		} else
			$content = 'อัพอะไรมาวะค่ะ!<br>ระวังเดี้ยนฟ้องกลับนะยะ!!';
	} else {
		if($_FILES['img']['type'] == "image/jpeg" || $_FILES['img']['type'] == "image/gif") {
			$content = 'ระบบขัดข้องชั่วคราว - ไม่สามารถเขียนไฟล์เพิ่มได้ กรุณารอหลายๆ ครู่นะคะ';
		} else
			$content = 'อัพอะไรมาวะค่ะ!<br>ระวังเดี้ยนฟ้องกลับนะยะ!!';
	}
}

echo '
<html>
<head>
<title>เว็บ ฝากรูปออนไลน์ ดอท แคม</title>
<link rel="stylesheet" href="http://real.hackerskill.net/2/css/style.css" type="text/css" media="screen, projection, tv" />
<link rel="stylesheet" href="http://real.hackerskill.net/2/css/style-print.css" type="text/css" media="print" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1><a href="#">ฝากรูปออนไลน์ ดอท แคม</a></h1>
		<h2>รับฝากรูป สามมิติทุกชนิด ไม่สามมิติไม่รับนะเออ</h2>
		<div id="header-arrow"></div>
		</div>

		<ul id="menu" class="cleaning-box">
			<li class="first"><a href="#" class="active">หน้าแรกว่ะเธอว์</a></li>
			<li><a href="#">รูปโดน</a></li>
		</ul>

<hr class="noscreen" />

	<div id="content-box">
		<div id="content-box-in">

			<a name="skip-menu"></a>
			<div class="content-box-left">
				<div class="content-box-left-in">
					<h3>Hello World</h3>
					<p class="text-content">สวัสดีเพื่อนๆ ทุกคน ตอนนี้เว็บ ฝากรูปออนไลน์ ดอท แคม ได้เปิดให้บริการแล้วนะเธอว์</p>
					<h3>บริการ</h3>
					<div class="gallery">
					', $content, '
					</div>
				</div>
			</div>

<hr class="noscreen" />

			<div class="content-box-right">
				<h4>News</h4>
				<div class="content-box-right-in">
					<dl>
						<dt>วันนี้ ตอนนี้ เวลานี้</dt>
							<dd class="heading">ข่าวเด็ด! สาวน้อยโดนหนุ่มใหญ่ข่มขืน</dd>
							<dd>ชมได้เลย รู้ว่าหื่นแล้วพวกเธอว์ทั้งหลาย <a href="xx.htm">คลิกที่นี้</a></dd>
					</dl>
				</div>
				<h4>ติดต่อเดี๊ยน</h4>
				<div class="content-box-right-in">
					<address>
					บริษัท: ที่นี้ที่ไหน<br>
					ถนน: จังหวัดอะไร<br>
					ตำบล: บ้านคุณลุง<br>
					โทร: หามิสทีนสิค่ะ~
					</address>
				</div>
			<div id="column-right-bottom">&nbsp;</div>
			</div>

			<div class="cleaner">&nbsp;</div>
		</div>
	</div>
<hr class="noscreen" />
	<div id="footer">
		<p class="left">&copy; <a class="b" href="#">เว็บอัพโหลดนะเค๊อะ</a>, 2008.</p>
		<p class="right">ไม่มีเครดิตผู้จัดทำหรอกฮะ เดี๊ยนหน้าด้าน - <a href="admin">จัดการระบบ</a></p>
	</div>
</div>
</body>
</html>
';

?>