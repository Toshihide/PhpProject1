<?php
 if ($_POST["submit"]!="")
 {
  if ($_POST["file_name"]=="none")
  {
   print("ファイル名が入力されていません。<BR>\n");
   exit;
  }
  $file_name = $_POST["file_name"];
  if ($_FILES["upfile"]["tmp_name"]=="none")
  {
   print("ファイルのアップロードができませんでした。<BR>\n");
   exit;
  }
  $fp = fopen($_FILES["upfile"]["tmp_name"], "rb");
  if(!$fp)
  {
   print("アップロードしたファイルを開けませんでした");
   exit;
  }
  $imgdat = fread($fp, filesize($_FILES["upfile"]["tmp_name"]));
  fclose($fp);

  print("ファイルサイズ：{$_FILES["upfile"]["size"]}<BR>\n");
  $len = strlen($imgdat);
  print("データ長 = $len<BR>");

  $imgdat = addslashes($imgdat);

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
  $sql = "INSERT INTO m_product (ID, Header, Title, Discription, Price, LargeImage, SmallImage, Size, Extension ) values (3, '$file_name', '$file_name', '$file_name', 2800, '$imgdat', '$imgdat', 80, 'jpg')";
//  echo $sql;
  $result = mysql_query($sql);
  if (!$result)
  {
   print("SQLの実行に失敗しました<BR>");
   print(mysql_errno().": ".mysql_error()."<BR>");
   exit;
  }
  mysql_close($con);
 }
?>