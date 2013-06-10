<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $boardurl;

	$mission = array(
		'level' => 8,
		'label' => 'basic8',
		'title' => 'Basic Hack LV.8',
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
				<td class="windowbg" width="30%" valign="top">ปฏิบัติการ ถอดรหัสฐานข้อมูลห้องสมุดโรงเรียน ภาคแอบแฮก!</td>
				<td class="windowbg" align="left">
					วันนี้ อ.บรรณารักษ์กลับมาทำงานที่โรงเรียนแล้ว..<br />
					ข่าวลือเรื่องที่ นักเรียนเจาะระบบผู้ดูแลเพื่อทำให้ห้องสมุดออนไลน์ <br />
					มีชีวิตขึ้นมาอีกครั้งได้แพร่กระจายอย่างล่นหลาม (<a href="', $boardurl . '/basic7" style="text-decoration: underline;">หรือว่าคุณยังไม่ได้ทำภารกิจดังกล่าว</a>)<br />
					แต่ผลลัพท์ไม่ได้ดีขึ้นเลย เพราะ อ.บรรณารักษ์ได้เข้าไปแก้ไขรหัส และลงโทษนักเรียนไม่ให้ยืมหนังสือ<br />
					ฐานทำให้ <span style="color: red">แกเสียหน้าเพราะตั้งรหัสผ่านห่วย!!</span><br />
					แต่เรามีความจำเป็นจะต้องใช้ห้องสมุดออนไลน์นี้นา... เราอยากอ่านเรื่อง<b>ฐานข้อมูล</b><br />
					คราวนี้เราลองเข้าไปในส่วนผู้ดูแลระบบ พบว่ามีการเข้ารหัสแบบใหม่ ดังนี้
					<br />&nbsp;<br />ระบบรหัสผ่านของห้องสมุดโรงเรียนตั้งเงื่อนไขไว้ว่า<p>
					จงถอดรหัสข้อความ: <acronym title="ข้อความนี้ถูกเข้ารหัส" style="text-decoration: underline;font-weight: bold;">', $context['hackme'][$mission['label']]['encrypted_pass'], '</acronym><br />
					ข้อความจาก อ.บรรณารักษ์: <span style="color: red">แกะได้ให้มันรู้ไปสิ ฮ่าๆๆๆ ศิษย์จะเก่งกว่าครูได้ยังไง ?</span><br />
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
					ถูกต้องนะคร้าบบบ!! รหัสผ่านคือ: <b>', $context['hackme'][$mission['label']]['pass'], '</b><br />&nbsp;<br /><a href="', $boardurl . '/basic8" title="เล่นต่อ LV. 9" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อไป LV.9 เล้ย!
				</td>
			</tr>
		</table></div>
	</div>
	';
	}

}

?>