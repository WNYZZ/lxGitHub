<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('syscount'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>数据统计</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/mgr.func.js"></script>
</head>
<body>
<div class="mgr_header"> <span class="title">数据统计</span> <span class="reload"><a href="javascript:location.reload();">刷新</a></span> </div>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="mgr_table">
	<tr align="center" class="thead">
		<td width="10%" height="30">模块名称</td>
		<td width="20%">数据量</td>
		<td width="20%">最后操作</td>
	</tr>
	<tr align="center">
		<td height="45" colspan="3"><strong class="sysCountNum">网站系统管理</strong></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">管理员管理</td>
		<td><?php echo $dosql->GetTableRow('#@__admin'); ?></td>
		<td class="number"><?php echo GetLastEventTime('admin'); ?></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">管理组管理</td>
		<td><?php echo $dosql->GetTableRow('#@__admingroup'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('admingroup'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">站点配置管理</td>
		<td><?php echo $dosql->GetTableRow('#@__site'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('site'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">网站配置管理</td>
		<td><?php echo $dosql->GetTableRow('#@__webconfig','','varname'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('web_config'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="33">上传附件管理</td>
		<td><?php echo $dosql->GetTableRow('#@__uploads'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('upload_filemgr_sql'); ?></span></td>
	</tr>
	<tr align="center">
		<td height="45" colspan="3"><strong class="sysCountNum">栏目内容管理</strong></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">栏目管理</td>
		<td><?php echo $dosql->GetTableRow('#@__infoclass'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('infoclass'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">二级类别管理</td>
		<td><?php echo $dosql->GetTableRow('#@__maintype'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('maintype'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">单页信息管理</td>
		<td><?php echo $dosql->GetTableRow('#@__info'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('info'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">列表信息管理</td>
		<td><?php echo $dosql->GetTableRow('#@__infolist'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('infolist'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">图片信息管理</td>
		<td><?php echo $dosql->GetTableRow('#@__infoimg'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('infoimg'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">软件下载管理</td>
		<td><?php echo $dosql->GetTableRow('#@__soft'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('soft'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">信息标记管理</td>
		<td><?php echo $dosql->GetTableRow('#@__infoflag'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('infoflag'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">信息来源管理</td>
		<td><?php echo $dosql->GetTableRow('#@__infosrc'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('infosrc'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">碎片数据管理</td>
		<td><?php echo $dosql->GetTableRow('#@__fragment'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('fragment'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">自定义菜单项</td>
		<td><?php echo $dosql->GetTableRow('#@__diymenu'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('diymenu'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">自定义模型</td>
		<td><?php echo $dosql->GetTableRow('#@__diymodel'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('diymodel'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">自定义字段</td>
		<td><?php echo $dosql->GetTableRow('#@__diyfield'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('diyfield'); ?></span></td>
	</tr>
	<tr align="center">
		<td height="45" colspan="3"><strong class="sysCountNum">模块扩展管理</strong></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">用户管理</td>
		<td><?php echo $dosql->GetTableRow('#@__member'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('member'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">用户组管理</td>
		<td><?php echo $dosql->GetTableRow('#@__usergroup'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('usergroup'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">用户收藏管理</td>
		<td><?php echo $dosql->GetTableRow('#@__userfavorite'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('userfavorite'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">用户评论管理</td>
		<td><?php echo $dosql->GetTableRow('#@__usercomment'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('usercomment'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">留言模块管理</td>
		<td><?php echo $dosql->GetTableRow('#@__message'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('message'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">广告模块管理</td>
		<td><?php echo $dosql->GetTableRow('#@__admanage'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('admanage'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">广告位管理</td>
		<td><?php echo $dosql->GetTableRow('#@__adtype'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('adtype'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">友情链接管理</td>
		<td><?php echo $dosql->GetTableRow('#@__weblink'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('weblink'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">友情链接类型</td>
		<td><?php echo $dosql->GetTableRow('#@__weblinktype'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('weblinktype'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">招聘模块管理</td>
		<td><?php echo $dosql->GetTableRow('#@__job'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('job'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">投票模块管理</td>
		<td><?php echo $dosql->GetTableRow('#@__vote'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('vote'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">级联数据管理</td>
		<td><?php echo $dosql->GetTableRow('#@__cascadedata'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('cascade'); ?></span></td>
	</tr>
	<tr align="center">
		<td height="45" colspan="3"><strong class="sysCountNum">商品订单管理</strong></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">商品类别管理</td>
		<td><?php echo $dosql->GetTableRow('#@__goodstype'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('goodstype'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">品牌类型管理</td>
		<td><?php echo $dosql->GetTableRow('#@__goodsbrand'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('goodsbrand'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">商品列表管理</td>
		<td><?php echo $dosql->GetTableRow('#@__goods'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('goods'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">商品信息属性</td>
		<td><?php echo $dosql->GetTableRow('#@__goodsflag'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('goodsflag'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">商品订单管理</td>
		<td><?php echo $dosql->GetTableRow('#@__goodsorder'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('goodsorder'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">配送方式管理</td>
		<td><?php echo $dosql->GetTableRow('#@__postmode'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('postmode'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">支付方式管理</td>
		<td><?php echo $dosql->GetTableRow('#@__paymode'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('paymode'); ?></span></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">货到方式管理</td>
		<td><?php echo $dosql->GetTableRow('#@__getmode'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('getmode'); ?></span></td>
	</tr>
	<tr align="center">
		<td height="45" colspan="3"><strong class="sysCountNum">界面模板管理</strong></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">导航菜单设置</td>
		<td><?php echo $dosql->GetTableRow('#@__nav'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('nav'); ?></span></td>
	</tr>
	<tr align="center">
		<td height="45" colspan="3"><strong class="sysCountNum">帮助与更新</strong></td>
	</tr>
	<tr align="center" class="mgr_tr">
		<td height="30">操作日志管理</td>
		<td><?php echo $dosql->GetTableRow('#@__sysevent'); ?></td>
		<td><span class="number"><?php echo GetLastEventTime('sysevent'); ?></span></td>
	</tr>
</table>
<div class="mgr_divb"></div>
<div class="page_area">
	<div class="page_info">共有<span>5</span>大项<span>39</span>个小项</div>
</div>
<?php

//获取模块最后操作时间
function GetLastEventTime($m='')
{
	global $dosql;
	
	$r = $dosql->GetOne("SELECT MAX(posttime) as time FROM `#@__sysevent` WHERE `id`<>0 AND `model`='$m'");

	if(isset($r['time']))
		return GetDateTime($r['time']);
	else
		return '暂无最新更新';
}

?>
</body>
</html>