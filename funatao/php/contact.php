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
		$rs_meta = $dosql->GetOne("SELECT * FROM `#@__pic` WHERE id=11");
		if(is_array($rs_meta))
		{
		?>
            <img src="<?php echo $rs_meta['picurl'] ?>" />
       	<?php }?>  
        </div>
    </div>

    <div class="a100">
        <div class="main_contact">
            <div class="contact_title_cn">联系方式</div>
            <div class="contact_title_en">CONTACT</div>
            <div class="clear0"></div>
            <ul class="contact_left">

 

                    <div class="company_title_cn">峰德义工业有限公司</div>
                    <div class="company_title_en">FENG DE YI INDUSTRIAL</div>

                    <div class="company_con company_icon1" style="margin-top:40px;">佛山市南海区狮山镇罗村联星南房工业区环区路自编A8号</div>
                    <div class="company_con company_icon2">0757-82526318</div>
                    <div class="company_con company_icon3">fs-fengyi@163.com</div>
                    <div class="company_con company_icon4">471982356</div>
			  <img src="images/erweima.jpg" width="150" height="150" class="erweima" />
            </ul>

            <ul class="contact_right">
   
 
 
 
    <!--引用百度地图API-->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=tK9M26G8qByRg75p2LPo2pQ1"></script>
 
  
 
    <!--百度地图容器-->
    <div style="width:700px;height:440px;border:#ccc solid 1px;font-size:12px" id="map"></div>
 
 
  <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(113.10363,23.062204),16);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
        {content:"我的备注",title:"峰德义工业有限公司",imageOffset: {width:0,height:3},position:{lat:23.061938,lng:113.104672}}
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
  </script>
 
          </ul>
        </div>
    </div>
    <div class="clear0"></div>
  




  <?php require_once('comm/foot.php'); ?>

</body>
</html>


