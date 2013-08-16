<?php
/**
 * talking core file
 * if you have anything question can send emall to guyfar10@gmail.com
 * Author guyfar
 */

class Speak{
	/*
	 * 构造函数
	 */
	function __construct(){
		
	}
	
	/*
	 * 对机器人说的话
	 */
	function sayToRobot($speak){
		if(empty($speak)){
			return '你好像什么都没说，是吗？';
		}
		echo '你好';
	}
}