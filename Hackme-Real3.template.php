<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $boardurl;

	$mission = array(
		'level' => 3,
		'label' => 'real3',
		'title' => 'Realistic Mission LV.3',
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
				<td class="windowbg" width="30%" valign="top">การทำงานกับนักสืบพันดริ๊ฟ!</td>
				<td class="windowbg" align="left">
					จากผลงานการแฉ <b>นาธวาน โอมานอย</b> ทำให้นักสืบพันดริ๊ฟมีชื่อเสียงกระฉ่อน<br>
					ซึ่งเราเองก็สนใจนักสืบพันดริ๊ฟเช่นกัน ทำไมเขาช่างเก่งเสียนี้กระไร !?
					<p>แต่ฟ้าก็เล่นตลก เมื่อวันนึงนักสืบพันดริ๊ฟได้ขอร้องให้เรา เข้าไปเจาะระบบฐานข้อมูลชีวิตประจำวันของ ผู้ต้องสงสัยรายหนึ่ง<br>
					</p>
					<p>
					ภารกิจนี้ ขอให้พวกเธอว์ เอ๊ย ขอให้พวกเราไปค้นหารหัสของ ผู้ใช้ที่ชื่อ <span style="color: red">YaTumKoi</span>
					<a href="http://real.hackerskill.net/3" target="_BLANK" style="text-decoration: underline;">กดที่นี้</a> เพื่อไปเว็บเป้าหมาย
					</p>
					สิ่งที่ต้องการก็คือ ให้เอารหัสที่ได้ มากรอก
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