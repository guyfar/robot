<?php
/**
 * entrance file
 * if you have anything question can send emall to guyfar10@gmail.com
 * Author guyfar
 */
require('init.php');

//匹配加密字符串
if(md5($_REQUEST['robot_key']) != md5(ROBOT_KEY)){
	die('对不起,你没资格和我说话!');
} 

//初始化机器人
require('class/Speak.class.php');
$speak = new Speak();

//调用机器人的方法
$action = $_REQUEST['action'];

//对机器人说的话
$speak_client = $_REQUEST['speak'];

$action = empty($action)?'index':$action;

switch ($action){
	case 'index':
		echo '你好，我是阿飞！';
	break;
	case 'talk':
		$return_speak = $speak->sayToRobot($speak_client);
		echo $return_speak;
	break;
}
