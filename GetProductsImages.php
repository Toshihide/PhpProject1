<?php

$con = mysql_connect('localhost', 'ii', '');
if (!$con) {
    exit('データベースに接続できませんでした。');
}
$result = mysql_select_db('site1', $con);
if (!$result) {
    exit('データベースを選択できませんでした。');
}
$result = mysql_query('SET NAMES utf8', $con);
if (!$result) {
    exit('文字コードを指定できませんでした。');
}

// DBから画像データを取得
$result = mysql_query('SELECT * FROM m_product', $con); 
//$sql = "select m_content, mime_type from tbl_bin
//  where m_id='".mysql_real_escape_string($id)."' limit 0,1";
//$result = mysql_query($sql);

if (mysql_num_rows($result))
{   
    $currentRow = 0;
    while ($data = mysql_fetch_array($result)) {  
      $rows[$currentRow]['ID'] = $data['ID'];  
      $rows[$currentRow]['Header'] = $data['Header'];  
      $rows[$currentRow]['Title'] = $data['Title'];  
      $rows[$currentRow]['Discription'] = $data['Discription']; 
      $rows[$currentRow]['Price'] = $data['Price']; 
      //$rows[$currentRow]['LargeImage'] = $data['LargeImage']; 
      //$rows[$currentRow]['SmallImage'] = $data['SmallImage']; 
      $rows[$currentRow]['Size'] = $data['Size']; 
      $rows[$currentRow]['Extension'] = $data['Extension'];   
      $currentRow++;
    }
    print json_encode($rows);
}


?>
