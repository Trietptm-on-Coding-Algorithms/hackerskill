<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $boardurl;

	$mission = array(
		'level' => 6,
		'label' => 'basic6',
		'title' => 'Basic Hack LV.6',
	);

	// Show the linktree
	echo '
			<div>', theme_linktree(), '</div>';

	if($context['sub_action_value'] > 0 && $context['sub_action_value'] < 76312) {
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
					<b>กรรมการ:</b> บอกแล้ว! ไม่มีใครทำได้หรอก<br />
					<b>กรรมการ:</b> ก้มหน้าก้มตาโหวตไปนะ๊ (<a href="', $boardurl, '/', $mission['label'], '" title="กลับไปโหวต" style="text-decoration: underline;">คลิกที่นี้</a>)
				</td>
			</tr>
		</table></div>
	</div>
	';
	} elseif($context['sub_action_value'] >= 76312) {
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
					<b>กรรมการ:</b> ทำได้ไงเนี้ย<br />ก็ได้! เราจะคืนคะแนนให้นายบวม..<br />&nbsp;<br />รหัสผ่านคือ: <b>', $context['hackme'][$mission['label']]['pass'], '</b>
					<br />กรอกซะแล้วอย่ามาโหวตที่นี้อีกนะ (<a href="', $boardurl, '/', $mission['label'], '" title="กลับไปกรอกรหัส" style="text-decoration: underline;">คลิกที่นี้</a>)
				</td>
			</tr>
		</table></div>
	</div>
	';
	} elseif(!$context['hackme'][$mission['label']]['is_completed']) {
		echo '<div style="margin-top: 0;">
		<div class="catbgf-l">
			<div class="catbgf-r">
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $boardurl . '/hackme" title="Hackme :)">', $mission['title'], '</a></div>
			</div>
		</div>
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" width="30%" valign="top">พี่บวมโดนจับได้! เราไม่ได้พูดอะไรเลยน้า~</td>
				<td class="windowbg" align="left">
					เนื่องจากการโหวตคราวที่แล้ว กรรมการผู้จัดการพบว่ามีการโกงกันเกิดขึ้น ทำให้พี่บวมโดนลดคะแนนการแข่งรอบนั้นมาเยอะเลย<br />
					กรรมการบอกว่าถ้าเป็นคะแนนโหวตจริง เรตคะแนนก็ต้องได้เกือบๆ เท่าเดิมล่ะ ถ้าคะแนนโหวตรอบนี้พี่บวมได้ใกล้เคียงหรือมากกว่าก็จะคืนคะแนนให้<br />
					แต่กรรมการบอกว่ามั่นใจในระบบใหม่นี้มาก.. ใครจะโกงโหวตได้บ้างหนอ ..
					<br />&nbsp;<br />คะแนนที่ต้องการ: <strike>เจ็ดหมื่นหกพันสามร้อยยี่สิบสอง</strike> <b>เจ็ดหมื่นหกพันสามร้อยยี่สิบเอ็ด</b> คะแนน (กรรมการลดให้คะแนนนึง)
					<br />โหวตได้ทีละ: <b>สิบ</b> คะแนน
					<br />&nbsp;<br /><form name="v" id="v" method="post" action="', $boardurl, '/', $mission['label'], '"><input type="submit" value="กดปุ่มนี้" class="button"> เพื่อโหวต<input type="hidden" name="score" value="10"><input type="hidden" name="sid" value="', session_id(), '"></form>
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
					ถูกต้องนะคร้าบบบ!! รหัสผ่านคือ: <b>', $context['hackme'][$mission['label']]['pass'], '</b><br />&nbsp;<br /><a href="', $boardurl . '/basic7" title="เล่นต่อ LV. 7" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อไป LV.7 เล้ย!
				</td>
			</tr>
		</table></div>
	</div>
	';
	}

}

?>