<?php require_once(dirname(__FILE__).'/include/config.inc.php');


					header('Access-Control-Allow-Origin:*');




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





