<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $boardurl;

	$mission = array(
		'level' => 2,
		'label' => 'real2',
		'title' => 'Realistic Mission LV.2',
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
				<td class="windowbg" width="30%" valign="top">คำขอร้องของคุณป้า!</td>
				<td class="windowbg" align="left">
					เรื่องก็มีอยู่ว่าหลังจากที่เรากลับมาถึงบ้าน เจ้าคุณป้าก็โทรฯ หาเราบอกว่าเดือดร้อนมาก<br>
					เพราะว่า มีคนถ่ายรูปลูกสาวแก โดนข่มขืนไปลงเว็บไซต์!<br>
					แค่โดนข่มขืนก็แย่พอแล้ว แสรด! นี้โดนแบล็กเมลล์ด้วยเหรอเนี้ย<br>
					งานนี้ไม่ช่วยไม่ได้แล้ว!
					<p>
					<a href="http://real.hackerskill.net/2" target="_BLANK" style="text-decoration: underline;">กดที่นี้</a> เพื่อไปเว็บเป้าหมาย
					</p>
					สิ่งที่ต้องการก็คือ ให้ลบหน้าเว็บที่แสดงรูปผู้เสียหายออกไป
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