<html> 
<head> <title>"Web-программирование" - Работа 8 </title> 
<meta name='viewport' content='width=device-width, initialscale=1.0' charset='utf-8'> 
<link rel="stylesheet" type="text/css" href="scripts/main.css">
</head> 
<body> 
<h1>Автосалон (база данных)</h1> 
<h2>Данные клиентов:</h2> 
<?php 
$handle = new mysqli('localhost', 'root', '','auto_base') or die(); 
$query = "SELECT ID, Code_vl, Car_num, Car_mark, Rel_date, date_format(Reg_date,'%d.%m.%Y') as Reg_date, date_format(Rel_date,'%d.%m.%Y') as Rel_date FROM auto ORDER BY ID ASC"; 
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
echo '<th>Код владельца</th>'; 
echo '<th>Номер автомобиля</th>'; 
echo '<th>Марка автомобиля</th>'; 
echo '<th>Дата выпуска</th>'; 
echo '<th>Дата регистрации</th>'; 
echo '<th></th>'; 
echo '<th></th>'; 
for ($i=0;$i<$numresult;$i++) 
{ $row=$result->fetch_assoc(); 
echo '<tr><td>'.$row['ID']; 
echo '</td><td>'.$row['Code_vl']; 
echo '</td><td>'.$row['Car_num']; 
echo '</td><td>'.$row['Car_mark']; 
echo '</td><td>'.$row['Rel_date']; 
echo '</td><td>'.$row['Reg_date']; 
echo '</td><td>'; 
echo '<form action="delorder.php" method="post">'; 
echo '<input type="hidden" name="ID"
value="'.$row['ID'].'">'; 
echo '<input type="submit" value="Удалить">'; 
echo '</form>'; 
echo '</td><td>'; 
echo '<form action="orderformedit.php" method="post">'; 
echo '<input type="hidden" name="ID" 
value="'.$row['ID'].'">'; 
echo '<input type="submit" value="Изменить">'; 
echo '</form>'; 
} 
echo '</table>' ;
?> 
<p><a href='orderformadd.php'>Добавить данные</a> 
<p><a href="reset.php" onclick="return  confirm('Сейчас будут удалены все данные из БД. Продолжить?')">Обнулить id и удалить все данные</a> 
<p><a href='rabota/zadania.html'>Перейти к заданиям</a> 
</body> 
</html>