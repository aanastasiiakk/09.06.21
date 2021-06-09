<head>
<title> Семейный бюджет </title>
<style>


</style>
</head>
<body>
<form name="feedback" method="POST" action="adult.php">
    <label>
        Введите расходы на транспорт:
        <input type="number" name="transport">
    </label><br>
	 <label>
        Введите расходы на питание:
        <input type="number" name="pitanie">
    </label><br>
	 <label>
        Введите расходы на развлечения:
        <input type="number" name="razvlechenie">
    </label><br>
    <button type="submit" name="time">Посчитать расходы</button><br>
</form>
 
<?php
if (isset($_POST['transport']) && $_POST['pitanie']&& $_POST['razvlechenie']&& $_POST['time'] !== '') {
    $transport = $_POST['transport'];
	$pitanie = $_POST['pitanie'];
	$razvlechenie = $_POST['razvlechenie'];
    $hour =  $transport+$pitanie+$razvlechenie;
	 echo "Ежемесячные расходы на детей =  " , $hour;
	
}

?>
</body> 
</html>