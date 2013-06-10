<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $boardurl;

	$mission = array(
		'level' => 1,
		'label' => 'real1',
		'title' => 'Realistic Mission LV.1',
	);

	// Show the linktree
	echo '
			<div>', theme_linktree(), '</div>';
	
	if(!$context['hackme'][$mission['label']]['is_completed'] && $context['sub_action'] == 'web') {
		ob_end_clean();
		$header = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>เว็บไซต์ แฉน้องดาว.คอม</title><style>body{margin: 0; padding: 0;  color: #333; font: 13px Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;background: #E2EBED;text-align: center;}#container{margin: 0 auto; width: 724px; position: relative; background: #fff;    padding: 0 10px 0 10px;text-align: left;height: 500px;}h1{height: 25px; overflow: hidden; margin: 0; }h2  {font-size: 12px; margin: 0;border-bottom: 1px solid #000;  }#footer {margin: 0 auto;color: #000;background: #FFF;border-top: 2px solid #000;position: relative;width: 724px;height: 48px;padding: 0 10px 0 10px;line-height: 26px;font-size: 11px;  }li { padding: 5px; }</style></head><body>';
		switch($context['sub_action_value']) {
			case '/cp/management/whatthehell/permission_admin.txt':
				die('แก้ไข:เพิ่ม:ลบ:จัดการบอร์ด:สวย:เริ่ด');
			break;
			case '/cp/management/whatthehell/password_admin.txt':
				die($context['hackme']['real1']['pass']);
			break;
			case '/cp/management/whatthehell/file_1.txt':
			case '/cp/management/whatthehell/file_index.txt':
				die('<ul>
						<li>เมื่อเช้าน้องดาวตื่นมาเกาหัว เราเห็นรังแกบนหัวน้องดาวด้วยค่ะ</li>
						<li>ตอนสิบโมงเราเห็นน้องดาวแอบแคะจมูกตอนกินข้าวค่ะ</li>
						<li>น้องดาวไม่ยอมล้างมือหลังทำธุระส่วนตัว</li>
						<li>วันนี้มีคนโทรมาจีบน้องดาวด้วยค่ะ คุยไป 30 กว่านาทีจึงรู้ว่าโทรผิด !?</li>
						<li>น้องดาวจะไปซื้อขนมนอกบ้าน แต่พอดีเห็นไอติมทนตะกละไม่ไหวเลยกินไอติมดีกว่า</li>

						<li>น้องดาวนอนละเมอเป็นเรื่องราวของแฮร์รี่พอตตี้</li>
						<li>และอื่นๆ อีกมากมาย ถ้าอยากรู้เรื่องเกี่ยวกับน้องดาว สมัครสมาชิกกับเราสิค่ะ โทรไป 191 บอกว่าขอติดต่อรายการ แฉน้องดาว.คอมนะค่ะ แล้วก็บอกที่อยู่ของคุณด้วย เราจะส่งคนไปรับโดยไว</li>
					</ul>');
				break;
				case '/cp/management/whatthehell/member_admin.txt':
					die('admin:admin@แฉน้องดาว.com:www.แฉน้องดาว.com:ชอบสีน้ำเงิน:รักประเทศไทย');
				break;
				case '/cp/management':
				case '/cp/management/':
					if(eregi('Googlebot', $_SERVER['HTTP_USER_AGENT'])) {
						$_POST['name'] = !empty($_POST['name']) ? $_POST['name'] : '';
						if($_POST['name'] != '' && $_POST['name'] != 'admin') {
							echo $header, '
						<div id="container">
							<h1>แฉน้องดาว.คอม</h1>
							<h2>บริการแฉน้องดาวทุกเหตุการณ์ไม่ว่าน้องดาวจะต้องการหรือไม่</h2>
							ขออภัย ระบบผิดพลาดชั่วคราว
							<p>
							Warning: file(permission_', htmlspecialchars($_POST['name']), '.txt): failed to open stream: No such file or directory in /var/www/html/hackme/real1/web/cp/management/whatthehell/permission_', htmlspecialchars($_POST['name']), '.txt on line 3
						</div>';
						} else
							echo $header, '
							<div id="container">
								<h1>แฉน้องดาว.คอม</h1>
								<h2>บริการแฉน้องดาวทุกเหตุการณ์ไม่ว่าน้องดาวจะต้องการหรือไม่</h2>
								<div style="text-align:center;">ยินดีต้อนรับสู่ระบบจัดการบทความ<p>
								ใส่ชื่อไฟล์ที่ต้องการแก้ไขได้เลย โดยไฟล์ได้ถูกเก็บซ่อนอย่างมิดชิด:<br />
								- ไฟล์หน้าเว็บ => file_index.txt<br />
								- บทความอื่นๆ => file_หมายเลขบทความ.txt<br />
								- แก้ไขข้อมูลส่วนตัว => member_ชื่อของคุณ.txt<br />
								- แก้ไขรหัสผ่าน => password_ชื่อของคุณ.txt<br />
								<form method="post" action="', $boardurl . '/real1/web/cp/management">
								แก้ไขไฟล์: <input type="text" name="file"> <p>
								*กรอกแก้ไขโดยด้วยนะคะ เดี้ยนอยากรู้ว่า admin คนไหนจัดการอะไร<br />
								แก้ไขโดย: <input type="text" name="name"> <input type="submit" value="แก้ไข">
								</p>
								</form>
								</p>
								</div>
							</div>';
					} else
						echo $header, '<div id="container">
				<h1>แฉน้องดาว.คอม</h1>
				<h2>บริการแฉน้องดาวทุกเหตุการณ์ไม่ว่าน้องดาวจะต้องการหรือไม่</h2>
				หาอะไรจ๊ะ
			</div>';
				break;
				default: 
					echo $header, '<div id="container">
				<h1>แฉน้องดาว.คอม</h1>
				<h2>บริการแฉน้องดาวทุกเหตุการณ์ไม่ว่าน้องดาวจะต้องการหรือไม่</h2>
				<ul>
					<li>เมื่อเช้าน้องดาวตื่นมาเกาหัว เราเห็นรังแกบนหัวน้องดาวด้วยค่ะ</li>
					<li>ตอนสิบโมงเราเห็นน้องดาวแอบแคะจมูกตอนกินข้าวค่ะ</li>
					<li>น้องดาวไม่ยอมล้างมือหลังทำธุระส่วนตัว</li>
					<li>วันนี้มีคนโทรมาจีบน้องดาวด้วยค่ะ คุยไป 30 กว่านาทีจึงรู้ว่าโทรผิด !?</li>
					<li>น้องดาวจะไปซื้อขนมนอกบ้าน แต่พอดีเห็นไอติมทนตะกละไม่ไหวเลยกินไอติมดีกว่า</li>
					<li>น้องดาวนอนละเมอเป็นเรื่องราวของแฮร์รี่พอตตี้</li>
					<li>และอื่นๆ อีกมากมาย ถ้าอยากรู้เรื่องเกี่ยวกับน้องดาว สมัครสมาชิกกับเราสิค่ะ โทรไป 191 บอกว่าขอติดต่อรายการ แฉน้องดาว.คอมนะค่ะ แล้วก็บอกที่อยู่ของคุณด้วย เราจะส่งคนไปรับโดยไว</li>
				</ul>
			</div>

			<div id="footer">
				เว็บเรามีแต่แฉอย่างเดียว ไม่ว่าเรื่องนั้นจะจริงหรือไม่ หากไปกระทบเรื่องราวของใครเราจะไม่รับผิดชอบเด็ดขาด เพราะเรื่องราวของคุณดันมาตรงกับเราเอง เดี๊ยนไม่ผิด~~~
			</div>';
					break;
			}


		exit;
	} elseif(!$context['hackme'][$mission['label']]['is_completed'] && $context['sub_action'] != 'web') {
		echo '<div style="margin-top: 0;">
		<div class="catbgf-l">
			<div class="catbgf-r">
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $boardurl . '/hackme" title="Hackme :)">', $mission['title'], '</a></div>
			</div>
		</div>
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" width="30%" valign="top">ปฏิบัติการช่วยน้องดาว</td>
				<td class="windowbg" align="left">
					"น้องดาวโดนใส่ร้าย" ผู้เสียหายรายงาน <br />
					"เมื่อวานนี้ ตอนที่เดี๊ยน เอ๊ย น้องดาวกับพี่เดือนกำลังซักผ้า..<br />
					ก็มีโทรศัพท์กริ๊งๆ เข้ามาจากเพื่อนๆ ว่าน้องดาวโดนว่าร้ายในเว็บแห่งนึง"<br />
					"น้องดาวเป็นไฮโซ น้องดาวรับไม่ด๊ายยยย~~"<p>
					น้องดาวก็เลยไปจ้างนักสืบมาสืบว่า ใครกันที่เป็นคนทำเว็บนี้ แล้วมีข้อมูลอะไรบ้าง</p><p>
					อีตานักสืบก็บอกแค่ว่าไม่รู้ที่มาที่ไป แล้วก็เอาแต่พร่ำว่า<br />
					"ผมถามพี่กรูแล้ว (<b>Google</b>) พี่กรูก็ให้ข้อมูลมาเป็นอย่างนี้.."</p>
					<img src="', $boardurl . '/Themes/MidNight/images/Real1-oc9is.jpg" alt="Real1"><p>

					<b>"แต่ทำไมผมเข้าไปตามพี่กรู(Google) ไม่ได้ก็ไม่รู้"</b></p>
					ไร้ประโยชน์จริงๆ อีตานักสืบหลอกเด็ก<br />
					ว่าแต่ช่วยหารหัสผ่านของ Admin เว็บนั้นให้น้องดาวได้ไหม<p>
						<a href="', $boardurl . '/real1/web/" target="_BLANK" style="text-decoration: underline;">กดที่นี้</a> เพื่อไปเว็บไซต์เป้าหมาย
						</p>
					<hr>
					<form action="', $boardurl, '/', $mission['label'], '" name="ansfrm" method="post">
						รหัสผ่าน: <input type="text" name="lvr', $mission['level'], 'box" id="lv', $mission['level'], 'box" class="text"> <input type="submit" value="Enter!" class="button"><p>
					</form>
				</td>
			</tr>
		</table></div>
	</div>';
	} else {

		echo '<div style="margin-top: 0;">
		<div class="catbgf-l">
			<div class="catbgf-r">
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $boardurl . '/hackme" title="Hackme :)">', $mission['title'], '</a></div>
			</div>
		</div>
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" align="center">
					ถูกต้องนะคร้าบบบ!! รหัสผ่านคือ: <b>', $context['hackme'][$mission['label']]['pass'], '</b><br />&nbsp;<br /><a href="', $boardurl . '/hackme" title="เลือกภารกิจใหม่!" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อไปเลือกภารกิจ!
				</td>
			</tr>
		</table></div>
	</div>
	';
	}

}

?>