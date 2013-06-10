<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $boardurl;

	$mission = array(
		'level' => 3,
		'label' => 'basic3',
		'title' => 'Basic Hack LV.3',
	);

	$pwd = '';
	for($i=0; $i<strlen($context['hackme'][$mission['label']]['pass']); $i++)
		$pwd .= ord($context['hackme'][$mission['label']]['pass'][$i]).',';
	$pwd = substr($pwd, 0, -1);

	// Show the linktree
	echo '
			<div>', theme_linktree(), '</div>';

	if(!$context['hackme'][$mission['label']]['is_completed']) {
		echo '
		<script type="text/javascript">
			function check() {
				if(document.ansfrm.lv', $mission['level'], 'box.value != String.fromCharCode(', $pwd, ')) { alert("รหัสผ่านผิดครับ โปรดลองใหม่!"); return false; }
				else { return true; }
			}
		</script>';

		echo '<div style="margin-top: 0;">
		<div class="catbgf-l">
			<div class="catbgf-r">
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $boardurl . '/hackme" title="Hackme :)">', $mission['title'], '</a></div>
			</div>
		</div>
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" width="30%" valign="top">การบ้านวันนี้</td>
				<td class="windowbg" align="left">
					เย้ๆ เราสอบติดแล้วแหละ แต่... ทำไงดีอ่ะเราเรียนไม่รู้เรื่องเลย<br />
					การบ้านวันนี้ เขาให้หารหัสอีกแล้ว เราก็ทำแบบเดิมอ่า ทำไมไม่ถูก T_T<br />&nbsp;<br />ช่วยเราหน่อยนะ
					<hr>
					<form action="', $boardurl, '/', $mission['label'], '" name="ansfrm" method="post" onsubmit="return check();">
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
					ถูกต้องนะคร้าบบบ!! รหัสผ่านคือ: <b>', $context['hackme'][$mission['label']]['pass'], '</b><br />&nbsp;<br /><a href="', $boardurl . '/basic4" title="เล่นต่อ LV. 4" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อไป LV.4 เล้ย!
				</td>
			</tr>
		</table></div>
	</div>
	';
	}

}

?>