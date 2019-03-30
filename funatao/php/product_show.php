<?php require_once(dirname(__FILE__).'/include/config.inc.php');


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

<!------------------top-------------------------------------------------------------->
<?php require_once('comm/top.php'); ?>

    <div class="a100" >
        <div class="banner_nei">
            		<?php
		//SEO
		$rs_meta = $dosql->GetOne("SELECT * FROM `#@__pic` WHERE id=8");
		if(is_array($rs_meta))
		{
		?>
            <img src="<?php echo $rs_meta['picurl'] ?>" />
       	<?php }?>    
        </div>
    </div>

    <div class="a100">
			<?php
			$row = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE id=$id");
			if(is_array($row))
			{
				//增加一次点击量
				$dosql->ExecNoneQuery("UPDATE `#@__infoimg` SET hits=hits+1 WHERE id=$id");
			?>     

        <div class="main_pro_show">
            <ul class="pro_show_left">
            	<div class="pro_show_title"><?php echo ReStrLen($row[$lang.'title'],15); ?></div>
                <div class="pro_show_sort">产品系列：
					<?php
                    if($cid!="")
                    {
                    $r = $dosql->GetOne("SELECT `classname` FROM `#@__infoclass` WHERE  `id`=$cid");
                    if(isset($r['classname']))
                        echo ''.$r['classname'];
                    }
                    ?>
                </div>
                <div class="pro_show_con"><?php echo $row[$lang.'description']; ?></div>
            </ul>

            <ul class="pro_show_right">
                <img src="<?php echo $row['big_picurl']?>">
            </ul>
        </div>
        <div class="pro_other">
            <div class="pro_other_ban">
                <ul class="other_title">机器实物展示</ul>
                
			<?php
			if($row['picarr'] != '')
			{
				$picarr = unserialize($row['picarr']);
				$i=0;
				foreach($picarr as $v)
				{
					if($i==0||$i==1){
					$v = explode(',', $v);
					echo '<img  src=/'.$v[0].'>';}
					$i++;
				}
			}
            ?>
                
 
            </div>
            <div class="pro_other_ban">
                <ul class="other_title">
                  机器出样展示
                </ul>
			<?php
			if($row['picarr'] != '')
			{
				$picarr = unserialize($row['picarr']);
				$i=0;
				foreach($picarr as $v)
				{
					if($i==2||$i==3){
					$v = explode(',', $v);
					echo '<img  src=/'.$v[0].'>';}
					$i++;
				}
			}
            ?>
            </div>
        </div>
			<?php
			}
			?>
    </div>


  <?php require_once('comm/foot.php'); ?>

</body>
</html>


