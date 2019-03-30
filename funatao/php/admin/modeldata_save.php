<?php	require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('diymodel');

/*
**************************
(C)2010-2014 phpMyWind.com
update: 2014-1-30 13:50:21
person: Feng
**************************
*/


//初始化参数
$r = $dosql->GetOne("SELECT * FROM `#@__diymodel` WHERE `modelname`='$m'");
$modelid = $r['id'];
$tbname  = $r['modeltbname'];
$gourl   = 'modeldata.php?m='.$r['modelname'];
$action  = isset($action) ? $action : '';


//引入操作类
require_once(ADMIN_INC.'/action.class.php');


//添加图片信息
if($action == 'add')
{
	//栏目权限验证
	IsCategoryPriv($classid,'add');



	//获取parentstr
	$row = $dosql->GetOne("SELECT `parentid` FROM `#@__diyfield` WHERE `id`=$classid");
	$parentid = $row['parentid'];

	if($parentid == 0)
	{
		$parentstr = '0,';
	}
	else
	{
		$r = $dosql->GetOne("SELECT `parentstr` FROM `#@__diyfield` WHERE `id`=$parentid");
		$parentstr = $r['parentstr'].$parentid.',';
	}


	//保存远程缩略图
	//if($rempic=='true' &&
	  // preg_match("#^http:\/\/#i", $picurl))
	//{
		//$picurl = GetRemPic($picurl);
	//}


	//自动缩略图处理
	$r = $dosql->GetOne("SELECT `picwidth`,`picheight` FROM `#@__diyfield` WHERE `id`=$classid");
	if(!empty($r['picwidth']) &&
	   !empty($r['picheight']))
	{
		ImageResize(PHPMYWIND_ROOT.'/'.$picurl, $r['picwidth'], $r['picheight']);
	}


	$posttime = GetMkTime($posttime);


	//自定义字段处理
	$fieldname  = '';
	$fieldvalue = '';
	$fieldstr   = '';

	$dosql->Execute("SELECT * FROM `#@__diyfield` WHERE infotype=$modelid AND checkinfo=true ORDER BY orderid ASC");
	while($row = $dosql->GetArray())
	{
		$k = $row['fieldname'];
		$v = isset($_POST[$row['fieldname']]) ? $_POST[$row['fieldname']] : '';

		if(!empty($row['fieldcheck']))
		{
			if(!preg_match($row['fieldcheck'], $v))
			{
				ShowMsg($row['fieldcback']);
				exit();
			}
		}

		if($row['fieldtype'] == 'datetime')
		{
			$v = GetMkTime($v);
		}
		if($row['fieldtype'] == 'fileall' or $row['fieldtype'] == 'checkbox')
		{
			@$v = implode(',',$v);
		}
		$fieldname  .= ", $k";
		$fieldvalue .= ", '$v'";
		$fieldstr   .= ", $k='$v'";
	}


	$sql = "INSERT INTO `$tbname` (siteid, classid, parentid, parentstr,  picurl, orderid, posttime,content,en_content,title,en_title,picurl,big_picurl, checkinfo {$fieldname}) VALUES ('$cfg_siteid', '$classid', '$parentid', '$parentstr', '$picurl', '$orderid', '$posttime','$content','$en_content','$title','$en_title','$picurl','$big_picurl', '$checkinfo' {$fieldvalue})";
	if($dosql->ExecNoneQuery($sql))
	{
		header("location:$gourl");
		exit();
	}
}


//修改图片信息
else if($action == 'update')
{
	//栏目权限验证
	IsCategoryPriv($cid,'update');


	//获取parentstr
	$row = $dosql->GetOne("SELECT `parentid` FROM `#@__diyfield` WHERE `id`=$classid");
	$parentid = $row['parentid'];

	if($parentid == 0)
	{
		$parentstr = '0,';
	}
	else
	{
		$r = $dosql->GetOne("SELECT `parentstr` FROM `#@__diyfield` WHERE `id`=$parentid");
		$parentstr = $r['parentstr'].$parentid.',';
	}


	//保存远程缩略图
	if($rempic=='true' &&
	   preg_match("#^http:\/\/#i", $picurl))
	{
		$picurl = GetRemPic($picurl);
	}


	//自动缩略图处理
	$r = $dosql->GetOne("SELECT `picwidth`,`picheight` FROM `#@__diyfield` WHERE `id`=$classid");
	if(!empty($r['picwidth']) &&
	   !empty($r['picheight']))
	{
		ImageResize(PHPMYWIND_ROOT.'/'.$picurl, $r['picwidth'], $r['picheight']);
	}


	$posttime = GetMkTime($posttime);


	//自定义字段处理
	$fieldname  = '';
	$fieldvalue = '';
	$fieldstr   = '';

	$dosql->Execute("SELECT * FROM `#@__diyfield` WHERE infotype=$modelid AND checkinfo=true ORDER BY orderid ASC");
	while($row = $dosql->GetArray())
	{
		$k = $row['fieldname'];
		$v = isset($_POST[$row['fieldname']]) ? $_POST[$row['fieldname']] : '';

		if(!empty($row['fieldcheck']))
		{
			if(!preg_match($row['fieldcheck'], $v))
			{
				ShowMsg($row['fieldcback']);
				exit();
			}
		}

		if($row['fieldtype'] == 'datetime')
		{
			$v = GetMkTime($v);
		}
		if($row['fieldtype'] == 'fileall' or $row['fieldtype'] == 'checkbox')
		{
			@$v = implode(',',$v);
		}
		$fieldname  .= ", $k";
		$fieldvalue .= ", '$v'";
		$fieldstr   .= ", $k='$v'";
	}


	$sql = "UPDATE `$tbname` SET siteid='$cfg_siteid', classid='$classid', parentid='$parentid', parentstr='$parentstr', picurl='$picurl', orderid='$orderid', posttime='$posttime', checkinfo='$checkinfo',content='$content',en_content='$en_content',title='$title',en_title='$en_title',picurl='$picurl',big_picurl='$big_picurl' {$fieldstr} WHERE id=$id";
	if($dosql->ExecNoneQuery($sql))
	{
		header("location:$gourl");
		exit();
	}
}


//无状态返回
else
{
	header("location:$gourl");
	exit();
}
?>
