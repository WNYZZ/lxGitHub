<?php	require_once(dirname(__FILE__).'/inc/config.inc.php');

/*
**************************
(C)2010-2014 phpMyWind.com
update: 2013-9-1 15:37:14
person: Feng
**************************
*/


//初始化参数
$action = isset($action) ? $action : '';
$type   = isset($type)   ? $type   : '';
$id     = isset($id)     ? $id     : 0;
$row    = isset($row)    ? $row    : '';


//栏目选择权限
if($action == 'diyfield')
{
	$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE `infotype`='$type' ORDER BY orderid ASC");
	if($dosql->GetTotalRow())
	{
		while($row = $dosql->GetArray())
		{
			echo '<span><input type="checkbox" name="classid[]" value="'.$row['id'].'" /> '.$row['classname'].'</span>';
		}
	}
	else
	{
		echo '该模型下暂无栏目';
	}

	exit();
}


//添加信息权限
else if($action == 'infoclass')
{
	$r = $dosql->GetOne("SELECT `infotype` FROM `#@__infoclass` WHERE `id`=$id");
	if(isset($r['infotype']))
		$type = $r['infotype'];
	else
		$type = '';

	echo GetDiyField($type, $id, $row);
	exit();
}
?>