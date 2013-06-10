<?php
if (!defined('SMF'))
	die('Hacking attempt...');

function template_main() {
	global $context, $settings, $scripturl, $txt, $ID_MEMBER, $boardurl;

	// Show the linktree
	echo '
			<div>', theme_linktree(), '</div>';

	// Display game list
	echo '<div style="margin-top: 0;">
		<div class="catbgf-l">
			<div class="catbgf-r">
				<div class="catbgf" style="padding-top: 5px; text-align: center; "><a href="', $boardurl . '/hackme">Mission Impossible เอ๊ย เลือกภารกิจเลยครับ</a></div>
			</div>
		</div>';
			
		echo '
		<div class="tborder">
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td class="windowbg" width="30%" valign="top" rowspan="11">Basic Mission<br />(พื้นฐานรูปแบบ HTML, Javascript)<br />&nbsp;<br />พูดคุยเกี่ยวกับ Basic Hack ได้ <a href="', $boardurl . '/board/Basic-Mission" title="Basic Mission Forum" style="text-decoration: underline;">ที่นี้</a> ครับ</td>
				<td class="windowbg" align="left">';

			if(in_array('1', $context['hackme']['basicCompleted']))
				echo '<a href="', $boardurl . '/basic1" title="Basic Mission LV. 1">- สมัครเข้าโรงเรียนสอนแฮก! (LV. 1) [<b>Hacked</b>]</a><br />';
			else
				echo '<a href="', $boardurl . '/basic1" title="Basic Mission LV. 1">- สมัครเข้าโรงเรียนสอนแฮก! (LV. 1)</a><br />';
			
			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('2', $context['hackme']['basicCompleted']))
				echo '<a href="', $boardurl . '/basic2" title="Basic Mission LV. 2">- การบ้านวันแรก (LV. 2) [<b>Hacked</b>]</a><br />';
			else
				echo '<a href="', $boardurl . '/basic2" title="Basic Mission LV. 2">- การบ้านวันแรก (LV. 2)</a><br />';

			echo '</td></tr><tr><td class="windowbg" align="left">';
			
			if(in_array('3', $context['hackme']['basicCompleted']))
				echo '<a href="', $boardurl . '/basic3" title="Basic Mission LV. 3">- เริ่มลงทะเบียนวิชาถอดรหัส! (LV. 3) [<b>Hacked</b>]</a><br />';
			else
				echo '<a href="', $boardurl . '/basic3" title="Basic Mission LV. 3">- เริ่มลงทะเบียนวิชาถอดรหัส! (LV. 3)</a><br />';

			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('4', $context['hackme']['basicCompleted']))
				echo '<a href="', $boardurl . '/basic4" title="Basic Mission LV. 4">- วิชาการป้องกันไฟล์พื้นฐาน (LV. 4) [<b>Hacked</b>]</a><br />';
			else
				echo '<a href="', $boardurl . '/basic4" title="Basic Mission LV. 4">- วิชาการป้องกันไฟล์พื้นฐาน (LV. 4)</a><br />';

			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('5', $context['hackme']['basicCompleted']))
				echo '<a href="', $boardurl . '/basic5" title="Basic Mission LV. 5">- ปฏิบัติการพิเศษ! <b>"ค้นคว้าบ้าบิ่น"</b> เราต้องช่วย <b>"พี่บวม"</b> ให้ได้!! (LV. 5) [<b>Hacked</b>]</a><br />';
			else
				echo '<a href="', $boardurl . '/basic5" title="Basic Mission LV. 5">- ปฏิบัติการพิเศษ! <b>"ค้นคว้าบ้าบิ่น"</b> เราต้องช่วย <b>"พี่บวม"</b> ให้ได้!! (LV. 5)</a><br />';

			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('6', $context['hackme']['basicCompleted']))
				echo '<a href="', $boardurl . '/basic6" title="Basic Mission LV. 6">- แย่แล้ว! <b>พี่บวม</b>โดนจับได้ว่า โกงคะแนน (LV. 6) [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/basic6" title="Basic Mission LV. 6">- แย่แล้ว! <b>พี่บวม</b>โดนจับได้ว่า โกงคะแนน (LV. 6)</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('7', $context['hackme']['basicCompleted']))
				echo '<a href="', $boardurl . '/basic7" title="Basic Mission LV. 7">- ปฏิบัติการ ถอดรหัสฐานข้อมูลห้องสมุดโรงเรียน! (LV. 7) [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/basic7" title="Basic Mission LV. 7">- ปฏิบัติการ ถอดรหัสฐานข้อมูลห้องสมุดโรงเรียน! (LV. 7)</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('8', $context['hackme']['basicCompleted']))
				echo '<a href="', $boardurl . '/basic8" title="Basic Mission LV. 8">- ปฏิบัติการ ถอดรหัสฐานข้อมูลห้องสมุดโรงเรียน ภาคแอบแฮก! (LV. 8) [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/basic8" title="Basic Mission LV. 8">- ปฏิบัติการ ถอดรหัสฐานข้อมูลห้องสมุดโรงเรียน ภาคแอบแฮก! (LV. 8)</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('9', $context['hackme']['basicCompleted']))
				echo '<a href="', $boardurl . '/basic9" title="Basic Mission LV. 9">- เรื่องก็คือ... การบ้านวิชาฐานข้อมูล (LV. 9) [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/basic9" title="Basic Mission LV. 9">- เรื่องก็คือ... การบ้านวิชาฐานข้อมูล (LV. 9)</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('10', $context['hackme']['basicCompleted']))
				echo '<a href="', $boardurl . '/basic10" title="Basic Mission LV. 10">- ปฏิบัติการ แอบโหวตมิสไทยรั่วยูนิเวอร์ส (LV. 10) [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/basic10" title="Basic Mission LV. 10">- ปฏิบัติการ แอบโหวตมิสไทยรั่วยูนิเวอร์ส (LV. 10)</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('11', $context['hackme']['basicCompleted']))
				echo '<a href="', $boardurl . '/basic11" title="Basic Mission LV. 11">- ปฏิบัติการ แอบโหวตมิสไทยรั่วยูนิเวอร์ส ภาคสอง (LV. 11) [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/basic11" title="Basic Mission LV. 11">- ปฏิบัติการ แอบโหวตมิสไทยรั่วยูนิเวอร์ส ภาคสอง (LV. 11)</a>';

					echo '
				</td>
			</tr>
			<tr>
				<td class="windowbg" width="30%" valign="top" rowspan="4">Realistic Mission<br />(จำลองเหตุการณ์จริง แต่เราไม่ได้ให้คุณแฮกเว็บจริงๆ หรอกนะ)<br />&nbsp;<br />พูดคุยเกี่ยวกับ Realistic Mission ได้ <a href="', $boardurl . '/board/Realistic-Mission" title="Realistic Mission Forum" style="text-decoration: underline;">ที่นี้</a> ครับ</td>
				<td class="windowbg" align="left">
					';

			if(in_array('1', $context['hackme']['realCompleted']))
				echo '<a href="', $boardurl . '/real1" title="Realistic Mission LV. 1">- Mission1 + ปฏิบัติการฉาว! น้องดาวโดนใส่ร้าย! [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/real1" title="Realistic Mission LV. 1">- Mission1 + ปฏิบัติการฉาว! น้องดาวโดนใส่ร้าย!</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('2', $context['hackme']['realCompleted']))
				echo '<a href="', $boardurl . '/real2" title="Realistic Mission LV. 2">- Mission2 + คำขอร้องของคุณป้า! [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/real2" title="Realistic Mission LV. 2">- Mission2 + คำขอร้องของคุณป้า!</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('3', $context['hackme']['realCompleted']))
				echo '<a href="', $boardurl . '/real3" title="Realistic Mission LV. 3">- Mission3 + การทำงานกับนักสืบพันดริ๊ฟ! [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/real3" title="Realistic Mission LV. 3">- Mission3 + การทำงานกับนักสืบพันดริ๊ฟ!</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';

			if(in_array('3.5', $context['hackme']['realCompleted']))
				echo '<a href="', $boardurl . '/real3.5" title="Realistic Mission LV. 3.5">- Mission3.5 + การทำงานกับนักสืบพันดริ๊ฟ! ภาค ดริ็ฟไหมสาด [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/real3.5" title="Realistic Mission LV. 3.5">- Mission3.5 + การทำงานกับนักสืบพันดริ๊ฟ! ภาค ดริ็ฟไหมสาด</a>';
				
				echo '
				</td>
			</tr>
			<tr>
				<td class="windowbg" width="30%" valign="top" rowspan="6">Programming Challenge<br />(รู้จักการใช้โปรแกรมทำงาน)<br />&nbsp;<br />พูดคุยเกี่ยวกับ Programming Challenge ได้ <a href="', $boardurl . '/board/Programming-Challenge" title="Programming Challenge Forum" style="text-decoration: underline;">ที่นี้</a> ครับ</td>
				<td class="windowbg" align="left">
					';
				
			if(in_array('1', $context['hackme']['progCompleted']))
				echo '<a href="', $boardurl . '/prog1" title="Programming Challenge Mission 1">- Program 1 + เครื่องคิดเลขมนุษย์ ?! [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/prog1" title="Programming Challenge Mission 1">- Program 1 + เครื่องคิดเลขมนุษย์ ?!</a>';
				
			echo '</td></tr><tr><td class="windowbg" align="left">';
				
			if(in_array('2', $context['hackme']['progCompleted']))
				echo '<a href="', $boardurl . '/prog2" title="Programming Challenge Mission 2">- Program 2 + เครื่องคิดเลขมนุษย์ ?! (ภาคสอง) [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/prog2" title="Programming Challenge Mission 2">- Program 2 + เครื่องคิดเลขมนุษย์ ?! (ภาคสอง)</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';
				
			if(in_array('3', $context['hackme']['progCompleted']))
				echo '<a href="', $boardurl . '/prog3" title="Programming Challenge Mission 3">- Program 3 + เครื่องคิดเลขมนุษย์ ?! (ภาคสาม) [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/prog3" title="Programming Challenge Mission 3">- Program 3 + เครื่องคิดเลขมนุษย์ ?! (ภาคสาม)</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';
				
			if(in_array('4', $context['hackme']['progCompleted']))
				echo '<a href="', $boardurl . '/prog4" title="Programming Challenge Mission 4">- Program 4 + เครื่องคิดเลขมนุษย์ ?! (ภาคสี่) [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/prog4" title="Programming Challenge Mission 4">- Program 4 + เครื่องคิดเลขมนุษย์ ?! (ภาคสี่)</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';
				
			if(in_array('5', $context['hackme']['progCompleted']))
				echo '<a href="', $boardurl . '/prog5" title="Programming Challenge Mission 5">- Program 5 + Lossless Algorithms [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/prog5" title="Programming Challenge Mission 5">- Program 5 + Lossless Algorithms</a>';

			echo '</td></tr><tr><td class="windowbg" align="left">';
				
			if(in_array('6', $context['hackme']['progCompleted']))
				echo '<a href="', $boardurl . '/prog6" title="Programming Challenge Mission 6">- Program 6 + ทางลัดของหนูมาลี [<b>Hacked</b>]</a>';
			else
				echo '<a href="', $boardurl . '/prog6" title="Programming Challenge Mission 6">- Program 6 + ทางลัดของหนูมาลี</a>';

				echo '
				</td>
			</tr>
		</table></div>
	</div>
	';
}

?>