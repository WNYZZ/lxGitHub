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


    <div class="a100">
        <div class="banner_nei">
        
		<?php
		//SEO
		$rs_meta = $dosql->GetOne("SELECT * FROM `#@__pic` WHERE id=7");
		if(is_array($rs_meta))
		{
		?>
            <img src="<?php echo $rs_meta['picurl'] ?>" />
       	<?php }?>     
        
        </div>
    </div>

    <div class="a100"  id="tt1">
        <div class="main_about">
			<?php
			//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__info` WHERE classid='16'");
			if(is_array($row))
			{
			?>  
            <ul class="about_left">
                      <div class="about_title_cn"><?php echo $row['title']; ?></div>
      
                <div class="about_title_en"><?php echo $row['en_title']; ?></div>
                <div class="about_con"><?php echo $row[$lang.'content']; ?></div>                
            </ul>

            <ul class="about_right">
                <img src="<?php echo $row['picurl']; ?>">
            </ul>
  			<?php
			}
			?>          
        </div>
    </div>
    <div class="clear0"></div>
    <div class="a100">
        <div class="main_about2">
            
            			<?php
			//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__info` WHERE classid='28'");
			if(is_array($row))
			{
			?>   
            <ul class="about_center">
             
                <div class="about_title_en"><?php echo $row['en_title']; ?></div>
                <div class="about_title_cn"><?php echo $row['title']; ?></div>
                <div class="about_con2"><?php echo $row[$lang.'content']; ?></div>
            </ul>

 
      			<?php
			}
			?>  
            
            <ul class="about_right">
                <div class="about_con about_icon1" style="margin-top:45px;">生产实力、品质保障</div>
                <div class="about_con about_icon2">技术研发实力、个性化定制</div>
                <div class="about_con about_icon3">生产交期保证</div>
                <div class="about_con about_icon4">售后服务保障</div>
            </ul>


        </div>

    </div>
 
    <div class="a100"  id="tt2" style="display:none">
        <div class="main_about">
			<?php
			//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__info` WHERE classid='28'");
			if(is_array($row))
			{
			?>   
            <ul class="about_left">
                <div class="about_title_en"><?php echo $row['en_title']; ?></div>
                <div class="about_title_cn"><?php echo $row['title']; ?></div>
                <div class="about_con"><?php echo $row[$lang.'content']; ?></div>
            </ul>

            <ul class="about_right">
                <img src="images/about_2.jpg">
            </ul>
      			<?php
			}
			?>          
        
        </div>
    </div>
<style>.clear150{ display:none;  }</style>



  <?php require_once('comm/foot.php'); ?>	

</body>
</html>


