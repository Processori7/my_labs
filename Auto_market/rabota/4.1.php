<html> 
<head> <title>"Web-программирование" - Работа 8 </title> 
<meta name='viewport' content='width=device-width, initialscale=1.0' charset='utf-8'> 
<link rel="stylesheet" type="text/css" href="../scripts/main.css">
</head> 
<body> 
<h1>Задание №4</h1> 
<h2>Определить  коды  владельцев  автомобилей  указанной  марки, 
зарегистрированных в указанном году.</h2>
<?php 
$Car_mark = $_REQUEST['Car_mark'];     
$Reg_date  = $_REQUEST['Reg_date'];


$handle = new mysqli('localhost', 'root', '','auto_base') or die(); 
$query = "SELECT Code_vl, Car_mark, Reg_date FROM auto WHERE Car_mark = '$Car_mark' AND Reg_date = '$Reg_date';"; 
$result = $handle->query($query); 

if($result){ 
 if ($result->num_rows> 0) {
   //echo "Record was found"; 
 }else{ 
   //echo "No record found";
 } 
}else{
      echo "Error in ".$query."<br>".$handle->error;
    }
$numresult=$result->num_rows; 



echo '<p>Количество записей в БД - '.$numresult; 
echo '<table border=1>'; 
echo '<tr><th>Код владельца</th>';  
for ($i=0;$i<$numresult;$i++) 
{ $row=$result->fetch_assoc(); 
echo '<tr><td>'.$row['Code_vl']; 
} 
echo '</table>' ;
?> 
<p><a href='zadania.html'>Перейти к заданиям</a> 
</body> 
</html>