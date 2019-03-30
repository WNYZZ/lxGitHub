<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('infoclass'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
 
  
	<?php
 	//循环栏目函数
	function Show($id=0, $i=0)
	{
		global $dosql,$cfg_siteid;
		$i++;
		$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE siteid='$cfg_siteid' AND parentid=$id ORDER BY orderid ASC", $id);
		while($row = $dosql->GetArray($id))
		{
			$classname = '<a  >'.$row['classname'].'</a></span>';
	?>
 
	
 
				<?php
				for($n=1; $n<$i; $n++) echo '&nbsp;&nbsp;';
				echo $classname;
				?> 

</br>
	 
	<?php
	Show($row['id'], $i+2);
		}
	}
	Show();
	?>
 
 
 
 
</body>
</html>