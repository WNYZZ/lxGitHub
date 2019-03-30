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
		//SEO
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
			//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=$id");
			if(is_array($row))
			{
				//增加一次点击量
				$dosql->ExecNoneQuery("UPDATE `#@__infolist` SET hits=hits+1 WHERE id=$id");
			?>            
                <div class="news_show_title"><?php echo $row[$lang.'title']; ?></div>
                <div class="news_show_time">时间：<?php echo date("Y-m-d" , $row['posttime']);  ?></div>
                <div class="news_show_con"><?php echo $row[$lang.'content']; ?></div>
			<?php
			}
			?>
               

            </ul>

        </div>
    </div>


  <?php require_once('comm/foot.php'); ?>

</body>
</html>


