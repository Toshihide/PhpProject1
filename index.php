
<?php

//$con = mysql_connect('localhost', 'ii', '');
//if (!$con) {
//  exit('データベースに接続できませんでした。');
//}
//
//$result = mysql_select_db('site1', $con);
//if (!$result) {
//  exit('データベースを選択できませんでした。');
//}

//$result = mysql_query('SET NAMES utf8', $con);
//if (!$result) {
//  exit('文字コードを指定できませんでした。');
//}
//
//$result = mysql_query('SELECT * FROM m_product', $con); 
$dbserver = "localhost";
$dbuser = "ii";
$passwd = "";
$dbname = "site1";
echo "abcdefg";
//$mysqli = new mysqli($dbserver, $dbuser, $passwd, $dbname);
//$pdo = new PDO($dbserver, $dbname, $dbuser, $passwd);
$pdo = new PDO("mysql:host=localhost; dbname=site1", "ii", "");
//  プリペアードクエリを作成
//$stmt = $mysqli->prepare("SELECT id, header, title, discription, price, largeimage, smallimage, size, extension FROM m_product");
//$stmt = $mysqli->prepare("SELECT ID, Header, Title, Discription, Price, LargeImage, SmallImage, Size, Extension FROM m_product");
//$stmt = $pdo->prepare("SELECT :id, :largeimage FROM m_product");
$stmt = $pdo->prepare("SELECT ID, LargeImage FROM m_product");
////  パラメータをバインド
//$stmt->bind_param(':id', 'ID');
//$stmt->bind_param("header", "Header");
//$stmt->bind_param("title", "Title");
//$stmt->bind_param("discription", "Discription");    
//$stmt->bind_param("price","Price");
//$stmt->bind_param(':largeimage', 'LargeImage');
//$stmt->bind_param("smallimage", "SmallImage");
//$stmt->bind_param("size", "Size");
//$stmt->bind_param("extension", "Extension");

//  クエリ実行
$stmt->execute();

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

$obj = $stmt->fetchObject();
echo $obj->LargeImage;

//  プリペアードクエリ・接続を閉じる
$stmt->close();
//$mysqli->close();
$pdo->close();
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
