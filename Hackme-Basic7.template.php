<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $boardurl;

	$mission = array(
		'level' => 7,
		'label' => 'basic7',
		'title' => 'Basic Hack LV.7',
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
				<td class="windowbg" width="30%" valign="top">ปฏิบัติการ ถอดรหัสฐานข้อมูลห้องสมุดโรงเรียน!</td>
				<td class="windowbg" align="left">
					เกิดเหตุแล้ว! อาจารย์บอกว่าบรรณารักษ์ห้องสมุดโรงเรียนเกิดป่วย มาทำงานไม่ได้ 7 วัน!!<br />
					ซ้ำร้าย! คุณบรรณารักษ์ยังไม่ติดต่อมาเลย แล้วห้องสมุดออนไลน์ก็ต้องปิดตัวลงกะทันหัน T_T ทำยังไงดี<br />
					ทั้งโรงเรียนใช้งานห้องสมุดไม่ได้เลยเนี้ย เพราะไม่มีคนดูแล แล้วเราจะค้นหาข้อมูลได้ยังไงหนอ<br />
					หรือว่าเราจะต้องเป็นผู้ดูแลระบบจำเป็นนะนี้!
					<br />&nbsp;<br />ระบบรหัสผ่านของห้องสมุดโรงเรียนตั้งเงื่อนไขไว้ว่า<p>
					จงถอดรหัสข้อความ: <acronym title="ข้อความนี้ถูกเข้ารหัส" style="text-decoration: underline;font-weight: bold;">', $context['hackme'][$mission['label']]['encrypted_pass'], '</acronym><br />
					<form action="', $boardurl, '/', $mission['label'], '" name="cncrypt" method="post">โดยที่มีระบบเข้ารหัสไว้ให้ทดสอบดังนี้ครับ: <input type="text" name="p"><input type="hidden" name="sid" value="', session_id(), '"> <input type="submit" value="ทดลองเข้ารหัส!"></form>
					', ($context['hackme'][$mission['label']]['test_pass'] != '') ? '<br />ข้อความหลังเข้ารหัส: <acronym title="ข้อความนี้ถูกเข้ารหัส" style="text-decoration: underline;font-weight: bold;">'. $context['hackme'][$mission['label']]['test_pass'].'</acronym>' : '', '
					</p>
					<hr>
					<form action="', $boardurl, '/', $mission['label'], '" name="ansfrm" method="post">
						รหัสผ่าน: <input type="text" name="lv', $mission['level'], 'box" id="lv', $mission['level'], 'box" class="text"> <input type="submit" value="Enter!" class="button"><p>
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
					ถูกต้องนะคร้าบบบ!! รหัสผ่านคือ: <b>', $context['hackme'][$mission['label']]['pass'], '</b><br />&nbsp;<br /><a href="', $boardurl . '/basic8" title="เล่นต่อ LV. 8" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อไป LV.8 เล้ย!
				</td>
			</tr>
		</table></div>
	</div>
	';
	}

}

?>