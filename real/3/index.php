<?php
require '../../SSI.php';

isallowedTo('hackme');

function encrypt($string, $key) {
	$j=0;
	for ($i=0; $i<strlen($string); $i++) {
		$string[$i] = $string[$i]^$key[$j];
		if ($j<(strlen($key)-1)) $j++;
		else $j=0;
	}
	return base64_encode($string);
}
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
switch($page) {
	case 'index':
	case 'home':
			$content = '<h1>บันทึก อย่าทำข่อย วันแรก</h1><pre>
- เมื่อเช้าข่อยพบว่าแท้จริงแล้ว ข่อยเริ่มรู้สึกชอบเพื่อนข่อยว่ะ
- ตอนเดินไปเรียนเกือบเหยียบขี้หมาแหนะ
  แล้วข่อยรู้ได้ไงว่าเป็นขี้หมา ?
  ก็ข่อยชิมแล้วน่ะสิ..
- ทำไมที่โรงเรียนต้องเรียกครู ว่าอาจารย์ด้วยนะ
- ในห้องเรามีแต่ผู้หญิงให้รึ่มเลย
  แต่จริงๆ ก็ชอบนะแบบนี้ :]
- วันเปิดเรียนก็โดนการบ้านซะแล้วสิ
  ขี้เกียจทำแหะ

เดี๋ยวพรุ่งนี้มาเล่าใหม่นะพวกเธอว์
</pre>';
		break;
	case 'blog':
			include('blog.php');
		break;
	case 'contact':
		$content = '
	<pre>
ติดต่อเรา:
	ส่ง จดหมายมาที่: 
		1/2 ใต้ฟ้า บนดิน 
		ใกล้นรกเกือบตกสวรรค์ ถ.ยมบาลไม่กล้า 
		ต.บ้านบนดอย อ.แมว จ.กรุงเต๊พโว้ย 10234567

จะรอ จดหมายเพื่อนๆ นะ
	</pre>
	';
		break;
	case '/../../../etc/passwd':
	case '../../../etc/passwd':
		if(strstr($_SERVER['QUERY_STRING'], '\0')) {
		$content = '
root:x:0:0:root:/root:/bin/bash
bin:x:1:1:bin:/bin:/sbin/nologin
daemon:x:2:2:daemon:/sbin:/sbin/nologin
adm:x:3:4:adm:/var/adm:/sbin/nologin
lp:x:4:7:lp:/var/spool/lpd:/sbin/nologin
sync:x:5:0:sync:/sbin:/bin/sync
shutdown:x:6:0:shutdown:/sbin:/sbin/shutdown
halt:x:7:0:halt:/sbin:/sbin/halt
mail:x:8:12:mail:/var/spool/mail:/sbin/nologin
news:x:9:13:news:/etc/news:
uucp:x:10:14:uucp:/var/spool/uucp:/sbin/nologin
operator:x:11:0:operator:/root:/sbin/nologin
games:x:12:100:games:/usr/games:/sbin/nologin
gopher:x:13:30:gopher:/var/gopher:/sbin/nologin
ftp:x:14:50:FTP User:/var/ftp:/sbin/nologin
nobody:x:99:99:Nobody:/:/sbin/nologin
dbus:x:81:81:System message bus:/:/sbin/nologin
vcsa:x:69:69:virtual console memory owner:/dev:/sbin/nologin
rpm:x:37:37::/var/lib/rpm:/sbin/nologin
haldaemon:x:68:68:HAL daemon:/:/sbin/nologin
netdump:x:34:34:Network Crash Dump user:/var/crash:/bin/bash
nscd:x:28:28:NSCD Daemon:/:/sbin/nologin
sshd:x:74:74:Privilege-separated SSH:/var/empty/sshd:/sbin/nologin
rpc:x:32:32:Portmapper RPC user:/:/sbin/nologin
mailnull:x:47:47::/var/spool/mqueue:/sbin/nologin
smmsp:x:51:51::/var/spool/mqueue:/sbin/nologin
rpcuser:x:29:29:RPC Service User:/var/lib/nfs:/sbin/nologin
nfsnobody:x:4294967294:4294967294:Anonymous NFS User:/var/lib/nfs:/sbin/nologin
pcap:x:77:77::/var/arpwatch:/sbin/nologin
apache:x:48:48:Apache:/var/www:/sbin/nologin
squid:x:23:23::/var/spool/squid:/sbin/nologin
webalizer:x:67:67:Webalizer:/var/www/usage:/sbin/nologin
xfs:x:43:43:X Font Server:/etc/X11/fs:/sbin/nologin
ntp:x:38:38::/etc/ntp:/sbin/nologin
pegasus:x:100:500:tog-pegasus OpenPegasus WBEM/CIM services:/var/lib/Pegasus:/sbin/nologin
mysql:x:101:101:MySQL server:/var/lib/mysql:/bin/bash
cpanel:x:32001:502::/usr/local/cpanel:/bin/bash
mailman:x:32002:503::/usr/local/cpanel/3rdparty/mailman:/bin/bash
named:x:25:25:Named:/var/named:/sbin/nologin
YaTumKoi:x:32046:32046:'.encrypt($user_info['username'], '3mkapi0*3').':/home/blackmoon:/usr/local/cpanel/bin/noshell
';
	}
	else {
		if(strstr($page, 'http'))
			$content = '
Warning: main('.$page.'): URL file-access is disabled in the server configuration in /home/blackmoon/public_html/index.php on line 34<br>&nbsp;<br>
	';
		$content .= '
Warning: include('.$page.'.php) [function.include]: failed to open stream: No such file or directory in /home/blackmoon/public_html/index.php on line 34<br>&nbsp;<br>
Warning: include() [function.include]: Failed opening \''.$page.'.php\' for inclusion (include_path=\'.:/usr/lib/php\') in /home/blackmoon/public_html/index.php on line 34
	';
	}
		break;
	case '/../../../proc/self/environ':
	case '../../../proc/self/environ':
		if(strstr($_SERVER['QUERY_STRING'], '\0'))
			die('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">ยินดีด้วย! เอาโค๊ดนี้ไปกรอกได้เลยจ้าา => <b>'.encrypt($user_info['username'], '3.5mkapi0*3.5').'</b>');
		else {
			if(strstr($page, 'http'))
			$content = '
Warning: main('.$page.'): URL file-access is disabled in the server configuration in /home/blackmoon/public_html/index.php on line 34<br>&nbsp;<br>
	';
		$content .= '
Warning: include('.$page.'.php) [function.include]: failed to open stream: No such file or directory in /home/blackmoon/public_html/index.php on line 34<br>&nbsp;<br>
Warning: include() [function.include]: Failed opening \''.$page.'.php\' for inclusion (include_path=\'.:/usr/lib/php\') in /home/blackmoon/public_html/index.php on line 34
	';
		}

		break;
	default:
		if(strstr($page, 'http'))
			$content = '
	Warning: main('.$page.'): URL file-access is disabled in the server configuration in /home/blackmoon/public_html/index.php on line 34<br>&nbsp;<br>
	';
		$content .= '
Warning: include('.$page.'.php) [function.include]: failed to open stream: No such file or directory in /home/blackmoon/public_html/index.php on line 34<br>&nbsp;<br>
Warning: include() [function.include]: Failed opening \''.$page.'.php\' for inclusion (include_path=\'.:/usr/lib/php\') in /home/blackmoon/public_html/index.php on line 34
	';
		break;
}

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ไดอารี่ - อย่าทำข่อย</title>
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="content">
	<div id="back_all">

<div id="header"> 
	<div id="logo">
		<h1>อย่าทำข่อย</h1>
		ข่อยกลัวแล้วเด้อ
	</div>
	 <div id="menu">
		<ul>
			<li><a href="?page=home"  title="">หน้าแรก</a></li>
			<li><a href="?page=blog" title="">บล็อก</a></li>
			<li><a href="?page=contact" title="">ติดต่อข่อย</a></li>
		</ul>
	</div>
</div>

 <div id="main">
	<div id="left">
		<h3>ยินดีต้อนรับทุกท่าน ::</h3>
			<p>เว็บบล็อกส่วนตัวของข่อยเอง ทุกเรื่องราวของข่อย ...<a href="?page=blog">อ่านบล็อกเพิ่มเติม</a></p>
	</div>
	<div id="right">
		<h2>ไดอารี่ วันนี้</h2><br />
', $content, '
		<p>
	</div>

	</div>
 
	</div>
</div>

<div id="footer">
<p>ไดอารี่ "อย่าทำข่อย"</p>
</div>

</body>
</html>';

?>