<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('message'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改留言</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/checkf.func.js"></script>
<script type="text/javascript" src="editor/kindeditor-min.js"></script>
<script type="text/javascript" src="editor/lang/zh_CN.js"></script>
</head>
<body>
<?php
$row = $dosql->GetOne("SELECT * FROM `#@__message` WHERE id=$id");
?>
<div class="gray_header"> <span class="title">修改留言</span> <span class="reload"><a href="javascript:location.reload();">刷新</a></span> </div>
<form name="form" id="form" method="post" action="message_save.php" onsubmit="return cfm_msg();">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form_table">
		<tr>
			<td width="25%" height="35" align="right">用户名：</td>
			<td width="75%"><?php echo $row['nickname'] ?><input type="hidden" name="nickname" id="nickname" value="<?php echo $row['nickname'] ?>" />
				<span class="maroon">*</span><span class="cnote">带<span class="maroon">*</span>号表示为必填项</span></td>
		</tr>
        
        
		<tr>
			<td height="35" align="right">E-mail：</td>
			<td><input type="text" name="email" id="email" class="class_input" value="<?php echo $row['email'] ?>" /></td>
		</tr>
		<tr>
			<td height="35" align="right">联系电话：</td>
			<td><input type="text" name="contact" id="contact" class="class_input" value="<?php echo $row['contact'] ?>" /></td>
		</tr>
		<tr>
			<td height="35" align="right">您的称呼：</td>
			<td><input type="text" name="name" id="name" class="class_input" value="<?php echo $row['name'] ?>" /></td>
		</tr>
        
        
        
        
		<tr class="nb">
			<td height="120" align="right">留言内容：</td>
			<td><textarea name="content" id="content" class="msg_input" style=" width:360px; height:90px;"><?php echo $row['content'] ?></textarea>
				
				</td>
			</td>
		</tr>
        
		<tr>
			<td height="35" align="right">qq：</td>
			<td><input type="text" name="qq" id="qq" class="class_input" value="<?php echo $row['qq'] ?>" /></td>
		</tr>
		<tr>
			<td height="35" align="right">您的公司：</td>
			<td><input type="text" name="company" id="company" class="class_input" value="<?php echo $row['company'] ?>" /></td>
		</tr>
        
        
        
        
		<tr class="nb">
			<td colspan="2" height="26"><div class="line"></div></td>
		</tr>
		<tr>
			<td height="35" align="right">排列排序：</td>
			<td><input type="text" name="orderid" id="orderid" class="input_short" value="<?php echo $row['orderid']; ?>" /></td>
		</tr>
		<tr>
			<td height="35" align="right">更新时间：</td>
			<td><input name="posttime" type="text" class="input_short" id="posttime" value="<?php echo GetDateTime($row['posttime']); ?>" readonly="readonly" />
				<script type="text/javascript" src="plugin/calendar/calendar.js"></script>
				<script type="text/javascript">
				Calendar.setup({
					inputField     :    "posttime",
					ifFormat       :    "%Y-%m-%d %H:%M:%S",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script></td>
		</tr>
		<tr>
			<td height="35" align="right">状　态：</td>
			<td><input id="htop" value="true" type="checkbox" name="htop" <?php if($row['htop']=='true') echo 'checked'; ?> />
				置顶[h]
				<input id="rtop" value="true" type="checkbox" name="rtop" <?php if($row['rtop']=='true') echo 'checked'; ?> />
				推荐[r]</td>
		</tr>
		<tr class="nb">
			<td height="35" align="right">审　核：</td>
			<td><input name="checkinfo" type="radio" value="true" <?php if($row['checkinfo']=='true') echo 'checked'; ?> />
				是
				&nbsp;
				<input name="checkinfo" type="radio" value="false" <?php if($row['checkinfo']=='false') echo 'checked'; ?> />
				否 <span class="cnote">选择“否”则该信息暂时不显示在前台</span></td>
		</tr>
	</table>
	<div class="subbtn_area">
		<input type="submit" class="blue_submit_btn" value="" />
		<input type="button" class="blue_back_btn" value="" onclick="history.go(-1)"  />
		<input name="action" type="hidden" id="action" value="update" />
		<input name="id" type="hidden" id="id" value="<?php echo $id; ?>" />
	</div>
</form>
</body>
</html>