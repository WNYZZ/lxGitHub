<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('infolist'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加列表信息</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/getuploadify.js"></script>
<script type="text/javascript" src="templates/js/checkf.func.js"></script>
<script type="text/javascript" src="templates/js/getjcrop.js"></script>
<script type="text/javascript" src="templates/js/getinfosrc.js"></script>
<script type="text/javascript" src="plugin/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="plugin/calendar/calendar.js"></script>
<script type="text/javascript" src="editor/kindeditor-min.js"></script>
<script type="text/javascript" src="editor/lang/zh_CN.js"></script>
<body>
<div class="gray_header"> <span class="title">添加列表信息</span> <span class="reload"><a href="javascript:location.reload();">刷新</a></span> </div>
<form name="form" id="form" method="post" action="infolist_save.php" onsubmit="return cfm_infolm();">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form_table">
		<tr>
			<td width="25%" height="35" align="right">所属栏目：</td>
			<td width="75%"><select name="classid" id="classid">
					<option value="-1">请选择所属栏目</option>
					<?php CategoryType(1); ?>
				</select>
				<span class="maroon">*</span><span class="cnote">带<span class="maroon">*</span>号表示为必填项</span></td>
		</tr>
		<?php
		if($cfg_maintype == 'Y')
		{
		?>
		<tr>
			<td height="35" align="right">所属类别：</td>
			<td><select name="mainid" id="mainid">
					<option value="-1">请选择所属类别</option>
					<?php GetAllType('#@__maintype','#@__infolist','mainid'); ?>
				</select>
				<span class="maroon">*</span></td>
		</tr>
		<?php
		}
		?>
		<tr>
			<td height="35" align="right">标题（中文）：</td>
			<td><input type="text" name="title" id="title" class="input_title" /></td>
		</tr>
        
		<tr>
			<td height="35" align="right">标题（英文）：</td>
			<td><input type="text" name="en_title" id="en_title" class="input_title" /></td>
		</tr>
		<tr class="nb">
			<td height="35" align="right">属　性：</td>
			<td class="attrArea">
			<?php
			$dosql->Execute("SELECT * FROM `#@__infoflag` ORDER BY orderid ASC");
			while($row = $dosql->GetArray())
			{
				echo '<span><input type="checkbox" name="flag[]" id="flag[]" value="'.$row['flag'].'" />'.$row['flagname'].'['.$row['flag'].']</span>';
			}
			?></td>
		</tr>
		<tr class="nb">
			<td colspan="2" height="26"><div class="line"> </div></td>
		</tr>
		<tr class="nb">
			<td colspan="2" height="0" id="df"><?php if(isset($cid)) echo GetDiyField(1,$cid); ?></td>
		</tr>
		<tr style=" display:none;">
			<td height="35" align="right">文章来源：</td>
			<td><input type="text" name="source" id="source" class="class_input" />
				<span class="srcarea">
					<span class="infosrc">选择
						<ul>
							<?php
							$dosql->Execute("SELECT * FROM `#@__infosrc` ORDER BY `orderid` ASC");
							if($dosql->GetTotalRow() > 0)
							{
								while($row2 = $dosql->GetArray())
								{
							?>
							<li><a href="javascript:;" title="<?php echo $row2['linkurl']; ?>" onclick="GetSrcName('<?php echo $row2['srcname']; ?>');"><?php echo $row2['srcname']; ?></a></li>
							<?php
								}
							}
							else
							{
								echo '<li>暂无来源 <a href="infosrc.php">[添加]</a></li>';
							}
							?>
						</ul>
					</span>
				</span>
			</td>
		</tr>
		<tr style=" display:none;">
			<td height="35" align="right">作者编辑：</td>
			<td><input type="text" name="author" id="author" value="<?php echo GetAuthor(); ?>" class="class_input" /></td>
		</tr>
		<tr>
			<td height="35" align="right">小图：</td>
			<td><input type="text" name="picurl" id="picurl" class="class_input" />
				<span class="cnote"><span class="gray_btn" onclick="GetUploadify('uploadify','缩略图上传','image','image',1,<?php echo $cfg_max_file_size; ?>,'picurl')">上 传</span><span class="reimg">
				<input type="checkbox" name="rempic" id="rempic" value="true" />
				远程</span> <span class="cutimg"><a href="javascript:;" onclick="GetJcrop('jcrop','picurl');return false;">裁剪</a></span><span class="cnote">没有其他图片的情况下，默认小图</span></span></td>
		</tr>
        
        <tr>
			<td height="35" align="right">大图：</td>
			<td><input type="text" name="big_picurl" id="big_picurl" class="class_input" />
				<span class="cnote"><span class="gray_btn" onclick="GetUploadify('uploadify','缩略图上传','image','image',1,<?php echo $cfg_max_file_size; ?>,'big_picurl')">上 传</span><span class="reimg">
				<input type="checkbox" name="rempic" id="rempic" value="true" />
				远程</span> <span class="cutimg"><a href="javascript:;" onclick="GetJcrop('jcrop','picurl');return false;">裁剪</a></span> </span></td>
		</tr>
        
        
        
		<tr>
			<td height="35" align="right">跳转链接：</td>
			<td><input type="text" name="linkurl" class="class_input" id="linkurl" /></td>
		</tr>
		<tr style=" display:none;">
			<td height="35" align="right">关键词：</td>
			<td><input type="text" name="keywords" class="class_input" id="keywords" />
				<span class="cnote">多关键词之间用空格或者“,”隔开</span></td>
		</tr>
		<tr>
			<td height="104" align="right">摘要(中文)：</td>
			<td><textarea name="description" class="class_areadesc" id="description"></textarea>
				<div class="maxtxtlen"> 最多能输入 <strong>255</strong> 个字符 </div></td>
		</tr>
        
        <tr>
			<td height="104" align="right">摘要(英文)：</td>
			<td><textarea name="en_description" class="class_areadesc" id="en_description"></textarea>
				<div class="maxtxtlen"> 最多能输入 <strong>255</strong> 个字符 </div></td>
		</tr>

		<tr>
			<td height="340" align="right">详细内容(中文)：</td>
			<td><textarea name="content" id="content" class="kindeditor"></textarea>
				<script>
				var editor;
				KindEditor.ready(function(K) {
					editor = K.create('textarea[name="content"]', {
						allowFileManager : true,
						width:'667px',
						height:'280px',
						extraFileUploadParams : {
							sessionid :  '<?php echo session_id(); ?>'
						}
					});
				});
				</script>
				</td>
		</tr>
        
		<tr>
			<td height="340" align="right">详细内容(英文)：</td>
			<td><textarea name="en_content" id="en_content" class="kindeditor"></textarea>
				<script>
				var editor;
				KindEditor.ready(function(K) {
					editor = K.create('textarea[name="en_content"]', {
						allowFileManager : true,
						width:'667px',
						height:'280px',
						extraFileUploadParams : {
							sessionid :  '<?php echo session_id(); ?>'
						}
					});
				});
				</script>
				</td>
		</tr>
		<tr class="nb">
			<td colspan="2" height="26"><div class="line"> </div></td>
		</tr>
		<tr>
			<td height="35" align="right">点击次数：</td>
			<td><input type="text" name="hits" id="hits" class="input_short" value="<?php echo mt_rand(50, 200); ?>" /></td>
		</tr>
		<tr>
			<td height="35" align="right">排列排序：</td>
			<td><input type="text" name="orderid" id="orderid" class="input_short" value="<?php echo GetOrderID('#@__infolist'); ?>" /></td>
		</tr>
		<tr>
			<td height="35" align="right">更新时间：</td>
			<td><input name="posttime" type="text" id="posttime" class="input_short" value="<?php echo GetDateTime(time()); ?>" readonly="readonly" />
				<script type="text/javascript">
				date = new Date();
				Calendar.setup({
					inputField     :    "posttime",
					ifFormat       :    "%Y-%m-%d %H:%M:%S",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script></td>
		</tr>
		<tr class="nb">
			<td height="35" align="right">审　核：</td>
			<td><input type="radio" name="checkinfo" value="true" checked="checked"  />
				是 &nbsp;
				<input type="radio" name="checkinfo" value="false" />
				否<span class="cnote">选择“否”则该信息暂时不显示在前台</span></td>
		</tr>
	</table>
	<div class="subbtn_area">
		<input type="submit" class="blue_submit_btn" value="" />
		<input type="button" class="blue_back_btn" value="" onclick="history.go(-1)"  />
		<input type="hidden" name="action" id="action" value="add" />
		<input type="hidden" name="cid" id="cid" value="<?php echo ($cid = isset($cid) ? $cid : ''); ?>" />
	</div>
</form>
</body>
</html>