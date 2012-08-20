<?php
 if ($_POST["submit"]!="")
 {
  $img_id = $_POST['img_id'];
  echo "<img src=\"DisplayProduct2.php?id=" . $img_id . "\">";
 }
?>