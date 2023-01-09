<html> 
<head> <title>"Web-программирование" - Работа 8 </title> 
<meta name='viewport' content='width=device-width, initialscale=1.0' charset='utf-8'> 
<link rel="stylesheet" type="text/css" href="../scripts/main.css">
</head> 
<body> 
<h1>Задание 2</h1> 
<h2>Найти  средний  возраст  по  каждой  из  встречающихся  марок 
автомобилей. </h2> 
<?php 
$handle = new mysqli('localhost', 'root', '','auto_base') or die(); 
$query = "SELECT ID, Car_mark, AVG(YEAR(CURRENT_DATE) - YEAR(Rel_date)) as 'Средний возраст' FROM auto group by Car_mark;"; 
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
echo '<th>Марка автомобиля</th>'; 
echo '<th>Средний возраст</th>'; 
for ($i=0;$i<$numresult;$i++) 
{ $row=$result->fetch_assoc(); 
echo '<tr><td>'.$row['ID']; 
echo '</td><td>'.$row['Car_mark']; 
echo '</td><td>'.$row['Средний возраст'];
} 
echo '</table>' ;
?> 
<p><a href='zadania.html'>Перейти к заданиям</a> 
</body> 
</html>