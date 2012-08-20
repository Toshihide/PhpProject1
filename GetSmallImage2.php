<?php

 if ($_GET['id']!="")
 {
  $img_id = $_GET['id'];
  $con = mysql_connect("localhost", "ii", "");
  if (!$con)
  {
   print("MySQLへの接続に失敗しました");
   exit;
  }
  if (!mysql_select_db("site1"))
  {
   print("データベースへの接続に失敗しました");
   exit;
  }
  $sql = "SELECT SmallImage FROM m_product WHERE ID='$img_id'";
  $result = mysql_query($sql);
  if (!$result)
  {
   print("SQLの実行に失敗しました<BR>");
   print(mysql_errno().": ".mysql_error()."<BR>");
   exit;
  }
  $row = mysql_fetch_array($result); 
  mysql_close($con);

  mb_http_output("pass");
  header("Content-type: image/jpeg");
  header("Content-Disposition: inline; filename=image.jpg");
  echo $row[0];
 }
 
?>