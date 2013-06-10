<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $boardurl, $txt;

	// Show the linktree
	echo '<script type="text/javascript">var t=', $context['program']['time'], ';
	$(function() { setInterval(update, 1000); });
	function update() { if(t >= 0) {$("#timer").html(t--);} }
	
	</script>
			<div>', theme_linktree(), '</div>';
	
	if($context['program']['isCompleted']) 
		echo '<div style="margin-top: 0;">
		<div class="catbgf-l">
			<div class="catbgf-r">
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $boardurl, '/', $context['program']['href_title'], '" title="Hackme :)">', $context['program']['title'], '</a></div>
			</div>
		</div>
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" align="center">
					ถูกต้องนะคร้าบบบ!!<br />&nbsp;<br /><a href="', $boardurl, '/hackme" title="เลือกภารกิจใหม่!" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อไปเลือกภารกิจ!
				</td>
			</tr>
		</table></div>
	</div>
	';
	else
		echo '<div style="margin-top: 0;">
		<div class="catbgf-l">
			<div class="catbgf-r">
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $boardurl, '/', $context['program']['href_title'], '" title="Hackme :)">', $context['program']['title'], '</a></div>
			</div>
		</div>
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" width="30%" valign="top">', $context['program']['title'], '</td>
				<td class="windowbg" align="left">
					มีเวลาให้ <b>', $context['program']['time'], '</b> วินาที สำหรับคำนวนผลรวมของ <a href="http://go.hackerskill.net/http://th.wikipedia.org/wiki/%E0%B9%80%E0%B8%A5%E0%B8%82%E0%B9%82%E0%B8%A3%E0%B8%A1%E0%B8%B1%E0%B8%99" rel="nofollow" target="_BLANK">เลขโรมัน</a> ต่อไปนี้<p>
					โดยที่!<br />
					ให้หาผลรวมทั้งหมดของเลขโรมัน และตอบเป็นเลขอาราบิค</p>
					<textarea style="width: 300px;height: 150px;" onclick="this.select();">', $context['program']['text'], '</textarea><br />
					<p>
					*<u>เมื่อเวลาหมด</u> จะไม่สามารถเช็คคำตอบกับโจทย์ชุดนี้ได้ เวลาจะนับที่เซิฟเวอเสมอ รีเซ็ตคำถามได้โดยการรีเฟรชเพชนี้ <b>(กด F5)</b>
					</p>
				</td>
			</tr>
			<form action="', $boardurl, '/', $context['program']['href_title'], '" method="post">
			<tr>
				<td class="windowbg" align="center">เหลือเวลา <span id="timer">', $context['program']['time'], '</span> วินาที</td>
				<td class="windowbg" align="left">
						<p>คำตอบ:<br /><input type="text" name="prog', $context['program']['id'], 'box" id="lv', $context['program']['id'], 'box" class="text"></p>
				</td>
			</tr>
			<tr>
				<td class="windowbg" align="center">ยืนยันคำตอบ<br />โดยการกรอกตัวเลขที่เห็น</td>
				<td class="windowbg" align="left">
					<img src="', $boardurl, '/captcha" border="0">
					<p><input type="text" name="captcha" class="text"> <input type="submit" value="Enter!" class="button"></p>
				</td>
			</tr>
			</form>
		</table></div>
	';
}

?>