<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $user_info, $boardurl;

	$mission = array(
		'level' => 9,
		'label' => 'basic9',
		'title' => 'Basic Hack LV.9',
	);

	// Show the linktree
	echo '
			<div>', theme_linktree(), '</div>';

	if(!$context['hackme'][$mission['label']]['is_completed'] && empty($context['sub_action_value'])) {
		echo '<div style="margin-top: 0;">
		<div class="catbgf-l">
			<div class="catbgf-r">
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $boardurl . '/hackme" title="Hackme :)">', $mission['title'], '</a></div>
			</div>
		</div>
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" width="30%" valign="top">การบ้านวิชา ฐานข้อมูล!</td>
				<td class="windowbg" align="left">
					วันนี้เรียนเรื่อง ฐานข้อมูลและความปลอดภัย<br />
					ยากมาก.. บอกตรงๆ เลยนะ คือว่าเราหลับน่ะ (อ้าว)<br />
					อาจารย์บอกว่าให้ไปทำรายงานมา แล้วก็อัพขึ้นเว็บไซต์ส่งด้วย<br />
					ทีนี้พอเราจะเข้าไปส่งเท่านั้น มันก็ขึ้นหน้าให้ล็อกอินอ่ะ เรากรอก user ของเรา กับรหัสผ่าน นักศึกษาก็เข้าไม่ได้<br />
					ทำไงดีเนี้ย T_T<p>
					<form action="', $boardurl, '/', $mission['label'], '" name="cncrypt" method="post">กรอกชื่อผู้ใช้: <input type="text" name="u" value="', $user_info['name'], '" disabled><br />กรอกรหัสผ่าน: <input type="text" name="p" onkeydown="checkInput();"><input type="hidden" name="sid" value="', session_id(), '"><br /><input type="submit" value="เข้าระบบ"></form>
					</p>
					<hr>
					<form action="', $boardurl, '/', $mission['label'], '" name="ansfrm" method="post">
						รหัสผ่าน: <input type="text" name="lv', $mission['level'], 'box" id="lv', $mission['level'], 'box" class="text"> <input type="submit" value="Enter!" class="button"><p>
					</form>
				</td>
			</tr>
		</table></div>
	</div>';
	} elseif(!$context['hackme'][$mission['label']]['is_completed'] && $context['hackme'][$mission['label']]['input_error']) {
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
					Warning: mysql_fetch_array(): supplied argument is not a valid MySQL result resource in /home/hackerskill/basic9/index.php on line 543<br />
					SQL Error: WHERE user=\'', $user_info['name'], '\' AND ', stripslashes($context['hackme'][$mission['label']]['input']), '

				</td>
			</tr>
		</table></div>
	</div>
	';
	} elseif(!$context['hackme'][$mission['label']]['is_completed'] && !$context['hackme'][$mission['label']]['input_error']) {
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
					รหัสผ่านผิดว่ะครับ<br />
					<span style="color: red;">จากอาจารย์: ตั้งใจเรียนกันรึเปล่าเนี้ย</span><br /><a href="', $boardurl . '/basic9" style="text-decoration: underline;" title="กลับไปลองใหม่">คลิกที่นี้</a> ไปลองใหม่อีกครั้งไป๊!
				</td>
			</tr>
		</table></div>
	</div>
	';
	} elseif($context['hackme'][$mission['label']]['is_completed'] && $context['hackme'][$mission['label']]['is_completed2']) {
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
					อาจารย์: . . . . . . ผ่านก็ดีแล้ว คราวหน้าอย่าหลับแล้วกัน<br />
					นี้คือรหัสผ่านของเธอ <b>', $context['hackme'][$mission['label']]['pass'], '</b> กลับไปกรอก <a href="', $boardurl . '/basic9" style="text-decoration: underline;" title="กลับไปลองใหม่">คลิกที่นี้</a> ไป๊ๆๆ ไวๆ เลย
				</td>
			</tr>
		</table></div>
	</div>
	';
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
					ถูกต้องนะคร้าบบบ!! รหัสผ่านคือ: <b>', $context['hackme'][$mission['label']]['pass'], '</b><br />&nbsp;<br /><a href="', $boardurl . '/basic10" title="เล่นต่อ LV. 10" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อไป LV.10 เล้ย!
				</td>
			</tr>
		</table></div>
	</div>
	';
	}

}

?>