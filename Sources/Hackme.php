<?php
# Hackme Mod by Tesz
# lastwordz.net

if (!defined('SMF'))
	die('Hacking attempt...');

function encrypt($string, $key) {
	$j=0;
	for ($i=0; $i<strlen($string); $i++) {
		$string[$i] = $string[$i]^$key[$j];
		if ($j<(strlen($key)-1)) $j++;
		else $j=0;
	}
	return base64_encode($string);
}

function Hackme() {
	global $db_prefix, $context, $user_info, $scripturl, $txt, $ID_MEMBER;

	loadTemplate('Hackme');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');
	
	// set title
	$context['page_title'] = $txt['hackme_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/hackme',
		'name' => $txt['hackme'],
	);

	// determine action
	$context['sub_action'] = isset($_REQUEST['sa']) ? $_REQUEST['sa'] : '';
	$context['hackme']['basicCompleted'] = explode(',', $user_info['basicCompleted']);
	$context['hackme']['realCompleted'] = explode(',', $user_info['realCompleted']);
	$context['hackme']['progCompleted'] = explode(',', $user_info['progCompleted']);
}

function Basic1() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Basic1');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_basic1_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/basic1',
		'name' => $txt['hackme_basic1'],
	);

	$context['hackme']['basic1'] = array(
		'pass' => encrypt($user_info['username'], '1owD891'),
		'is_completed' => false,
		);

	// check for passed ?
	if(!empty($_POST))
		if(trim($_POST['lv1box']) == $context['hackme']['basic1']['pass'])
			$context['hackme']['basic1']['is_completed'] = true;

	if($context['hackme']['basic1']['is_completed']) {
		if(!in_array('1', explode(',', $user_info['basicCompleted'])))
			if($user_info['basicCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='1', hackmeScore='".($user_info['hackmeScore']+30)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='{$user_info['basicCompleted']},1', hackmeScore='".($user_info['hackmeScore']+30)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Basic2() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Basic2');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_basic2_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/basic2',
		'name' => $txt['hackme_basic2'],
	);

	$context['hackme']['basic2'] = array(
		'pass' => encrypt($user_info['username'], '2ur87cS2'),
		'is_completed' => false,
		);

	// check for passed ?
	if(!empty($_POST))
		if(trim($_POST['lv2box']) == $context['hackme']['basic2']['pass'])
			$context['hackme']['basic2']['is_completed'] = true;

	if($context['hackme']['basic2']['is_completed']) {
		if(!in_array('2', explode(',', $user_info['basicCompleted'])))
			if($user_info['basicCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='2', hackmeScore='".($user_info['hackmeScore']+40)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='{$user_info['basicCompleted']},2', hackmeScore='".($user_info['hackmeScore']+40)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Basic3() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Basic3');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_basic3_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/basic3',
		'name' => $txt['hackme_basic3'],
	);

	$context['hackme']['basic3'] = array(
		'pass' => encrypt($user_info['username'], '3z-093s3'),
		'is_completed' => false,
		);

	// check for passed ?
	if(!empty($_POST))
		if(trim($_POST['lv3box']) == $context['hackme']['basic3']['pass'])
			$context['hackme']['basic3']['is_completed'] = true;

	if($context['hackme']['basic3']['is_completed']) {
		if(!in_array('3', explode(',', $user_info['basicCompleted'])))
			if($user_info['basicCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='3', hackmeScore='".($user_info['hackmeScore']+50)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='{$user_info['basicCompleted']},3', hackmeScore='".($user_info['hackmeScore']+50)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Basic4() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Basic4');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_basic4_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/basic4',
		'name' => $txt['hackme_basic4'],
	);

	$context['hackme']['basic4'] = array(
		'pass' => encrypt($user_info['username'], '4cp[De4'),
		'is_completed' => false,
		);

	$context['sub_action'] = isset($_REQUEST['sa']) ? $_REQUEST['sa'] : '';
	if($context['sub_action'] == 'db')
		die($context['hackme']['basic4']['pass']);

	// check for passed ?
	if(!empty($_POST))
		if(trim($_POST['lv4box']) == $context['hackme']['basic4']['pass'])
			$context['hackme']['basic4']['is_completed'] = true;

	if($context['hackme']['basic4']['is_completed']) {
		if(!in_array('4', explode(',', $user_info['basicCompleted'])))
			if($user_info['basicCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='4', hackmeScore='".($user_info['hackmeScore']+50)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='{$user_info['basicCompleted']},4', hackmeScore='".($user_info['hackmeScore']+50)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Basic5() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Basic5');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_basic5_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/basic5',
		'name' => $txt['hackme_basic5'],
	);

	$context['hackme']['basic5'] = array(
		'pass' => encrypt($user_info['username'], '5-1305=-5'),
		'is_completed' => false,
		);

	$context['sub_action'] = !empty($_REQUEST['sa']) ? $_REQUEST['sa'] : '';
	$context['sub_action_value'] = !empty($_REQUEST['score']) ? $_REQUEST['score'] : 0;

	// check for passed ?
	if(!empty($_POST))
		if(trim($_POST['lv5box']) == $context['hackme']['basic5']['pass'])
			$context['hackme']['basic5']['is_completed'] = true;

	if($context['hackme']['basic5']['is_completed']) {
		if(!in_array('5', explode(',', $user_info['basicCompleted'])))
			if($user_info['basicCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='5', hackmeScore='".($user_info['hackmeScore']+50)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='{$user_info['basicCompleted']},5', hackmeScore='".($user_info['hackmeScore']+50)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Basic6() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Basic6');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_basic6_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/basic6',
		'name' => $txt['hackme_basic6'],
	);

	$context['hackme']['basic6'] = array(
		'pass' => encrypt($user_info['username'], '6-@#$56'),
		'is_completed' => false,
		);

	$context['sub_action_value'] = !empty($_REQUEST['score']) ? $_REQUEST['score'] : 0;

	// check for passed ?
	if(!empty($_POST)) {
		$_POST['lv6box'] = isset($_POST['lv6box']) ? $_POST['lv6box'] : '';
		if(trim($_POST['lv6box']) == $context['hackme']['basic6']['pass'])
			$context['hackme']['basic6']['is_completed'] = true;
	}

	if($context['hackme']['basic6']['is_completed']) {
		if(!in_array('6', explode(',', $user_info['basicCompleted'])))
			if($user_info['basicCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='6', hackmeScore='".($user_info['hackmeScore']+60)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='{$user_info['basicCompleted']},6', hackmeScore='".($user_info['hackmeScore']+60)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Basic7() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Basic7');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_basic7_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/basic7',
		'name' => $txt['hackme_basic7'],
	);

	$context['hackme']['basic7'] = array(
		'pass' => encrypt($user_info['username'], '77$*xod7'),
		'is_completed' => false,
		'encrypted_pass' => '',
		'test_pass' => '',
		);

	for($i=0; $i<strlen($context['hackme']['basic7']['pass']); $i++)
		$context['hackme']['basic7']['encrypted_pass'] .= chr(ord($context['hackme']['basic7']['pass'][$i])-$i);
	$context['hackme']['basic7']['encrypted_pass'] = htmlspecialchars($context['hackme']['basic7']['encrypted_pass']);

	$context['sub_action_value'] = !empty($_REQUEST['p']) ? trim($_REQUEST['p']) : '';

	// encode
	if($context['sub_action_value'] != '')
		for($i=0; $i<strlen($context['sub_action_value']); $i++)
			$context['hackme']['basic7']['test_pass'] .= chr(ord($context['sub_action_value'][$i])-$i);
	$context['hackme']['basic7']['test_pass'] = htmlspecialchars($context['hackme']['basic7']['test_pass']);

	// check for passed ?
	if(!empty($_POST)) {
		$_POST['lv7box'] = isset($_POST['lv7box']) ? $_POST['lv7box'] : '';
		if(trim($_POST['lv7box']) == $context['hackme']['basic7']['pass'])
			$context['hackme']['basic7']['is_completed'] = true;
	}

	if($context['hackme']['basic7']['is_completed']) {
		if(!in_array('7', explode(',', $user_info['basicCompleted'])))
			if($user_info['basicCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='7', hackmeScore='".($user_info['hackmeScore']+70)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='{$user_info['basicCompleted']},7', hackmeScore='".($user_info['hackmeScore']+70)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Basic8() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Basic8');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_basic8_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/basic8',
		'name' => $txt['hackme_basic8'],
	);

	$context['hackme']['basic8'] = array(
		'pass' => encrypt($user_info['username'], '8$x89vas8'),
		'is_completed' => false,
		'encrypted_pass' => '',
		'test_pass' => '',
		);

	for($i=0; $i<strlen($context['hackme']['basic8']['pass']); $i++)
		$context['hackme']['basic8']['encrypted_pass'] .= chr(ord($context['hackme']['basic8']['pass'][$i])-$i);
	$context['hackme']['basic8']['encrypted_pass'] = base64_encode($context['hackme']['basic8']['encrypted_pass']);

	$context['sub_action_value'] = !empty($_REQUEST['p']) ? trim($_REQUEST['p']) : '';

	// encode
	if($context['sub_action_value'] != '')
		for($i=0; $i<strlen($context['sub_action_value']); $i++)
			$context['hackme']['basic8']['test_pass'] .= chr(ord($context['sub_action_value'][$i])-$i);
	$context['hackme']['basic8']['test_pass'] = base64_encode($context['hackme']['basic8']['test_pass']);

	// check for passed ?
	if(!empty($_POST)) {
		$_POST['lv8box'] = isset($_POST['lv8box']) ? $_POST['lv8box'] : '';
		if(trim($_POST['lv8box']) == $context['hackme']['basic8']['pass'])
			$context['hackme']['basic8']['is_completed'] = true;
	}

	if($context['hackme']['basic8']['is_completed']) {
		if(!in_array('8', explode(',', $user_info['basicCompleted'])))
			if($user_info['basicCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='8', hackmeScore='".($user_info['hackmeScore']+70)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='{$user_info['basicCompleted']},8', hackmeScore='".($user_info['hackmeScore']+70)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Basic9() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Basic9');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_basic9_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/basic9',
		'name' => $txt['hackme_basic9'],
	);

	$context['hackme']['basic9'] = array(
		'pass' => encrypt($user_info['username'], '9_4@#dz9'),
		'is_completed' => false,
		'is_completed2' => false,
		'input_error' => false,
		);

	$context['sub_action_value'] = !empty($_REQUEST['p']) ? trim($_REQUEST['p']) : '';
	if(!empty($context['sub_action_value'])) {
		$context['hackme']['basic9']['input'] = "pass='".str_replace(array(' ', '-', '/', '*'), array('', '', '', ''), stripslashes($context['sub_action_value']))."'";
		if(strpos($context['sub_action_value'], "'"))
			$context['hackme']['basic9']['input_error'] = true;

		if($context['hackme']['basic9']['input_error']) {
			preg_match("/pass=\'(|(?P<s1>\w+))\'or\'(?P<s2>\w+)\'=\'(?P<s3>\w+)\'/i", $context['hackme']['basic9']['input'], $matches);
			if(empty($matches))
				preg_match("/pass=\'(|(?P<s1>\w+))\'or\'(?P<s2>\w+)=(?P<s3>\w+)\'/i", $context['hackme']['basic9']['input'], $matches);
			if(!empty($matches))
				if($matches['s2'] == $matches['s3'])
					$context['hackme']['basic9']['is_completed'] = $context['hackme']['basic9']['is_completed2'] = true;
		}
	}

	// check for passed ?
	if(!empty($_POST)) {
		$_POST['lv9box'] = isset($_POST['lv9box']) ? $_POST['lv9box'] : '';
		if(trim($_POST['lv9box']) == $context['hackme']['basic9']['pass'])
			$context['hackme']['basic9']['is_completed'] = true;
	}

	if($context['hackme']['basic9']['is_completed']) {
		if(!in_array('9', explode(',', $user_info['basicCompleted'])))
			if($user_info['basicCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='9', hackmeScore='".($user_info['hackmeScore']+70)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='{$user_info['basicCompleted']},9', hackmeScore='".($user_info['hackmeScore']+70)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Basic10() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Basic10');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_basic10_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/basic10',
		'name' => $txt['hackme_basic10'],
	);

	$context['hackme']['basic10'] = array(
		'pass' => encrypt($user_info['username'], '10xAFD1010'),
		'is_completed' => false,
		'is_dup' => true,
		);

	if(empty($_COOKIE['user']))
		setcookie('user', $user_info['name']);

	$context['sub_action_value1'] = !empty($_REQUEST['u']) ? trim($_REQUEST['u']) : '';
	$context['sub_action_value2'] = !empty($_REQUEST['p']) ? trim($_REQUEST['p']) : '';
	$_COOKIE['user'] = !empty($_COOKIE['user']) ? $_COOKIE['user'] : '';
	if(!empty($context['sub_action_value1']) && !empty($context['sub_action_value1']))
		if($context['sub_action_value1'] == 'someone' && $context['sub_action_value2'] == 'kidmaiook')
			if($_COOKIE['user'] == $user_info['name'])
				$context['hackme']['basic10']['is_dup'] = true;
			else
				$context['hackme']['basic10']['is_dup'] = false;

	// check for passed ?
	if(!empty($_POST)) {
		$_POST['lv10box'] = isset($_POST['lv10box']) ? $_POST['lv10box'] : '';
		if(trim($_POST['lv10box']) == $context['hackme']['basic10']['pass'])
			$context['hackme']['basic10']['is_completed'] = true;
	}

	if($context['hackme']['basic10']['is_completed']) {
		if(!in_array('10', explode(',', $user_info['basicCompleted'])))
			if($user_info['basicCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='10', hackmeScore='".($user_info['hackmeScore']+70)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='{$user_info['basicCompleted']},10', hackmeScore='".($user_info['hackmeScore']+70)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Basic11() {
	global $db_prefix, $context, $scripturl, $user_info, $txt, $ID_MEMBER, $sourcedir;

	loadTemplate('Hackme-Basic11');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_basic11_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/basic11',
		'name' => $txt['hackme_basic11'],
	);

	$context['hackme']['basic11'] = array(
		'pass' => encrypt($user_info['username'], '11;aXd9D11'),
		'is_completed' => false,
		'is_dup' => true,
		);

	$context['sub_action_value1'] = !empty($_REQUEST['u']) ? trim($_REQUEST['u']) : '';
	$context['sub_action_value2'] = !empty($_REQUEST['p']) ? trim($_REQUEST['p']) : '';
	$proxy = '';
	if(!empty($context['sub_action_value1']) && !empty($context['sub_action_value1']))
		if($context['sub_action_value1'] == 'someonenaja' && $context['sub_action_value2'] == 'kidmaiooknaja') {
			if(file_exists($sourcedir.'/../Cache/B11-'.$ID_MEMBER) && (filemtime($sourcedir.'/../Cache/B11-'.$ID_MEMBER) > time() - 600))
				$proxy = file_get_contents($sourcedir.'/../Cache/B11-'.$ID_MEMBER);
			else {
				$fp = fopen($sourcedir.'/../Cache/B11-'.$ID_MEMBER, 'w');
				flock($fp, LOCK_EX);
				fputs($fp, $_SERVER['REMOTE_ADDR']);
				flock($fp, LOCK_UN);
				fclose($fp);
			}
			if($proxy == '')
				$proxy = $user_info['ip'];
			list($a, $b, $c, $d) = explode('.', $user_info['ip']);
			list($e, $f, $g, $h) = explode('.', $proxy);
			if($a == $e && $b == $f && $c == $g)
				$context['hackme']['basic11']['is_dup'] = true;
			else
				$context['hackme']['basic11']['is_dup'] = false;
		} else {
			$fp = fopen($sourcedir.'/../Cache/B11-'.$ID_MEMBER, 'w');
			flock($fp, LOCK_EX);
			fputs($fp, $_SERVER['REMOTE_ADDR']);
			flock($fp, LOCK_UN);
			fclose($fp);
		}

	// check for passed ?
	if(!empty($_POST)) {
		$_POST['lv11box'] = isset($_POST['lv11box']) ? $_POST['lv11box'] : '';
		if(trim($_POST['lv11box']) == $context['hackme']['basic11']['pass'])
			$context['hackme']['basic11']['is_completed'] = true;
	}

	if($context['hackme']['basic11']['is_completed']) {
		if(!in_array('11', explode(',', $user_info['basicCompleted'])))
			if($user_info['basicCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='11', hackmeScore='".($user_info['hackmeScore']+70)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET basicCompleted='{$user_info['basicCompleted']},11', hackmeScore='".($user_info['hackmeScore']+70)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Real1() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Real1');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_real1_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/real1',
		'name' => $txt['hackme_real1'],
	);

	$context['hackme']['real1'] = array(
		'pass' => encrypt($user_info['username'], '1roc0sal11'),
		'is_completed' => false,
		);

	$context['sub_action'] = !empty($_REQUEST['sa']) ? trim($_REQUEST['sa']) : '';
	$context['sub_action_value'] = !empty($_REQUEST['act']) ? trim($_REQUEST['act']) : '';

	// check for passed ?
	if(!empty($_POST)) {
		$_POST['lvr1box'] = isset($_POST['lvr1box']) ? $_POST['lvr1box'] : '';
		if(trim($_POST['lvr1box']) == $context['hackme']['real1']['pass'])
			$context['hackme']['real1']['is_completed'] = true;
	}

	if($context['hackme']['real1']['is_completed']) {
		if(!in_array('1', explode(',', $user_info['realCompleted'])))
			if($user_info['realCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET realCompleted='1', hackmeScore='".($user_info['hackmeScore']+110)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET realCompleted='{$user_info['realCompleted']},1', hackmeScore='".($user_info['hackmeScore']+110)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Real2() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Real2');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_real2_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/real2',
		'name' => $txt['hackme_real2'],
	);

	$context['hackme']['real2'] = array(
		'pass' => encrypt($user_info['username'], '2x09jfd2'),
		'is_completed' => false,
		);

	// check for passed ?
	if(!empty($_POST)) {
		$_POST['lvr2box'] = isset($_POST['lvr2box']) ? $_POST['lvr2box'] : '';
		if(trim($_POST['lvr2box']) == $context['hackme']['real2']['pass'])
			$context['hackme']['real2']['is_completed'] = true;
	}

	if($context['hackme']['real2']['is_completed']) {
		if(!in_array('2', explode(',', $user_info['realCompleted'])))
			if($user_info['realCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET realCompleted='2', hackmeScore='".($user_info['hackmeScore']+140)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET realCompleted='{$user_info['realCompleted']},2', hackmeScore='".($user_info['hackmeScore']+140)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Real3_I() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Real3');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_real3_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/real3',
		'name' => $txt['hackme_real3'],
	);

	$context['hackme']['real3'] = array(
		'pass' => encrypt($user_info['username'], '3mkapi0*3'),
		'is_completed' => false,
		);

	// check for passed ?
	if(!empty($_POST)) {
		$_POST['lvr3box'] = isset($_POST['lvr3box']) ? $_POST['lvr3box'] : '';
		if(trim($_POST['lvr3box']) == $context['hackme']['real3']['pass'])
			$context['hackme']['real3']['is_completed'] = true;
	}

	if($context['hackme']['real3']['is_completed']) {
		if(!in_array('3', explode(',', $user_info['realCompleted'])))
			if($user_info['realCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET realCompleted='3', hackmeScore='".($user_info['hackmeScore']+100)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET realCompleted='{$user_info['realCompleted']},3', hackmeScore='".($user_info['hackmeScore']+100)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

function Real3_II() {
	global $db_prefix, $context, $scripturl, $boardurl, $user_info, $txt, $ID_MEMBER;

	loadTemplate('Hackme-Real3.5');
	loadLanguage('Hackme');

	// check permission
	isallowedTo('hackme');

	// set title
	$context['page_title'] = $txt['hackme_real3.5_page_title'];

	// set linktree
	$context['linktree'][] = array(
		'url' => $boardurl . '/real3.5',
		'name' => $txt['hackme_real3.5'],
	);

	$context['hackme']['real3.5'] = array(
		'pass' => encrypt($user_info['username'], '3.5mkapi0*3.5'),
		'is_completed' => false,
		);

	// check for passed ?
	if(!empty($_POST)) {
		$_POST['lvr3_5box'] = isset($_POST['lvr3_5box']) ? $_POST['lvr3_5box'] : '';
		if(trim($_POST['lvr3_5box']) == $context['hackme']['real3.5']['pass'])
			$context['hackme']['real3.5']['is_completed'] = true;
	}

	if($context['hackme']['real3.5']['is_completed']) {
		if(!in_array('3.5', explode(',', $user_info['realCompleted'])))
			if($user_info['realCompleted'] == '')
					db_query("UPDATE `{$db_prefix}members` SET realCompleted='3.5', hackmeScore='".($user_info['hackmeScore']+100)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
				else
					db_query("UPDATE `{$db_prefix}members` SET realCompleted='{$user_info['realCompleted']},3.5', hackmeScore='".($user_info['hackmeScore']+100)."' WHERE memberName='{$user_info['username']}'", __FILE__, __LINE__);
	}
}

?>