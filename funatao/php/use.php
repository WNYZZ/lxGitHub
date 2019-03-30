<?php require_once(dirname(__FILE__).'/include/config.inc.php');

$cid = empty($cid) ? '' : intval($cid);
$sid = empty($sid) ? '' : intval($sid);

?>

<?php require_once('comm/pagehead.php'); ?>

		<?php
		//SEO
		if($cid=='')
		$rs_meta = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id=5");
		else
		$rs_meta = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id=$cid");
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

<!------------------top-------------------------------------------------------------->
<?php require_once('comm/top.php'); ?>

<!------------------all_right-------------------------------------------------------------->
<?php require_once('comm/all_right.php'); ?>

<!------------------sort_list-------------------------------------------------------------->
<div class="a100" style=" background-color:#f2f2f2; ">
    <ul class="sort_list" style=" background:none;">
    	<li class="big_title">产品家族</li>
    	<li class="pos">您现在的位置：网站首页 >> 产品家族
        <?php
		if($cid!="")
		{
		$r = $dosql->GetOne("SELECT `classname` FROM `#@__infoclass` WHERE  `id`=$cid");
		if(isset($r['classname']))
			echo '>>'.$r['classname'];
		}
		?>
        </li>
    	<li class="sort">

				<?php
				$sql = "SELECT * FROM `#@__infoclass` WHERE (parentid=5 )  ORDER BY orderid asc";
				$dopage->GetPage($sql,99);
				while($row = $dosql->GetArray())
				{
				?>
        	<a class="sort_a" <?php if($row['id']==$cid) echo 'id=here';?> href="product.php?cid=<?php echo $row['id']?>"><?php echo ReStrLen($row['classname'],10); ?></a>
				<?php }?>
         </li>
	</ul>
</div>



<!------------------about_main-------------------------------------------------------------->
<div class="a100" style=" background:#f2f2f2;">
    <ul class="about_main">
    	<li class="news_left">
			<?php $row = $dosql->GetOne("SELECT * FROM `#@__info` WHERE classid=$id");?>
        	<div class="pro_title" style=" height:60px;"><?php echo $row[$lang.'title']; ?></div>
        	<div class="pro_content"><?php echo $row[$lang.'content']; ?></div>  
	 
        <div style=" width:100%; height:10px; clear:both;"></div>
		
		<div class="page_list pages" id="pages_pg_2">
        
        <span class="number">
        <span title="第 1 页"><a href="use.php?cid=6&id=45">[1]</a></span>
        <span title="第 2 页"><a href="use.php?cid=7&id=46">[2]</a></span>
        <span title="第 3 页"><a href="use.php?cid=14&id=47">[3]</a></span>
        <span title="第 4 页"><a href="use.php?cid=26&id=48">[4]</a></span>
        </span>
        
        </div> 
        
        
        </li>
		<?php require_once('comm/right_pro.php'); ?>
        
	</ul>
</div>



<!------------------foot-------------------------------------------------------------->
<?php require_once('comm/foot.php'); ?>




</body>
</html>
