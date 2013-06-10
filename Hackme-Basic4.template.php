<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $boardurl;

	$mission = array(
		'level' => 4,
		'label' => 'basic4',
		'title' => 'Basic Hack LV.4',
	);

	// Show the linktree
	echo '
			<div>', theme_linktree(), '</div>';

	if(!$context['hackme'][$mission['label']]['is_completed']) {
		echo '<div style="margin-top: 0;">
		<div class="catbgf-l">
			<div class="catbgf-r">
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $boardurl . '/hackme" title="Hackme :)">', $mission['title'], '</a></div>
			</div>
		</div>
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" width="30%" valign="top">การเก็บไฟล์ที่ดี ต้องเก็บให้มิดชิดจากผู้ใช้งาน</td>
				<td class="windowbg" align="left">
					"การเก็บไฟล์ที่ดี ต้องเก็บให้มิดชิดจากผู้ใช้งาน" จำได้ว่าอาจารย์ พูดว่ายังงี้น้า แต่ทำไมเราหาไม่เจอหว่า ?!
					<hr>
					<form action="', $boardurl, '/', $mission['label'], '" name="ansfrm" method="post">
						รหัสผ่าน: <input type="text" name="lv', $mission['level'], 'box" id="lv', $mission['level'], 'box" class="text"> <input type="submit" value="Enter!" class="button"><p><input type="hidden" name="file" value="', $boardurl, '/', $mission['label'], '/db">
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
					ถูกต้องนะคร้าบบบ!! รหัสผ่านคือ: <b>', $context['hackme'][$mission['label']]['pass'], '</b><br />&nbsp;<br /><a href="', $boardurl . '/basic5" title="เล่นต่อ LV. 5" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อไป LV.5 เล้ย!
				</td>
			</tr>
		</table></div>
	</div>
	';
	}

}

?>