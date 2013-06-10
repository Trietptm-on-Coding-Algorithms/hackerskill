<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $boardurl;

	$mission = array(
		'level' => 5,
		'label' => 'basic5',
		'title' => 'Basic Hack LV.5',
	);

	// Show the linktree
	echo '
			<div>', theme_linktree(), '</div>';

	if($context['sub_action'] == 'vote' && $context['sub_action_value'] < 76312) {
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
					ยัง ยังโหวตไม่พอออ<br />&nbsp;<br />พี่บวมยังไม่ได้เป็นเดอะสตอร์ เล้ยยยย<br />กลับไปโหวตไป๊ (<a href="', $boardurl . '/basic5" title="กลับไปโหวต" style="text-decoration: underline;">คลิกที่นี้</a>)
				</td>
			</tr>
		</table></div>
	</div>
	';
	} elseif($context['sub_action'] == 'vote' && $context['sub_action_value'] >= 76312) {
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
					โอ๊ววว พี่บวมได้เป็นเดอะสตอร์แล้ววว<br />ขอบใจมากลูกน้อง: เอ้า เอารหัสผ่านไปเลย<br />&nbsp;<br />รหัสผ่านคือ: <b>', $context['hackme'][$mission['label']]['pass'], '</b>
					<br />กลับไปกรอกซะ (<a href="', $boardurl . '/basic5" title="กลับไปกรอกรหัส" style="text-decoration: underline;">คลิกที่นี้</a>) แล้วอย่าบอกใครเชียวนะ ว่าโกงคะแนนให้พี่บวมน่ะ
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
				<td class="windowbg" width="30%" valign="top">มีคนมาจ้างวานให้ช่วยโหวตคะแนน..</td>
				<td class="windowbg" align="left">
					ขณะนี้รายการ <b>"เดอะ สตอร์"</b> ค้นคว้าบ้าบิ่นถึงรอบสุดท้ายแล้ว และเปิดให้โหวตคะแนนของ <b>"พี่บวม"</b><br />ซึ่งรหัสผ่าน LV.5 นั้น โปรดิวเซอร์บอกว่าเราต้องโหวตคะแนนให้พี่บวมเป็น "เดอะสตอร์" ให้ได้...
					<br />&nbsp;<br />คะแนนที่ต้องการ: <b>เจ็ดหมื่นหกพันสามร้อยยี่สิบสอง</b> คะแนน
					<br />โหวตได้ทีละ: <b>สิบ</b> คะแนน
					<br />&nbsp;<br /><a href="', $boardurl . '/basic5/vote/10" title="โหวตคะแนนให้พี่บวม" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อโหวต
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
					ถูกต้องนะคร้าบบบ!! รหัสผ่านคือ: <b>', $context['hackme'][$mission['label']]['pass'], '</b><br />&nbsp;<br /><a href="', $boardurl . '/basic6" title="เล่นต่อ LV. 6" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อไป LV.6 เล้ย!
				</td>
			</tr>
		</table></div>
	</div>
	';
	}

}

?>