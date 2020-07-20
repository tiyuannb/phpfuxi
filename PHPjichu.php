<?php
//
  /*
	1.数据类型
	   int , bool , string ,array , obj ,resource , null ,float
	2.常量
	   define();
	3.魔术常量
	   __FILE__
	   __CLASS__
	4.global   

*/

//php函数
	//string
	$a = "我在家";
	$b = "efg";
    //字符串长度
	echo strlen($a)."\r";
	echo mb_strlen($a); //中文长度
	// echo 
//流程控制
	if($a == "1111"){
			echo $a;
	}else if($b != ""){
		echo $b;
	}
	$count = 10;
	for ($i=0; $i <$count ; $i++) { 
		echo $i;
	}

	switch ($a) {
		case '我在家':
			echo $a;
			break;
		
		default:
			echo $b;
			break;
	}
	//while
	$i = 0;
	while($i < $count){
		echo $i;
		$i++;
	}

	//do while 
	$i = 0;
	do {
		$i++;
		echo $i;
	}while($i <= $count);


//对象
	define("TEST","1111");
	class call {

	}
