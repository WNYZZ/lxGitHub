    	<li class="right">
        
	<?php if((strstr(basename($_SERVER['PHP_SELF']),"product.php"))||(strstr(basename($_SERVER['PHP_SELF']),"product_show.php"))||(strstr(basename($_SERVER['PHP_SELF']),"use.php"))){ ?>
        
        <?php if(($cid==6)||($cid==7)||($cid==23)){?>
        <?php $use = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE  `parentid`=$cid");?>
        	<a class="use"  href="use.php?cid=<?=$cid?>&id=<?php echo $use['id']; ?>" title="<?php echo $use['classname']; ?>">
            	<span class="use_title"> <?php echo ReStrLen($use['classname'],22); ?></span>
            	<img src="<?php echo $use['picurl']; ?>" width="168"  />
            </a>
        <?php }?>
        
	<?php }?>
        
        
        
        
        	<div class="title">推荐产品</div>
				<?php
				$sql = "SELECT * FROM `#@__infoimg` WHERE parentid=5 and flag like '%s%'  AND delstate='' AND checkinfo=true ORDER BY orderid DESC";
				$dopage->GetPage($sql,5);
				while($row = $dosql->GetArray())
				{
					$picurl = $row['picurl'];
					$gourl = 'product_show.php?cid='.$row['classid'].'&id='.$row['id'];
				?>
        	<a class="right_pro"  href="<?php echo $gourl; ?>" title="<?php echo ReStrLen($row[$lang.'title'],80); ?>"><img src="<?php echo $row['picurl']; ?>" width="168" height="126" /></a>
				<?php }?>
        
        </li>



