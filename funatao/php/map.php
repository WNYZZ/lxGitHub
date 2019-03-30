<?php require_once(dirname(__FILE__).'/include/config.inc.php');

$cid = empty($cid) ? '' : intval($cid);
$sid = empty($sid) ? '' : intval($sid);


?>

<?php require_once('comm/pagehead.php'); ?>

		<?php
		//SEO
		$rs_meta = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id=43");
		if(is_array($rs_meta))
		{
			$title = $rs_meta['seotitle'];
			$description = $rs_meta['description'];
			$keywords = $rs_meta['keywords'];
		?>
    <title><?php echo $title ?></title>
    <meta name="description"  content="<?php echo $description ?>" />
    <meta name="keywords" content="<?php echo $keywords ?>" />
    
    
		<?php }?>

</head>
	<link href="css/lain.css" rel="stylesheet" type="text/css" />
	<link href="css/css.css" rel="stylesheet" type="text/css" />

<body>



<li class="left">

 			<div class="map">
            	<a href="map_a" class="map_a" id="map_nav">网站首页</a>
             </div>



 			<div class="map">
            	<a href="map_a" class="map_a" id="map_nav">关于家博</a>
				<?php
				$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE (parentid=2 )  ORDER BY orderid asc");
				while($row = $dosql->GetArray())
				{
				?>     
				<a class="map_a" href="about.php?sid=<?php echo $row['parentid']?>&cid=<?php echo $row['id']?>"><?php echo ReStrLen($row['classname'],12); ?></a>
				<?php }  ?> 
            </div>
 
 			<div class="map">
            	<a href="map_a" class="map_a" id="map_nav">新闻资讯</a>
				<?php
				$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE (parentid=4 )  ORDER BY orderid asc");
				while($row = $dosql->GetArray())
				{
				?>     
				<a class="map_a" href="about.php?sid=<?php echo $row['parentid']?>&cid=<?php echo $row['id']?>"><?php echo ReStrLen($row['classname'],12); ?></a>
				<?php }  ?> 
            </div>
 
 			<div class="map">
            	<a href="map_a" class="map_a" id="map_nav">产品家族</a>
				<?php
				$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE (parentid=5 )  ORDER BY orderid asc");
				while($row = $dosql->GetArray())
				{
				?>     
				<a class="map_a" href="about.php?sid=<?php echo $row['parentid']?>&cid=<?php echo $row['id']?>"><?php echo ReStrLen($row['classname'],12); ?></a>
				<?php }  ?> 
            </div>



 			<div class="map">
            	<a href="map_a" class="map_a" id="map_nav">招商加盟</a>
				<?php
				$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE (parentid=8 )  ORDER BY orderid asc");
				while($row = $dosql->GetArray())
				{
				?>     
				<a class="map_a" href="about.php?sid=<?php echo $row['parentid']?>&cid=<?php echo $row['id']?>"><?php echo ReStrLen($row['classname'],12); ?></a>
				<?php }  ?> 
            </div>


 			<div class="map">
            	<a href="map_a" class="map_a" id="map_nav">留言反馈</a>
             </div>

 			<div class="map">
            	<a href="map_a" class="map_a" id="map_nav">销售网络</a>
             </div>
 			<div class="map">
            	<a href="map_a" class="map_a" id="map_nav">联系我们</a>
				<?php
				$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE (parentid=9 )  ORDER BY orderid asc");
				while($row = $dosql->GetArray())
				{
				?>     
				<a class="map_a" href="about.php?sid=<?php echo $row['parentid']?>&cid=<?php echo $row['id']?>"><?php echo ReStrLen($row['classname'],12); ?></a>
				<?php }  ?> 
            </div>









         </li>


</body>
</html>
