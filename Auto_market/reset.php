<html> 
<head> <title>"Web-программирование" - Работа 8 </title> 
<meta name='viewport' content='width=device-width, initialscale=1.0' charset='utf-8'> 
<link rel="stylesheet" type="text/css" href="scripts/main.css">
</head> 
<body> 
<?php
$conn = new mysqli("localhost", "root", "", "auto_base");
if($conn->connect_error){
	die("Ошибка: " . $conn->connect_error);
}
$sql = "DELETE FROM auto WHERE ID > 0;";
$clear = "ALTER TABLE auto AUTO_INCREMENT = 1;";
$result = $conn->query($sql);
if ($result) echo "<p>Данные удалены<br>";  
if (!$result) echo('<p>Ошибка');
$result = $conn->query($clear);
if ($result) echo "<p>ID сброшен";  
if (!$result) echo('<p>Ошибка');
// if($conn->query($sql)){
	 
	// header("Location: index.php");
// }
// else{
	// echo "Ошибка: " . $conn->error;
// }
$conn->close();  
?> 
<p><a href='index.php'>На главную</a> 
</body> 
</html>