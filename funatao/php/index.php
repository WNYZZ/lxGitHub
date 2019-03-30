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

	<link href="css/banner.css" rel="stylesheet" type="text/css" />
</head>
	<link href="css/lain.css" rel="stylesheet" type="text/css" />
	<link href="css/css.css" rel="stylesheet" type="text/css" />





<body>

<!------------------top-------------------------------------------------------------->
<?php require_once('comm/top.php'); ?>


    <div class="a100" style="width:100%;overflow:hidden;">
        <ul class="ind_banner">

            <div id="focus">
                <ul>

		<?php
        $dopage->GetPage("SELECT * FROM `#@__pic` WHERE classid='70'    ORDER BY orderid asc",999);
 		while($row = $dosql->GetArray())
        {
        ?>
                <li><img src="<?php echo $row['picurl']; ?>"  /></li>
		<?php 
 
		}?>                    
                </ul>
            </div>

        </ul>
    </div>
 


    <script type="text/javascript" src="js/banner.js"></script>









    <div class="a100">
        <div class="main_index">
      
                <ul class="ind_title_en">ABOUT <span>US</span></ul>

                <ul class="ind_title_cn">峰德义工业</ul>
                <ul class="ind_con">

                    佛山市南海峰德义机电设备有限公司是一家集研发、制造、销售为一体的工贸公司。公司成立于2010年，位于“中国工业百强县区”之一的广东佛山南海。厂房占地面积3500平方米，2015年获得
                    自主研发国家专利16项。主营产品包括直缝氩弧焊机、环缝焊机、点焊机、闪光对焊机、滚焊机、线网龙门焊机以及各个行业的非标定制焊接设备，设备适用于铝合金、灯饰制品、不锈钢、五金、
                    厨房设备和家用电器等产品的专用焊接。公司在设计、研发、生产焊接切割设备专业领域保有业界领先地位， 峰德义品牌在国内外颇具影响力。设备远销俄罗斯、美国、巴基斯坦、巴西、印尼、
                    印度等70多国家和地区。峰德义机电设备有限公司作为国内先进焊接设备制造厂商，致力于为众企业提供最优质的自动化焊接解决方案。


                </ul>
    
        </div>
    </div>
    <div class="clear0"></div>
    <div class="a100"><div class="index_tiao"></div></div>

    <div class="clear1"></div>

    <div class="a100">
        <div class="main_index">

            <ul class="ind_title_en">Case<span>study</span></ul>

            <ul class="ind_title_cn">我们的产品</ul>
            <ul class="ind_pro">

 
            


 

 
 				<?php
				$sql = "SELECT * FROM `#@__infoimg` WHERE parentid=5 AND delstate='' AND checkinfo=true ORDER BY orderid DESC";
				$dopage->GetPage($sql,8);
				while($row = $dosql->GetArray())
				{
					if($row['picurl'] != '') $picurl = $row['picurl'];
					else $picurl = 'templates/default/images/nofoundpic.gif';
					
					if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'product_show.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'productshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];
				?>

                    <a class="ind_pro_a" href="<?php echo $gourl; ?>" target="_blank">
                        <img src="<?php echo $row['picurl']; ?>">
                        <div class="product_title"><?php echo ReStrLen($row[$lang.'title'],15); ?></div>
                    </a>
				<?php }?>
 
    
    

            </ul>
            <a href="product.php" class="ind_more">查看更多</a>

        </div>
    </div>





    <div class="a100">
        <div class="main_index">
 
                <div class="ind_about ind_icon1">
                    提升产品质量</br>
                    <ul class="ind_about_con">采用自动化焊接时，每个焊点的焊接参数都是恒定的，焊点质量受人为因素影响较小，降低了对工人操作技术的要求，因此焊接质量稳定。</ul>
                </div>
                <div class="ind_about ind_icon2">
                    降低生产成本</br>
                    <ul class="ind_about_con">焊接自动化装备具有的高效率、高稳定性优势使得制造厂商可以较快的收回焊接系统的投入成本。</ul>
                </div>
                <div class="ind_about ind_icon3">
                    提升焊接效率</br>
                    <ul class="ind_about_con">焊接加工的自动化对企业节约成本，提高效率并实现可持续性高速发展。大幅提高生产效率的同时降低了操作者的劳动强度。</ul>
                </div>
                <div class="ind_about ind_icon4">
                    缩短生产周期</br>
                    <ul class="ind_about_con">容易控制产品产量，使产品制造周期缩短，使企业实现快速生产，提升企业在市场竞争力。</ul>
                </div>

        </div>

    </div>
    <div class="clear0"></div>

    <div class="a100">
        <div class="main_index main_service">

            <ul class="ind_title_en">Our <span>service</span></ul>

            <ul class="ind_title_cn">我们的服务</ul>
            <ul class="ind_service">


                <div class="ind_service_list"   >
                    <img src="images/ind_service1.jpg">
                    <ul class="ind_service_title">节约预期成本</ul>
                    <ul class="ind_service_con">我们拥有一支经验丰富的技术研发团队，20年点焊机经验，9年工业机器人设计经验，从客户产品出发点去解决问题，为客户节省预算，避免错误投资。</ul>
                </div>
                <div class="ind_service_list">
                    <img src="images/ind_service2.jpg">
                    <ul class="ind_service_title">节约预期成本</ul>
                    <ul class="ind_service_con">为您提供省钱、合适的点焊机和焊接机器人，原材料均采用德国、日本等国家进口材料加工。厂家直销价格，一手货源无中间环节，让利给客户，价格优惠。</ul>
                </div>
                <div class="ind_service_list">
                    <img src="images/ind_service3.jpg">
                    <ul class="ind_service_title">节约预期成本</ul>
                    <ul class="ind_service_con">用专业的技术，造有质量的产品。生产流程历经多道专业化工序，元器件精密加工，系统化机身组装，严格的老化测试，保障每台设备都是优质的合格产品。</ul>
                </div>
                <div class="ind_service_list">
                    <img src="images/ind_service4.jpg">
                    <ul class="ind_service_title">节约预期成本</ul>
                    <ul class="ind_service_con">到达客户现场进行免费安装与调试，提供一年免费保修，终生维护。全国各大中城市成立了区域办事处和服务点，快速响应客户需求，免除您的后顾之忧。</ul>
                </div>

            </ul>
 

        </div>
    </div>
    <div class="clear0"></div>


    <div class="a100">
 
 
            <div class="main_index">
                <ul class="ind_title_en">Latest  <span>news</span></ul>
                <ul class="ind_title_cn">新闻资讯</ul>
                <ul class="ind_news">
                
				<?php
 				$sql = "SELECT * FROM `#@__infolist` WHERE                    delstate='' AND checkinfo=true ORDER BY orderid DESC";
				$dopage->GetPage($sql,3);
				while($row = $dosql->GetArray())
				{
				?>
                    <a class="ind_news_list" href="news_show.php?cid=<?php echo $row['classid']; ?>&id=<?php echo $row['id']; ?>" target="_blank">
                        <div class="news_time">
                            <ul class="news_d"><?php echo date("d" , $row['posttime']); ?></ul>
                            <ul class="news_y"><?php echo date("Y-m" , $row['posttime']);  ?></ul>
                        </div>
                        <div class="news_con">
                            <ul class="news_title"><?php echo $row[$lang.'title']; ?></ul>
                            <ul class="news_wenzi"><?php echo $row[$lang.'content']; ?></ul>
                        </div>
                    </a>
				<?php  }?>	

                 </ul>

            </div>






        </div>
    <div class="clear0"></div>
    <div class="a100"  style="background:url(../images/ind_conatct_bg.jpg) no-repeat center;">
        <div class="index_contact">

            <ul class="ind_title_en">CONTACT US</ul>
            <ul class="ind_title_cn">联系我们</ul>

            <ul class="a100">


                <div class="ind_contact_icon ind_contact_icon1"  style="margin-left:0px;">
                    <ul class="ind_contact_title">地址</ul>
                    <ul class="ind_contact_con">佛山市南海区狮山镇罗村联星南房工业区环区路自编A8号</ul>
                </div>

                <div class="ind_contact_icon ind_contact_icon2">
                    <ul class="ind_contact_title">邮箱</ul>
                    <ul class="ind_contact_con">fs-fengyi@163.com</ul>
                </div>

                <div class="ind_contact_icon ind_contact_icon3">
                    <ul class="ind_contact_title">电话</ul>
                    <ul class="ind_contact_con">0757-82526318</ul>
                </div>

            </ul>


        </div>
    </div>
    <style>.clear150{ height:0PX;}</style>


    <div class="a100">
        <div class="clear150"></div>
    </div>

    <!------------------foot-------------------------------------------------------------->
<?php require_once('comm/foot.php'); ?>
 

</body>
</html>
