<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $boardurl;

	$mission = array(
		'level' => '3_5',
		'label' => 'real3.5',
		'title' => 'Realistic Mission LV.3.5',
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
					จากผลงานการ <a href="', $boardurl . '/real3" title="Realistic Mission LV.3">หารหัสเป้าหมาย</a> จากภารกิจสมจริงที่ 3<br>
					นักสืบพันดริ๊ฟได้แจ้งมาว่า ข้อมูลที่เคยได้รับนั้น.. ไม่เพียงพอ<br>
					เพราะเจ้าตัวรู้ทัน และได้เปลี่ยนรหัสผ่านเรียบร้อยแล้ว .. ก่อนที่นักสือพันดริ๊ฟจะได้ทันเก็บข้อมูล<br>
					แค่นั้นยังไม่พอ เจ้าตัวยังท้าว่า ถ้าแน่จริงก็แฮกเว็บตูให้ได้สิ ฮ่าๆๆ
					<p>
					นักสืบพันดริ๊ฟเลยมาขอร้องเราอีก ในฐานะที่เคยแฮกเข้าไปได้<br>
					อยากให้เราช่วยอัพไฟล์อะไรก็ได้ ที่เป็นการยืนยันว่า ตูแฮกเข้ามาได้แล้วนะ...<br>
					หรือที่เรียกว่า <b>Deface</b> นั่นเอง
					</p><p>
					<a href="http://real.hackerskill.net/3" target="_BLANK" style="text-decoration: underline;">กดที่นี้</a> เพื่อไปเว็บเป้าหมาย
					</p>
					สิ่งที่ต้องการก็คือ ให้อัพไฟล์อะไรก็ได้ เป็นการยืนยันว่าแฮกได้แล้ว
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