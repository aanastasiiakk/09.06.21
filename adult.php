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
        Введите расходы на квартплату:
        <input type="number" name="kvartplata">
    </label><br>
    <button type="submit" name="time">Посчитать расходы</button><br>
</form>
 
<?php
if (isset($_POST['transport']) && $_POST['pitanie']&& $_POST['kvartplata']&& $_POST['time'] !== '') {
    $transport = $_POST['transport'];
	$pitanie = $_POST['pitanie'];
	$kvartplata = $_POST['kvartplata'];
    $hour =  $transport+$pitanie+$kvartplata;
	 echo "Ежемесячные расходы на детей =  " , $hour;
	
}

?>
</body> 
</html>