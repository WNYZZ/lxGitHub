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
		$rs_meta = $dosql->GetOne("SELECT * FROM `#@__pic` WHERE id=9");
		if(is_array($rs_meta))
		{
		?>
            <img src="<?php echo $rs_meta['picurl'] ?>" />
       	<?php }?>  
        </div>
    </div>




 

    <div class="a100">
        <div class="main_video">

       <ul class="video_right">
			<?php
			//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__video` WHERE id=$id");
			if(is_array($row))
			{
			?>            
                <div class="video_show_title"><?php echo $row[$lang.'title']; ?></div>
				<div class="video_show_time">时间：<?php echo date("Y-m-d" , $row['posttime']);  ?></div>
  				<div class="video_show_con"> <?php echo $row[$lang.'content']; ?></div>
			<?php
			}
			?>
        
               

            </ul>

        </div>
    </div>

<style>iframe { width:100%; min-height:600px;}</style>



     
 


     <div class="clear0"></div>
  <?php require_once('comm/foot.php'); ?>



 </body>
</html>
