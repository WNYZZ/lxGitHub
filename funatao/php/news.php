<?php require_once(dirname(__FILE__).'/include/config.inc.php');

$cid = empty($cid) ? '' : intval($cid);
$sid = empty($sid) ? '' : intval($sid);
?> 
<?php require_once('comm/pagehead.php'); ?>

 
 </head>
	<link href="css/lain.css" rel="stylesheet" type="text/css" />
	<link href="css/css.css" rel="stylesheet" type="text/css" />





<body>

<!------------------top-------------------------------------------------------------->
<?php require_once('comm/top.php'); ?>

    <div class="a100" >
        <div class="banner_nei">
		<?php
		$rs_meta = $dosql->GetOne("SELECT * FROM `#@__pic` WHERE id=10");
		if(is_array($rs_meta))
		{
		?>
            <img src="<?php echo $rs_meta['picurl'] ?>" />
       	<?php }?>  
        </div>
    </div>

    <div class="a100">
        <div class="main_news">
            <ul class="nav_left">
				<?php require_once('comm/news_left.php'); ?>
            </ul>
            <ul class="news_right">
				<?php
				if($cid=='')
				$sql = "SELECT * FROM `#@__infolist` WHERE                    delstate='' AND checkinfo=true ORDER BY orderid DESC";
				else
				$sql = "SELECT * FROM `#@__infolist` WHERE classid=$cid  and  delstate='' AND checkinfo=true ORDER BY orderid DESC";
				$dopage->GetPage($sql,9);
				while($row = $dosql->GetArray())
				{
				?>
                <a class="news_list" href="news_show.php?cid=<?php echo $row['classid']; ?>&id=<?php echo $row['id']; ?>" target="_blank">
                    <div class="news_time">
                        <ul class="news_y"><?php echo date("Y-m" , $row['posttime']);  ?></ul>
                        <ul class="news_d"><?php echo date("d" , $row['posttime']); ?></ul>
                    </div>
                    <img src="<?php echo $row['picurl']; ?>">
                    <div class="news_con">
                        <ul class="news_title"><?php echo $row[$lang.'title']; ?></ul>
                        <ul class="news_wenzi"><?php echo $row[$lang.'description']; ?></ul>
                    </div>
                </a>
				<?php  }?>	
                
				<div style=" width:100%; height:10px; clear:both;"></div>
				<?php echo $dopage->GetList(); ?>
            </ul>

        </div>
    </div>


  <?php require_once('comm/foot.php'); ?>

</body>
</html>


