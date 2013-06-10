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
					มีเวลาให้ <b>', $context['program']['time'], '</b> วินาที การหาเส้นทางลัดของหนูมาลี<br />
					หนูมาลีได้แผนที่การเดินทาง สำหรับไปเที่ยวในเมืองของเล่น ซึ่งเป็นลักษณะอย่างในรูป<br />
					<img src="http://resource.hackerskill.net/Prog/P6-1.jpg" title="แผนที่ของหนูมาลี"><br />
					<p><u><b>มีวิธีการอ่านดังนี้</b></u><br />
					- หนูมาลีต้องการเดินทางจากจุดแรก (วงกลมสีแดงด้านบนซ้าย) ไปยังจุดสุดท้าย (วงกลมสีแดงด้านล่างขวา)<br />
					- ตัวเลขในแต่ละจุดบนแผนที่ แสดงถึง "ค่าน้ำมัน" ที่หนูมาลีจะต้องเสีย เพื่อเดินทางไปยังจุดนั้นๆ เช่น<br />
					<img src="http://resource.hackerskill.net/Prog/P6-2.jpg" title="แผนที่ของหนูมาลี"><br />
					หนูมาลีจะเสียค่าน้ำมัน = 3, ถ้าเกิดเดินทางต่อ<br />
					<img src="http://resource.hackerskill.net/Prog/P6-3.jpg" title="แผนที่ของหนูมาลี"><br />
					ก็จะเสียค่าน้ำมัน = 3+1 = 4, ถ้าสมมุติเดินจนสุดปลายทาง<br />
					<img src="http://resource.hackerskill.net/Prog/P6-4.jpg" title="แผนที่ของหนูมาลี"><br />
					หนูมาลีก็จะเสียค่าน้ำมันทั้งหมด = 15 บาท
					</p>
					<p>
					หนูมาลีอยากให้เพื่อนๆ ช่วยหาเส้นทางที่ประหยัดค่าน้ำมันหนูมาลีมากที่สุด, ให้ตอบเป็นค่าน้ำมันที่เสียทั้งหมด<br />
					<b><u>ข้อควรจำ</u></b><br />
					- หนูมาลีไม่สามารถเดินเฉียงได้ <br />
					- จุด A - B หนูมาลีเดินจากจุด A เข้าจุด B อาจจะเสียค่าน้ำมัน ค่านึง แต่ถ้าเดินจากจุด B เข้าจุด A ก็อาจจะเสียอีกค่านึง เฉกเช่น การขึ้นเขา
					</p>
					<p>และนี้เป็นแผนที่ของหนูมาลี<br />ซึ่งจะมีแถวละ 30 จุด จำนวน 30 แถว เป็นสี่เหลี่ยมจัตตุรัส</p>
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