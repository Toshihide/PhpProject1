<?php
 if ($_POST["submit"]!="")
 {
  if ($_POST["file_name"]=="none")
  {
   print("�ե�����̾�����Ϥ���Ƥ��ޤ���<BR>\n");
   exit;
  }
  $file_name = $_POST["file_name"];
  if ($_FILES["upfile"]["tmp_name"]=="none")
  {
   print("�ե�����Υ��åץ��ɤ��Ǥ��ޤ���Ǥ�����<BR>\n");
   exit;
  }
  $fp = fopen($_FILES["upfile"]["tmp_name"], "rb");
  if(!$fp)
  {
   print("���åץ��ɤ����ե�����򳫤��ޤ���Ǥ���");
   exit;
  }
  $imgdat = fread($fp, filesize($_FILES["upfile"]["tmp_name"]));
  fclose($fp);

  print("�ե����륵������{$_FILES["upfile"]["size"]}<BR>\n");
  $len = strlen($imgdat);
  print("�ǡ���Ĺ = $len<BR>");

  $imgdat = addslashes($imgdat);

  $con = mysql_connect("localhost", "ii", "");
  if (!$con)
  {
   print("MySQL�ؤ���³�˼��Ԥ��ޤ���");
   exit;
  }
  if (!mysql_select_db("site1"))
  {
   print("�ǡ����١����ؤ���³�˼��Ԥ��ޤ���");
   exit;
  }
  $sql = "INSERT INTO m_product (ID, Header, Title, Discription, Price, LargeImage, SmallImage, Size, Extension ) values (3, '$file_name', '$file_name', '$file_name', 2800, '$imgdat', '$imgdat', 80, 'jpg')";
//  echo $sql;
  $result = mysql_query($sql);
  if (!$result)
  {
   print("SQL�μ¹Ԥ˼��Ԥ��ޤ���<BR>");
   print(mysql_errno().": ".mysql_error()."<BR>");
   exit;
  }
  mysql_close($con);
 }
?>