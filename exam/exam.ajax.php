<?php
$a=$_GET['a'];
switch($a){
	case 'check_uname':
		$userName=$_GET['userName'];
		$sql="select * from students where userName='{$userName}'";
		if($db->getRow($sql))
		{		
			$db->db_err('该用户名已被占用');
		}
		break;
	case 'saveAnswer':
		$where = where(array('examID','userID','qID'));
		U('answersheet',array('answer1'),$where);
		break;
}