<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('diymodel');

if(!empty($m))
{
	$r = $dosql->GetOne("SELECT * FROM `#@__diymodel` WHERE `modelname`='$m'");
	if(empty($r) && !is_array($r))
	{
		//echo '<script>history.go(-1);</script>';
		echo '第一个';
		exit();

	}
}
else
{
	//echo '<script>history.go(-1);</script>';
	echo '第er个';
	exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $r['modeltitle']; ?>管理</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/mgr.func.js"></script>
</head>
<body>
<div class="mgr_header"> <span class="title"><?php echo $r['modeltitle']; ?></span> <a href="diymodel.php" class="postype">返回模型管理</a> <span class="reload"><a href="javascript:location.reload();">刷新</a></span> </div>
<?php
$fieldArr = array();

$dosql->Execute("SELECT * FROM `#@__diyfield` WHERE `infotype`=".$r['id']." LIMIT 0,2");
while($row = $dosql->GetArray())
{
	$fieldArr[$row['fieldname']] = $row['fieldtitle'];
}
?>
<form name="form" id="form" method="post" action="modeldata_save.php">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="mgr_table">
		<tr align="center" class="thead">
			<td width="5%" height="30" align="center"><input type="checkbox" name="checkid" id="checkid" onclick="CheckAll(this.checked);"></td>
			<td width="10%">小图</td>

			<td width="5%">ID</td>
			<td width="10%">所属栏目</td>
			<?php
			foreach($fieldArr as $k=>$v)
			{
				echo '<td align="left">'.$v.'</td>';
			}
			?>
			<td width="18%">更新时间</td>
			<td width="20%">操作</td>
		</tr>
		<?php

		$dopage->GetPage("SELECT * FROM `".$r['modeltbname']."` WHERE siteid='$cfg_siteid'");
		while($row = $dosql->GetArray())
		{
			//获取类型名称
			$r = $dosql->GetOne("SELECT classname FROM `#@__infoclass` WHERE id=".$row['classid']);

			if(isset($r['classname']))
				$classname = $r['classname'].' ['.$row['classid'].']';
			else
				$classname = '<span class="red">分类已删 ['.$row['classid'].']</span>';


			switch($row['checkinfo'])
			{
				case 'true':
				$checkinfo = '已审';
				break;
				case 'false':
				$checkinfo = '未审';
				break;
				default:
				$checkinfo = '没有获取到参数';
			}
		?>
		<tr align="center" class="mgr_tr">
			<td height="30"><input type="checkbox" name="checkid[]" id="checkid[]" value="<?php echo $row['id']; ?>" /></td>
			<td><img  src="<?php
			if(substr($row['picurl'] , 0 , 4) !='http' )
			echo '../';
			echo $row['picurl']; ?>" style=" width:80px;"/></td>

			<td><?php echo $row['id']; ?></td>
			<td><?php echo $classname; ?></td>
			<?php
			foreach($fieldArr as $k=>$v)
			{
				echo '<td align="left">'.$row[$k].'</td>';
			}
			?>

			<td class="number"><?php echo GetDateTime($row['posttime']); ?></td>
			<td class="action"><span>[<a href="modeldata_save.php?m=<?php echo $m; ?>&id=<?php echo $row['id']; ?>&action=check&checkinfo=<?php echo $row['checkinfo']; ?>" title="点击进行审核与未审操作"><?php echo $checkinfo; ?></a>]</span><span>[<a href="modeldata_update.php?m=<?php echo $m; ?>&id=<?php echo $row['id']; ?>">修改</a>]</span><span>[<a href="modeldata_save.php?m=<?php echo $m; ?>&action=del2&id=<?php echo $row['id']; ?>" onclick="return ConfDel(0);">删除</a>]</span></td>
		</tr>
		<?php
		}
		?>
	</table>
</form>
<?php
if($dosql->GetTotalRow() == 0)
{
	echo '<div class="mgr_nlist">暂时没有相关的记录</div>';
}
?>
<div class="mgr_divb">
	<div class="selall"><span>选择：</span> <a href="javascript:CheckAll(true);">全部</a> - <a href="javascript:CheckAll(false);">无</a> - <a href="javascript:SubUrlParam('modeldata_save.php?m=<?php echo $m; ?>&action=delall2');" onclick="return ConfDelAll(0);">删除</a></div>
	<span class="mgr_btn"><a href="modeldata_add.php?m=<?php echo $m; ?>">添加新信息</a></span>
</div>
<div class="page_area"> <?php echo $dopage->GetList(); ?> </div>
</body>
</html>
