<html>  
<head>  
<title>"Web-программирование" - Работа 8</title>   
<meta  name='viewport'  content='width=device-width,  initial-
scale=1.0' charset='utf-8'>  
<link rel="stylesheet" type="text/css" href="scripts/main.css">
</head> 
<body> 
<h1>Автосалон (база данных)</h1> 
<h2>Данные клиентов:</h2>   
<?php  $ID = $_REQUEST['ID'];   
 $handle  =  new  mysqli('localhost',  'root',  '', 
'auto_base');    
 $query = "DELETE FROM auto WHERE ID=$ID";   
 $result = $handle->query($query);  
 if ($result) echo '<p> Данные удалены';   
 if (!$result) echo "Ошибка удаления данных";
 $clear = "ALTER TABLE auto AUTO_INCREMENT = 1;";
 $result = $handle->query($clear); 
 if ($clear) echo '<p> ID сброшен';   
 if (!$clear) echo "Ошибка удаления данных";
   
echo "<p><a href='index.php'>На главную</a>";   
?>  
</body> 
</html>   