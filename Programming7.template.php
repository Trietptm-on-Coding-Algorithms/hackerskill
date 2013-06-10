<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt;

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
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $scripturl, $context['program']['href_title'], '" title="Hackme :)">', $context['program']['title'], '</a></div>
			</div>
		</div>
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" align="center">
					ถูกต้องนะคร้าบบบ!!<br />&nbsp;<br /><a href="', $scripturl, 'hackme" title="เลือกภารกิจใหม่!" style="text-decoration: underline;">คลิกที่นี้</a> เพื่อไปเลือกภารกิจ!
				</td>
			</tr>
		</table></div>
	</div>
	';
	else
		echo '<div style="margin-top: 0;">
		<div class="catbgf-l">
			<div class="catbgf-r">
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $scripturl, $context['program']['href_title'], '" title="Hackme :)">', $context['program']['title'], '</a></div>
			</div>
		</div>
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" width="30%" valign="top">', $context['program']['title'], '</td>
				<td class="windowbg" align="left">
					มีเวลาให้ <b>', $context['program']['time'], '</b> วินาที สำหรับการหาเส้นทางที่ดีที่สุดของหนูมาลี<br />
					เมื่อคริสต์มาสที่ผ่านมา หนูมาลีได้ต้นคริสต์มาสมาต้นหนึ่ง ซึ่งหนูมาลีอยากได้ดาวบนยอดต้นมาก<br />
					เพราะว่าหนูมาลีจะเป็น "The Star~" อย่าลืมโหวตหนูมาลีนะค่ะ! [- -"]<p>
					<img src="http://resource.hackerskill.net/Prog/P7-1.gif" height="400" width="300"></p>
					ถ้าดูจากภาพจะพบว่า การจะเดินเข้าไปในแต่ละช่อง หนูมาลีจะต้องจ่ายค่าผ่านทาง<br />
					ซึ่งหนูมาลีอยากให้เพื่อนๆ ช่วยหาเส้นทางที่หนูมาลีต้องเสียเงินน้อยที่สุด เพื่อขึ้นไปหยิบสัญลักษณ์ของ "The Star~" !<p>
					โดยที่ การอ่านกิ่งก้านทางเดินบนต้นไม้อ่านได้ดังนี้
					[5[2,6]] - จะหมายถึง <br />
					<img src="http://resource.hackerskill.net/Prog/P7-2.gif"><br />
					และถ้าเป็น [1[5[2,6],3[1,4]]] จะได้ดังรูป<br />
					<img src="http://resource.hackerskill.net/Prog/P7-3.gif">
					</p>
					<p>หนูมาลีจะต้องเดินจาก "โคนต้น" เสมอ เพื่อให้ไปถึง "ดาวดวงนั้น"</p>
					<p>และนี้เป็นแผนที่กิ่งก้าน สาขาการเดินบนต้นไม้</p>
					<textarea style="width: 300px;height: 150px;" onclick="this.select();">', $context['program']['text'], '</textarea><br />
					<p>
					*<u>เมื่อเวลาหมด</u> จะไม่สามารถเช็คคำตอบกับโจทย์ชุดนี้ได้ เวลาจะนับที่เซิฟเวอเสมอ รีเซ็ตคำถามได้โดยการรีเฟรชเพชนี้ <b>(กด F5)</b>
					</p>
				</td>
			</tr>
			<form action="', $scripturl, $context['program']['href_title'], '" method="post">
			<tr>
				<td class="windowbg" align="center">เหลือเวลา <span id="timer">', $context['program']['time'], '</span> วินาที</td>
				<td class="windowbg" align="left">
						<p>คำตอบ:<br /><input type="text" name="prog', $context['program']['id'], 'box" id="lv', $context['program']['id'], 'box" class="text"></p>
				</td>
			</tr>
			<tr>
				<td class="windowbg" align="center">ยืนยันคำตอบ<br />โดยการกรอกตัวเลขที่เห็น</td>
				<td class="windowbg" align="left">
					<img src="', $scripturl, 'captcha" border="0">
					<p><input type="text" name="captcha" class="text"> <input type="submit" value="Enter!" class="button"></p>
				</td>
			</tr>
			</form>
		</table></div>
	';
}

?>