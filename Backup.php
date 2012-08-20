
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
//DBから画像データを取得
$result = mysql_query('SELECT SmallImage FROM m_product where ID = \'3\' ', $con); 
if (mysql_num_rows($result))
{   
   $row = mysql_fetch_array($result); 
   mysql_close($con);
   
    //　画像を出力    
    //header('Content-type: '.'image/jpeg'.';');    
//    print header('Content-Type: "image/jpeg")');    
//    //print $data['SmallImage'];               
//    print $data[0];
    
//    header( "Content-Type: " . 'image/jpeg' );
//    header( "Content-Disposition: inline;");
//    header( "Content-Transfer-Encoding: binary");
//    //header( "Content-Length: ". $size );
    mb_http_output("pass");
    //header("Content-type: image/jpeg");
    //header("Content-Disposition: inline; filename=image.jpg");
    echo( $row[0] );
}
//$img = file_get_contents('Jellyfish.jpg');
//$img = imagecreatefromjpeg('./Jellyfish.jpg');
//imagejpeg($img);

//
//// DBから画像データを取得
//$dbserver = "localhost";
//$dbuser = "ii";
//$passwd = "";
//$dbname = "site1";
//$mysqli = new mysqli($dbserver, $dbuser, $passwd, $dbname);
////  プリペアードクエリを作成
//$stmt = $mysqli->prepare('SELECT SmallImage FROM m_product where ID = \'' . $_GET['ID'] . '\'');
////  パラメータをバインド

//  クエリ実行
//$stmt->execute();

//$sql = "select m_content, mime_type from tbl_bin
//  where m_id='".mysql_real_escape_string($id)."' limit 0,1";
//$result = mysql_query($sql);


        //echo serialize($rows);
        //echo json_encode($rows);
//    //　キャッシュを保存
//    $fp = fopen(dirname(__FILE__).'/media/'.$id, 'w');
//    fwrite($fp, $data['m_content']);
//    fclose($fp);
//    while ( $data = mysql_fetch_assoc($result) )
//　画像を出力
//    header('Content-type: '.$data['mime_type'].';')

//else
//{
//    header("HTTP/1.0 404 Not Found");
//    print 'file not found';
//}

//echo json_encode($result);
//
//$stmt = $con->prepare('SET NAMES utf8');
//$stmt->prepare('SELECT * FROM m_product');
//$stmt->execute();
//$stmt->bind_result($id, $header, $title, $discription, $price, $largeimage, $smallimage, $size, $extension);
//
//$currentRow = 0;
//while ($data = mysql_fetch_array($result)) {  
//  $rows[$currentRow]['ID'] = $data['ID'];  
//  $rows[$currentRow]['Header'] = $data['Header'];  
//  $rows[$currentRow]['Title'] = $data['Title'];  
//  $rows[$currentRow]['Discription'] = $data['Discription']; 
//  $rows[$currentRow]['Price'] = $data['Price']; 
//  $rows[$currentRow]['LargeImage'] = $data['LargeImage']; 
//  echo json_encode($data['LargeImage']);
//  $rows[$currentRow]['SmallImage'] = $data['SmallImage']; 
//  $rows[$currentRow]['Size'] = $data['Size']; 
//  echo json_encode($data['Size']);
//  $rows[$currentRow]['Extension'] = $data['Extension'];   
//  $currentRow++;
//}
//$con = mysql_close($con);
//if (!$con) {
//  exit('データベースとの接続を閉じられませんでした。');
//}
//echo json_encode($rows);

//$dbserver = "localhost";
//$dbuser = "ii";
//$passwd = "";
//$dbname = "site1";
//$mysqli = new mysqli($dbserver, $dbuser, $passwd, $dbname);
//$pdo = new PDO($dbserver, $dbname, $dbuser, $passwd);
//$pdo = new PDO("mysql:host=localhost; dbname=site1", "ii", "");
//  プリペアードクエリを作成
//$stmt = $mysqli->prepare("SELECT id, header, title, discription, price, largeimage, smallimage, size, extension FROM m_product");
//$stmt = $mysqli->prepare("SELECT ID, Header, Title, Discription, Price, LargeImage, SmallImage, Size, Extension FROM m_product");
//$stmt = $pdo->prepare("SELECT :id, :largeimage FROM m_product");
//$stmt = $pdo->prepare("SELECT ID, Header, Title, Discription, Price, LargeImage, SmallImage, Size, Extension FROM m_product");
//  クエリ実行
//$stmt->execute();
////  パラメータをバインド
//$stmt->bindColumn(1, $id);
//$stmt->bindColumn(2, $header);
//$stmt->bindColumn(3, $title);
//$stmt->bindColumn(4, $discription);    
//$stmt->bindColumn(5, $price);
//$stmt->bindColumn(6, $largeimage, PDO::PARAM_LOB);
//$stmt->bindColumn(7, $smallimage, PDO::PARAM_LOB);
//$stmt->bindColumn(8, $size);
//$stmt->bindColumn(9, $extension);

//$currentRow = 0;
//while($stmt->fetch())
//{
//    $rows[$currentRow]['ID'] = $id;
//    $rows[$currentRow]['Header'] = $header;
//    $rows[$currentRow]['Title'] = $title;
//    $rows[$currentRow]['Discription'] = $discription;
//    $rows[$currentRow]['Price'] = $price; 
//    $rows[$currentRow]['LargeImage'] = $largeimage;
//    $rows[$currentRow]['SmallImage'] = $smallimage;
//    $rows[$currentRow]['Size'] = $size;
//    $rows[$currentRow]['Extension'] = $extension;
//    $currentRow++;
//}   
//$result = $stmt->fetchObject();

//mysql_fetch_array($result);
//echo json_encode($result);

//  結果をそれぞれ変数にバインド
//$stmt->bind_result($id, $header, $title, $discription, $price, $largeimage, $smallimage, $size, $extension);
//$stmt->bind_result($id, $largeimage);
//  値を取得します
//$stmt->fetch();
//
//$currentRow = 0;
//while ($stmt->fetchObject())
//{
//    $rows[$currentRow]['ID'] = $id;  
//    $rows[$currentRow]['LargeImage'] = $largeimage;
//    $currentRow++;    
//}

//  プリペアードクエリ・接続を閉じる

//$stmt = $con->prepare('SET NAMES utf8');
//$stmt->prepare('SELECT * FROM m_product');
//$stmt->execute();
//$stmt->bind_result($id, $header, $title, $discription, $price, $largeimage, $smallimage, $size, $extension);

//$currentRow = 0;
//while ($data = mysql_fetch_array($result)) {  
//  $rows[$currentRow]['ID'] = $data['ID'];  
//  $rows[$currentRow]['Header'] = $data['Header'];  
//  $rows[$currentRow]['Title'] = $data['Title'];  
//  $rows[$currentRow]['Discription'] = $data['Discription']; 
//  $rows[$currentRow]['Price'] = $data['Price']; 
//  $rows[$currentRow]['LargeImage'] = $data['LargeImage']; 
//  $rows[$currentRow]['SmallImage'] = $data['SmallImage']; 
//  $rows[$currentRow]['Size'] = $data['Size']; 
//  $rows[$currentRow]['Extension'] = $data['Extension'];   
//  $currentRow++;
//}

//$con = mysql_close($con);
//if (!$con) {
//  exit('データベースとの接続を閉じられませんでした。');
//}

//echo json_encode($rows);
?>
