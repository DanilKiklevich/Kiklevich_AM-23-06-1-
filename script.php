<?php
  $text_name = $_POST["Name"];
  $text_message = $_POST["description"];
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "test");
$sql = "INSERT INTO recepies(Name, description, pic_url) VALUES('$text_name', '$text_message', 'бабушка.JPG')";
$result=mysqli_query($link, $sql);
echo $result;
header("Location: ".$_SERVER["HTTP_REFERER"]); 
exit;

echo "test";

?>