<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $user_info, $boardurl;

	$mission = array(
		'level' => 10,
		'label' => 'basic10',
		'title' => 'Basic Hack LV.10',
	);

	// Show the linktree
	echo '
			<div>', theme_linktree(), '</div>';

	if(!$context['hackme'][$mission['label']]['is_completed'] && (empty($context['sub_action_value1']) || empty($context['sub_action_value1']))) {
		echo '<div style="margin-top: 0;">
		<div class="catbgf-l">
			<div class="catbgf-r">
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $boardurl . '/hackme" title="Hackme :)">', $mission['title'], '</a></div>
			</div>
		</div>
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" width="30%" valign="top">แอบโหวตมิสไทยรั่วยูนิเวอร์ส</td>
				<td class="windowbg" align="left">
					คือว่าที่ โรงเรียนเรา มีจัดประกวด<span style="text-decoration: underline;">มิสไทยรั่ว</span> แล้วให้มีการโหวตตามชั้นต่างๆ ผ่านอินเตอร์เน็ต<br />
					แต่เราได้ข่าวมาว่า เด็กห้อง C ใช้วิธีการโกงโหวตโดยให้เพื่อนๆ ช่วยกันโหวตเพื่อนตัวเอง ,, ไม่มีความจริงใจเลยเนอะ<br />
					เราเลยจะทำบ้าง (อ้าว ยังไง ??)<br />
					แต่พอดีว่าการจะโหวตได้นั่น จะต้อง Login ก่อนโหวต และจะปิดโหวตวันนี้แล้ว<br />
					แถมนี้ก็ดึกแล้ว เราก็เลยแอบเอา user เพื่อนมาลองโหวต แต่ทำยังไงก็เข้าระบบไม่ได้<br />
					ทำยังไงดี แบบนี้แพ้ห้อง C แน่เลย T_T
					<p>user ของเรา: ', $user_info['name'], '<br />Pass ของเรา: ', $user_info['name'], '</p>
					<p>user ของเพื่อน: <span style="color: red;">someone</span><br />Pass ของเพื่อน: <span style="color: red;">kidmaiook</span></p>
					<p>ฟอร์มให้ล็อกอิน<br /><span style="color: red;">จากอาจารย์: ห้ามปั้มโหวตเด็ดขาดนะจ๊ะ</span>
					<form action="', $boardurl, '/', $mission['label'], '" name="cncrypt" method="post">กรอกชื่อผู้ใช้: <input type="text" name="u" value="', $user_info['name'], '"><br />กรอกรหัสผ่าน: <input type="text" name="p" onkeydown="checkInput();"><input type="hidden" name="sid" value="', session_id(), '"><br /><input type="submit" value="เข้าระบบ"></form>
					</p>
					<hr>
					<form action="', $boardurl, '/', $mission['label'], '" name="ansfrm" method="post">
						รหัสผ่าน: <input type="text" name="lv', $mission['level'], 'box" id="lv', $mission['level'], 'box" class="text"> <input type="submit" value="Enter!" class="button"><p>
					</form>
				</td>
			</tr>
		</table></div>
	</div>';
	} elseif(!$context['hackme'][$mission['label']]['is_completed'] && $context['sub_action_value1'] == $user_info['name'] && $context['sub_action_value2'] == $user_info['name']) {
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
					ไม่อนุญาติให้โหวตซ้ำจ่ะ<br />รอผลโหวตอีกที พรุ่งนี้นะจ๊ะ <a href="', $boardurl . '/basic10" style="text-decoration: underline;" title="กลับไปหน้าที่แล้ว">คลิกที่นี้</a> เพื่อกลับไปหน้าที่แล้ว
				</td>
			</tr>
		</table></div>
	</div>
	';
	} elseif(!$context['hackme'][$mission['label']]['is_completed'] && $context['hackme']['basic10']['is_dup']) {
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
					ไม่อนุญาติให้เข้าระบบ<br /><span style="color: red;">จากอาจารย์: อ่านกติกาบ้างรึเปล่าเนี้ย เดี๋ยวจับหักคะแนนให้เหี้ยนเลย~</span>
					<br />เอ้า! <a href="', $boardurl . '/basic10" style="text-decoration: underline;" title="กลับไปหน้าที่แล้ว">คลิกที่นี้</a> เพื่อกลับไปหน้าที่แล้ว
				</td>
			</tr>
		</table></div>
	</div>
	';
	} elseif(!$context['hackme'][$mission['label']]['is_completed'] && !$context['hackme']['basic10']['is_dup']) {
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
					เข้ามาโหวตๆๆ เลยจ้า แค่เอารหัสโหวตนี้ (<b>', $context['hackme'][$mission['label']]['pass'], '</b>) ไปกรอกในหน้า <a href="', $boardurl . '/basic10" style="text-decoration: underline;" title="กลับไปโหวต!">Basic10</a> ก็พอแล้ว<br />
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
					ถูกต้องนะคร้าบบบ!! รหัสผ่านคือ: <b>', $context['hackme'][$mission['label']]['pass'], '</b><br />&nbsp;<br /><a href="', $boardurl . '/hackme" title="เลือกภารกิจ Hackme :)" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อไปเลือกภารกิจ
				</td>
			</tr>
		</table></div>
	</div>
	';
	}

}

?>