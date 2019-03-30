<?php require_once(dirname(__FILE__).'/include/config.inc.php');


					header('Access-Control-Allow-Origin:*');
                    $sql = "SELECT * FROM `#@__diyfield`   ORDER BY orderid asc ";
                    $dopage->GetPage($sql,999);
                    $response = array();

                    while($row = $dosql->GetArray())
                    {

                	 $response['banner'][] = $row['big_picurl'];
					 }


					 echo json_encode($response);
					 ?>





