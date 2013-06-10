<?php
# Hackme Mod by Tesz
# lastwordz.net

if (!defined('SMF'))
	die('Hacking attempt...');
	
function Program1() {
	global $db_prefix, $context, $user_info, $scripturl, $boardurl, $txt, $ID_MEMBER, $sourcedir;

	loadTemplate('Programming1');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');
	
	// set title
	$context['page_title'] = $txt['prog_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/prog1',
		'name' => $txt['prog1'],
	);
	
	$lang = range('a', 'z');
	$tmp = ''; $count = 0;
	for($n=1; $n<=700; $n++) {
		$i = rand(0, 25);
		$tmp .= $lang[$i];
		if($n % 35 == 0 && $n != 700)
			$tmp .= "\n";
		$count += ord($lang[$i]);
	}
	
	$context['program'] = array(
		'id' => 1,
		'href_title' => 'prog1',
		'title' => 'เครื่องคิดเลขมนุษย์ ?!',
		'time' => 45,
		'now' => time(),
		'text' => $tmp,
		'count' => $count,
		'isCompleted' => false,
	);
	
	if(!empty($_POST) && $_SESSION['ss_captcha'] == $_POST['captcha']) {
		if(file_exists($sourcedir.'/../Cache/Prog1/'.$ID_MEMBER)) {
			$tmp = file_get_contents($sourcedir.'/../Cache/Prog1/'.$ID_MEMBER);
			$data = @unserialize($tmp);
			if(time() - $data['now'] <= $data['time'])
				if($data['count'] == $_POST['prog1box'])
					$context['program']['isCompleted'] = true;
		}
	}
	$_SESSION['ss_captcha'] = rand(0, 9);
	
	$fp = fopen($sourcedir.'/../Cache/Prog1/'.$ID_MEMBER, 'w');
	flock($fp, LOCK_EX);
	fputs($fp, @serialize($context['program']));
	flock($fp, LOCK_UN);
	fclose($fp);
	
	if($context['program']['isCompleted']) {
		if(!in_array('1', explode(',', $user_info['progCompleted'])))
			if($user_info['progCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='1', hackmeScore='".($user_info['hackmeScore']+120)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='{$user_info['progCompleted']},1', hackmeScore='".($user_info['hackmeScore']+120)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Program2() {
	global $db_prefix, $context, $user_info, $scripturl, $boardurl, $txt, $ID_MEMBER, $sourcedir;

	loadTemplate('Programming2');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');
	
	// set title
	$context['page_title'] = $txt['prog_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/prog2',
		'name' => $txt['prog2'],
	);
	
	$data = '';
	$count = 0;
	$numbers = array();
	for($i=0; $i<300; $i++)
		$numbers[] = rand(0,9);
	
	$lang = array();
	$lang1 = range('a', 'z');
	$lang2 = range('A', 'Z');
	foreach($lang1 as $k => $v)
		$lang[] = $v;
	foreach($lang2 as $k => $v)
		$lang[] = $v;
	
	foreach($numbers as $k => $v) {
		$i = rand(0, 51);
		if($k % 10 == 0 && $k != 0)
			$data .= "\n";
		$data .= $lang[$i] . ' ' . $v . ' ';
		$count += (int)((ord($lang[$i]) < 97 ? "-" : "+").$v);
	}
	
	$context['program'] = array(
		'id' => 2,
		'href_title' => 'prog2',
		'title' => 'เครื่องคิดเลขมนุษย์ ?! (ภาคสอง)',
		'time' => 45,
		'now' => time(),
		'text' => $data,
		'count' => $count,
		'isCompleted' => false,
	);
	
	if(!empty($_POST) && $_SESSION['ss_captcha'] == $_POST['captcha']) {
		if(file_exists($sourcedir.'/../Cache/Prog2/'.$ID_MEMBER)) {
			$tmp = file_get_contents($sourcedir.'/../Cache/Prog2/'.$ID_MEMBER);
			$dat = @unserialize($tmp);
			if(time() - $dat['now'] <= $dat['time'])
				if($dat['count'] == $_POST['prog2box'])
					$context['program']['isCompleted'] = true;
		}
	}
	$_SESSION['ss_captcha'] = rand(0, 9);
	
	$fp = fopen($sourcedir.'/../Cache/Prog2/'.$ID_MEMBER, 'w');
	flock($fp, LOCK_EX);
	fputs($fp, @serialize($context['program']));
	flock($fp, LOCK_UN);
	fclose($fp);
	
	if($context['program']['isCompleted']) {
		if(!in_array('2', explode(',', $user_info['progCompleted'])))
			if($user_info['progCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='2', hackmeScore='".($user_info['hackmeScore']+100)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='{$user_info['progCompleted']},2', hackmeScore='".($user_info['hackmeScore']+100)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function findHRM($a, $b) {
	$pointer = $a > $b ? $b : $a;

	while($a % $pointer != 0 || $b % $pointer != 0)
		$pointer--;

	return $pointer;
}

function Program3() {
	global $db_prefix, $context, $user_info, $scripturl, $boardurl, $txt, $ID_MEMBER, $sourcedir;

	loadTemplate('Programming3');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');
	
	// set title
	$context['page_title'] = $txt['prog_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/prog3',
		'name' => $txt['prog3'],
	);

	$data = '';
	$count = 0;
	
	for($i=0; $i<30; $i++) {
		$num1 = rand(100, 500);
		$num2 = rand(100, 500);
		$data .= $num1.' '.$num2;
		$count += $num1 * $num2 / findHRM($num1, $num2);
		if($i != 29)
			$data .= "\n";
	}
	
	$context['program'] = array(
		'id' => 3,
		'href_title' => 'prog3',
		'title' => 'เครื่องคิดเลขมนุษย์ ?! (ภาคสาม)',
		'time' => 45,
		'now' => time(),
		'text' => $data,
		'count' => $count,
		'isCompleted' => false,
	);
	
	if(!empty($_POST) && $_SESSION['ss_captcha'] == $_POST['captcha']) {
		if(file_exists($sourcedir.'/../Cache/Prog3/'.$ID_MEMBER)) {
			$tmp = file_get_contents($sourcedir.'/../Cache/Prog3/'.$ID_MEMBER);
			$dat = @unserialize($tmp);
			if(time() - $dat['now'] <= $dat['time'])
				if($dat['count'] == $_POST['prog3box'])
					$context['program']['isCompleted'] = true;
		}
	}
	$_SESSION['ss_captcha'] = rand(0, 9);
	
	$fp = fopen($sourcedir.'/../Cache/Prog3/'.$ID_MEMBER, 'w');
	flock($fp, LOCK_EX);
	fputs($fp, @serialize($context['program']));
	flock($fp, LOCK_UN);
	fclose($fp);
	
	if($context['program']['isCompleted']) {
		if(!in_array('3', explode(',', $user_info['progCompleted'])))
			if($user_info['progCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='3', hackmeScore='".($user_info['hackmeScore']+100)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='{$user_info['progCompleted']},3', hackmeScore='".($user_info['hackmeScore']+100)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function createRoman($number) { // < 3999
	$char = array(
		'number' => array(1000, 900, 500, 400, 100,90, 50, 40, 10, 9, 5, 4, 1),
		'roman' => array("M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I"),
	);
	$result = '';
	for($i=0; $i<13; $i++) {
		while($number >= $char['number'][$i]) {
			$number -= $char['number'][$i];
			$result .= $char['roman'][$i];
		}
	}
	return $result;
}

function Program4() {
	global $db_prefix, $context, $user_info, $scripturl, $boardurl, $txt, $ID_MEMBER, $sourcedir;

	loadTemplate('Programming4');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');
	
	// set title
	$context['page_title'] = $txt['prog_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/prog4',
		'name' => $txt['prog4'],
	);

	$data = '';
	$count = 0;
	
	for($i=0; $i<50; $i++) {
		$num1 = rand(1, 3999);
		$data .= createRoman($num1);
		$count += $num1;
		if($i != 49)
			$data .= "\n";
	}
	
	$context['program'] = array(
		'id' => 4,
		'href_title' => 'prog4',
		'title' => 'เครื่องคิดเลขมนุษย์ ?! (ภาคสี่)',
		'time' => 45,
		'now' => time(),
		'text' => $data,
		'count' => $count,
		'isCompleted' => false,
	);
	
	if(!empty($_POST) && $_SESSION['ss_captcha'] == $_POST['captcha']) {
		if(file_exists($sourcedir.'/../Cache/Prog4/'.$ID_MEMBER)) {
			$tmp = file_get_contents($sourcedir.'/../Cache/Prog4/'.$ID_MEMBER);
			$dat = @unserialize($tmp);
			if(time() - $dat['now'] <= $dat['time'])
				if($dat['count'] == $_POST['prog4box'])
					$context['program']['isCompleted'] = true;
		}
	}
	$_SESSION['ss_captcha'] = rand(0, 9);
	
	$fp = fopen($sourcedir.'/../Cache/Prog4/'.$ID_MEMBER, 'w');
	flock($fp, LOCK_EX);
	fputs($fp, @serialize($context['program']));
	flock($fp, LOCK_UN);
	fclose($fp);
	
	if($context['program']['isCompleted']) {
		if(!in_array('4', explode(',', $user_info['progCompleted'])))
			if($user_info['progCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='4', hackmeScore='".($user_info['hackmeScore']+110)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='{$user_info['progCompleted']},4', hackmeScore='".($user_info['hackmeScore']+110)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Program5() {
	global $db_prefix, $context, $user_info, $scripturl, $boardurl, $txt, $ID_MEMBER, $sourcedir;

	loadTemplate('Programming5');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');
	
	// set title
	$context['page_title'] = $txt['prog_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/prog5',
		'name' => $txt['prog5'],
	);

	$data = '';
	$count = '';

	$char = range('A', 'Z');
	$n = $prev = 0;

	for($k=0; $k<20; $k++) {
		for($i=0; $i<10; $i++) {
			$num = rand(2, 9);
			do {
				$n = rand(0, 25);
			} while($n == $prev);
			$prev = $n;
			for($j=0; $j<$num; $j++)
				$data .= $char[$n];
			$count .= $num.$char[$n];
		}
		if($k != 19) {
			$data .= "\r\n";
			$count .= "\r\n";
		}
	}
	
	$context['program'] = array(
		'id' => 5,
		'href_title' => 'prog5',
		'title' => 'Lossless Algorithms',
		'time' => 45,
		'now' => time(),
		'text' => $data,
		'count' => $count,
		'isCompleted' => false,
	);
	
	if(!empty($_POST) && $_SESSION['ss_captcha'] == $_POST['captcha']) {
		if(file_exists($sourcedir.'/../Cache/Prog5/'.$ID_MEMBER)) {
			$tmp = file_get_contents($sourcedir.'/../Cache/Prog5/'.$ID_MEMBER);
			$dat = @unserialize($tmp);
			$_POST['prog5box'] = trim($_POST['prog5box'], chr(160)." \t\n\r\0\x0B");
			if(time() - $dat['now'] <= $dat['time'])
				if(trim($dat['count'], chr(160)." \t\n\r\0\x0B") == $_POST['prog5box'])
					$context['program']['isCompleted'] = true;
		}
	}
	$_SESSION['ss_captcha'] = rand(0, 9);
	
	$fp = fopen($sourcedir.'/../Cache/Prog5/'.$ID_MEMBER, 'w');
	flock($fp, LOCK_EX);
	fputs($fp, @serialize($context['program']));
	flock($fp, LOCK_UN);
	fclose($fp);
	
	if($context['program']['isCompleted']) {
		if(!in_array('5', explode(',', $user_info['progCompleted'])))
			if($user_info['progCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='5', hackmeScore='".($user_info['hackmeScore']+110)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='{$user_info['progCompleted']},5', hackmeScore='".($user_info['hackmeScore']+110)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}
	
function Program6() {
	global $db_prefix, $context, $user_info, $scripturl, $boardurl, $txt, $ID_MEMBER, $sourcedir;

	loadTemplate('Programming6');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');
	
	// set title
	$context['page_title'] = $txt['prog_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/prog6',
		'name' => $txt['prog6'],
	);
	include $sourcedir.'/dijstra.php';

	$data = '';
	$count = 0;

	$size = 30;
	$matrixWidth = $size * $size;

	$node = array();
	for($i=0; $i<$size; $i++) {
		for($j=0; $j<$size; $j++) {
			$node[$i][$j] = rand(1,99);
			$data .= $node[$i][$j] . ' ';
		}
		if($i != $size-1)
			$data .= "\r\n";
	}

	$m = 0;
	$ourMap = array();
	for($i=0; $i<$size; $i++) {
		for($j=0; $j<$size; $j++) {
			if($node[$i][$j+1] != 0)
				$ourMap[$m][($size*$i)+$j+1] = $node[$i][$j+1];
			if($node[$i][$j-1] != 0)
				$ourMap[$m][($size*$i)+$j-1] = $node[$i][$j-1];
			if($node[$i+1][$j] != 0)
				$ourMap[$m][($size*($i+1))+$j] = $node[$i+1][$j];
			if($node[$i-1][$j] != 0)
				$ourMap[$m][($size*($i-1))+$j] = $node[$i-1][$j];
			$m++;
		}
	}

	for ($i=0; $i < $matrixWidth; $i++) {
		for ($k=0; $k < $matrixWidth; $k++) {
			if ($i == $k) unset($ourMap[$i][$k]);
		}
	}
	
	$context['program'] = array(
		'id' => 6,
		'href_title' => 'prog6',
		'title' => 'ทางลัดของหนูมาลี',
		'time' => 120,
		'now' => time(),
		'map' => $ourMap,
		'text' => $data,
		'isCompleted' => false,
	);
	
	if(!empty($_POST) && $_SESSION['ss_captcha'] == $_POST['captcha']) {
		if(file_exists($sourcedir.'/../Cache/Prog6/'.$ID_MEMBER)) {
			$tmp = file_get_contents($sourcedir.'/../Cache/Prog6/'.$ID_MEMBER);
			$dat = @unserialize($tmp);
			$_POST['prog6box'] = trim($_POST['prog6box'], chr(160)." \t\n\r\0\x0B");
			if(time() - $dat['now'] <= $dat['time']) {

				$dijkstra = new Dijkstra($dat['map'], PHP_INT_MAX, 30);
				$dijkstra->findShortestPath(0); 
				$count = $dijkstra -> getResults();

				if($count == $_POST['prog6box'])
					$context['program']['isCompleted'] = true;
			}
		}
	}
	$_SESSION['ss_captcha'] = rand(0, 9);
	
	$fp = fopen($sourcedir.'/../Cache/Prog6/'.$ID_MEMBER, 'w');
	flock($fp, LOCK_EX);
	fputs($fp, @serialize($context['program']));
	flock($fp, LOCK_UN);
	fclose($fp);
	
	if($context['program']['isCompleted']) {
		if(!in_array('6', explode(',', $user_info['progCompleted'])))
			if($user_info['progCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='6', hackmeScore='".($user_info['hackmeScore']+180)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET progCompleted='{$user_info['progCompleted']},6', hackmeScore='".($user_info['hackmeScore']+180)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}
	
?>