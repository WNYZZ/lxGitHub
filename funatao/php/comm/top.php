					<?php
					header('Access-Control-Allow-Origin:*');
                    $sql = "SELECT * FROM `#@__infoclass` WHERE (parentid=5 )  ORDER BY orderid asc ";
                    $dopage->GetPage($sql,999);
                    $response = array();
                    while($row = $dosql->GetArray())
                    {

                	 $response[] = $row['classname'];
					 }


					 echo json_encode($response);
					 ?>


