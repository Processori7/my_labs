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
 
<form action="processorderedit.php" method=post>   
<table border=1>   
<tr>    
<td width=150>Данные    
<td width=15>Значения
 
<?php   
$ID = $_REQUEST['ID'];   
echo  '<input  type="hidden"  name="ID" 
value="'.$ID.'">';   
$handle  =  new  mysqli('localhost',  'root',  '', 
'auto_base');   
  
$query  =  "SELECT  ID,            	Code_vl,           Car_num,      
Car_mark, Rel_date, Reg_date FROM auto WHERE ID=$ID";    
$result = $handle->query($query);     
$row=$result->fetch_assoc();      

echo '<tr><td>Код владельца<td align=left><input type="text" 
name="Code_vl" size=3 maxlength=10 value='.$row['Code_vl'].'>';  
echo '<tr><td>Номер автмобиля<td align=left><input type="text" 
name="Car_num" size=3 maxlength=6 value='.$row['Car_num'].'>';  
echo '<tr><td>Марка автомобиля<td align=left><input type="text"
name="Car_mark" size=15 maxlength=100 value='.$row['Car_mark'].'>';  
echo '<tr><td>Дата выпуска<td align=center><input type="text" 
name="Rel_date" size=15 
value="'.htmlspecialchars($row['Rel_date']).'">'; 
echo '<tr><td>Дата регистрации<td align=center><input type="text" 
name="Reg_date" size=15 value="'.htmlspecialchars($row['Reg_date']).'">';
?>   
<tr><td colspan=2 align=center> 
<input type=submit value="Изменить данные"></td></tr>   
</table>   
</form>    
</body> 
</html> 