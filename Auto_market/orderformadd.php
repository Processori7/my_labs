<html>
<head> 
<title>"Web-программирование" - Работа 8</title> 
<meta name='viewport' content='width=device-width, initialscale=1.0' charset='utf-8'> 
<link rel="stylesheet" type="text/css" href="scripts/main.css">
</head> 
<body>   
<body> 
<h1>Автосалон (база данных)</h1> 
<p><a href='index.php'>На главную</a> 
<h2>Форма регистрации</h2>
<form action="processorderadd.php" method=post> 
<table border=1> 
<tr> 
<td width=150>Данные 
<td width=15>Значения
<tr> 
<td>Код владельца
<td align=left>
<input type="text" name="Code_vl" size=3 maxlength=10> 
<tr> 
<td>Номер автомобиля
<td align=left><input type="text" name="Car_num" size=3 
maxlength=6> 
<tr> 
<td>Марка автомобиля
<td align=left><input type="text" name="Car_mark" size=15 
maxlength=100> 
<tr> 
<td>Дата выпуска
<td align=center><input type="text" name="Rel_date" size=15> 
<tr> 
<td>Дата регистрации
<td align=center><input type="text" name = "Reg_date" size=15>
<tr>
<td colspan=2 align=center><input type=submit value="Отправить 
данные"></td> 
</table> 
</form> 
</body> 
</html>