<html>
<head>
<title>"Web-программирование" - Работа 8</title>
<meta name='viewport' content='width=device-width, initial-
scale=1.0' charset='utf-8'>
<link rel="stylesheet" type="text/css" href="scripts/main.css">
</head> 
<body> 
<h1>Автосалон (база данных)</h1> 
<h2>Данные клиентов:</h2>   
<?php
$Code_vl = $_REQUEST['Code_vl'];   
$Car_num = $_REQUEST['Car_num'];   
$Car_mark = $_REQUEST['Car_mark'];   
$Rel_date = $_REQUEST['Rel_date'];  
$Reg_date  = $_REQUEST['Reg_date'];

if((!isset($Code_vl))||(!isset($Car_num))||(!isset($Car_mark))||(!isset($Rel_date))||!isset($Reg_date)) {
echo '<p>Вы не указали все данные. Повторите ввод заказа.';
echo '<p><a href="orderformadd.php">К форме оформления</a>';
echo '</body></html>';
exit;
}

$handle = new mysqli('localhost', 'root', '','auto_base');
$query = "INSERT INTO auto (Code_vl, Car_num, Car_mark, Rel_date, Reg_date) VALUES ('$Code_vl', '$Car_num', '$Car_mark',
'$Rel_date', '$Reg_date')";
$result = $handle->query($query);
if ($result) echo "<p>Данные сохранены";
if (!$result) echo "<p>Error in ".$query."<br>".$handle->error;
echo "<p><a href='index.php'>На главную</a>";
?>
</body>
</html>