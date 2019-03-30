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
            <img src="images/banner_video.jpg" />
        </div>
    </div>




 

    <div class="a100">
        <div class="main_video">
				<?php
				if($cid=='')
				$sql = "SELECT * FROM `#@__video`   ORDER BY orderid DESC";
				else
				$sql = "SELECT * FROM `#@__video` WHERE classid=$cid  and  delstate='' AND checkinfo=true ORDER BY orderid DESC";
				$dopage->GetPage($sql,9);
				while($row = $dosql->GetArray())
				{
 
				?>
			<a class="video_a" href="video_show.php?id=<?php echo $row['id']; ?>" target="_blank">
                <img src="<?php echo $row['picurl']; ?>">
                <div class="video_title"><?php echo $row[$lang.'title']; ?></div>
            </a>
                
 
				<?php  }?>	 
                				<div style=" width:100%; height:10px; clear:both;"></div>
				<?php echo $dopage->GetList(); ?>

        </div>
    </div>





     
 


     <div class="clear0"></div>
  <?php require_once('comm/foot.php'); ?>



 </body>
</html>
