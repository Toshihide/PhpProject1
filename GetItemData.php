<?php
$con=mysql_connect("localhost", "ii", "");
if(!$con){
    print("MySQL�ւ̐ڑ��Ɏ��s���܂���");
    exit;
}
    if(!mysql_select_db("site1")){
    print("�f�[�^�x�[�X�ւ̐ڑ��Ɏ��s���܂���");
    exit;
}

$sql="SELECT ID, Header, Title, Discription, Price, Size, Extension FROM m_product";
$result=mysql_query($sql);
if(!$result)
{
    exit;
}
$currentRow = 0;
while($row=mysql_fetch_row($result))
{
    $rows[$currentRow]["ID"]=$row[0];
    $rows[$currentRow]["Header"]=$row[1];
    $rows[$currentRow]["Title"]=$row[2];
    $rows[$currentRow]["Discription"]=$row[3];
    $rows[$currentRow]["Price"]=$row[4];
    $rows[$currentRow]["Size"]=$row[5];
    $rows[$currentRow]["Extension"]=$row[6];
    $currentRow++;
}
mysql_close($con);
echo json_encode($rows);
//
//  $con = mysql_connect("localhost", "ii", "");
//  if (!$con)
//  {
//   print("�ڑ��Ɏ��s���܂����B");
//   exit;
//  }
//  if (!mysql_select_db("site1"))
//  {
//   print("�f�[�^�x�[�X���I���ł��܂���ł����B");
//   exit;
//  }
//  $sql = "SELECT ID, Header, Title, Discription, Price, Size, Extension FROM m_product";
//  $result = mysql_query($sql);
//  
//  if (!$result)
//  {
//    print("�N�G���̎��s�Ɏ��s���܂����B<BR>");
//    print(mysql_errno().": ".mysql_error()."<BR>");
//    exit;
//  }
  
?>
