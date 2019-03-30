<?php require_once(dirname(__FILE__).'/include/config.inc.php');


					header('Access-Control-Allow-Origin:*');

//banner轮播
                    $sql = "SELECT * FROM `#@__diyfield`   ORDER BY orderid asc ";
                    $dopage->GetPage($sql,999);
                    $response = array();

                    while($row = $dosql->GetArray())
                    {

                	 $response['banner'][] = $row['big_picurl'];
					 }



//新品轮播
                    $sql = "SELECT * FROM `#@__infolist` WHERE `flag` LIKE '%c%' ";

                    $dopage->GetPage($sql);

                    while($row = $dosql->GetArray())
                    {

                        $product = array();
                             $product['id'] = $row['id'];
                            $product['picurl'] = $row['picurl'];
                             $product['title'] = $row['title'];
                              $product['en_title'] = $row['en_title'];
                              $product['content'] = $row['content'];
                              $product['en_content'] = $row['en_content'];
                	 $response['newproduct'][] = $product;
					 }



//热卖
                    $sql = "SELECT * FROM `#@__infoimg` WHERE `classid` = 17  and `checkinfo`= true";

                    $dopage->GetPage($sql);

                    while($row = $dosql->GetArray())
                    {

                        $product = array();
                             $product['id'] = $row['id'];
                            $product['picurl'] = $row['picurl'];
                             $product['title'] = $row['title'];
                              $product['en_title'] = $row['en_title'];
                              $product['content'] = $row['content'];
                              $product['en_content'] = $row['en_content'];
                	 $response['product'][] = $product;
					 }

					 echo json_encode($response);
					 ?>





