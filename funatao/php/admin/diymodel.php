<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('diymodel'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>自定义模型</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/mgr.func.js"></script>
</head>
<body>
<div class="mgr_header"> <span class="title">自定义模型</span><span class="reload"><a href="javascript:location.reload();">刷新</a></span></div>
<form name="form" id="form" method="post" action="diymodel_save.php">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="mgr_table">
		<tr align="center" class="thead">
			<td width="5%" height="30">ID</td>
			<td width="25%" align="left" class="title">模型名称</td>
			<td width="25%" align="left">模型标识</td>
			<td width="20%" align="left">模型表名</td>
			<td width="25%">操作</td>
		</tr>
		<?php
		$sql = "SELECT * FROM `#@__diymodel`";
		$dopage->GetPage($sql);

		while($row = $dosql->GetArray())
		{
			switch($row['checkinfo'])
			{
				case 'true':
				$checkinfo = '启用';
				break;  
				case 'false':
				$checkinfo = '禁用';
				break;
				default:
				$checkinfo = '没有获取到参数';
			}
		?>
		<tr align="center" class="mgr_tr">
			<td height="30"><?php echo $row['id']; ?></td>
			<td align="left"><span class="title number"><?php echo $row['modelname']; ?></span> <a href="modeldata.php?m=<?php echo $row['modelname']; ?>" title="管理<?php echo $row['modelname']; ?>信息">[进入信息管理]</a></td>
			<td align="left"><?php echo $row['modeltitle']; ?></td>
			<td align="left"><?php echo $row['modeltbname']; ?></td>
		<td class="action"><span>[<a href="diymodel_save.php?id=<?php echo $row['id']; ?>&action=check&checkinfo=<?php echo $row['checkinfo']; ?>" title="点击进行审核与未审操作"><?php echo $checkinfo; ?></a>]</span><span>[<a href="diyfield.php">字段</a>]</span><span>[<a href="diymodel_update.php?id=<?php echo $row['id']; ?>">修改</a>]</span><span>[<a href="diymodel_save.php?action=del&id=<?php echo $row['id']; ?>" onclick="return ConfDel(0)">删除</a>]</span></td>
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
<div class="mgr_divb"><span class="mgr_btn"><a href="diymodel_add.php">添加新模型</a></span> </div>
<div class="pageinfo">
	<?php echo $dopage->GetList(); ?>
</div>
</body>
</html>