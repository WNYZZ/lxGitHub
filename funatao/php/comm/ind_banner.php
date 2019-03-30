<div class="a100">
	<ul class="ind_banner">
    
        <div id="focus">
            <ul>
            
		<?php
        $dopage->GetPage("SELECT * FROM `#@__pic` WHERE classid=19    ORDER BY orderid asc",999);
        $i=1;
		while($row = $dosql->GetArray())
        {
        ?>
                <li><img src="<?php echo $row['picurl']; ?>"  width="1920" height="441" /></li>
		<?php 
		$i++;
		}?>
            </ul>
        </div>
    
    </ul>
</div>

<div class="a100" >
	<ul class="key"><span class="title">热门关键词：</span>&nbsp;&nbsp; 修补笔&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家博漆&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;修补工具</ul>
</div>
<style type="text/css">
#focus {width:1920px; height:441px; overflow:hidden; position:relative;}
#focus ul {height:1920px; position:absolute;}
#focus ul li {float:left; width:1920px; height:441px; overflow:hidden; position:relative; background:#000;}
#focus ul li div {position:absolute; overflow:hidden;}
#focus .btnBg {position:absolute; width:800px; height:20px; left:0; bottom:0; background:#000; display:none;}
#focus .btn {position:absolute; width:200px; height:10px; padding:5px 10px; left:50%; margin-left:-100px; bottom:0; text-align:right;}
#focus .btn span {display:inline-block; _display:inline; _zoom:1; width:25px; height:10px; _font-size:0; margin-left:5px; cursor:pointer; background:#fff;}
#focus .btn span.on {background:#fff;}
#focus .preNext {width:45px; height:100px; position:absolute; top:190px; background:url(images/sprite.png) no-repeat 0 0; cursor:pointer;}
#focus .pre {left:50%; margin-left:-500px;}
#focus .next {right:50%; margin-right:-500px; background-position:right top;}
</style>
<script type="text/javascript" src="js/banner.js"></script>
