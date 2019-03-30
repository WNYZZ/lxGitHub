				<?php
				$sql = "SELECT * FROM `#@__infoclass` WHERE (parentid=4 )  ORDER BY orderid asc";
				$dopage->GetPage($sql,9);
				while($row = $dosql->GetArray())
				{
				?>
          
                <a <?php if($row['id']==$cid) echo 'class=on';?> href="news.php?cid=<?php echo $row['id']?>"><?php echo ReStrLen($row['classname'],10); ?></a>
 
                
				<?php
				}
				?>