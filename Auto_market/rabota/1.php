<html> 
<head> <title>"Web-программирование" - Работа 8 </title> 
<meta name='viewport' content='width=device-width, initialscale=1.0' charset='utf-8'> 
<link rel="stylesheet" type="text/css" href="../scripts/main.css">
</head> 
<body> 
<h1>Задание 1</h1> 
<h2>Получить список номеров и марок автомобилей, зарегистрированных в 
ноябре и декабре прошлого года.</h2> 
<?php 
$handle = new mysqli('localhost', 'root', '','auto_base') or die(); 
$query = "SELECT ID, Car_num, Car_mark, Reg_date FROM auto WHERE Reg_date BETWEEN '2021-11-01' AND '2021-12-31'"; 
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
echo '<tr><th>№</th>'; 
echo '<th>Номер автомобиля</th>'; 
echo '<th>Марка автомобиля</th>'; 
echo '<th>Дата регистрации</th>'; 
for ($i=0;$i<$numresult;$i++) 
{ $row=$result->fetch_assoc(); 
echo '<tr><td>'.$row['ID']; 
echo '</td><td>'.$row['Car_num']; 
echo '</td><td>'.$row['Car_mark']; 
echo '</td><td>'.$row['Reg_date']; 
} 
echo '</table>' ;
?> 
<p><a href='zadania.html'>Перейти к заданиям</a> 
</body> 
</html>