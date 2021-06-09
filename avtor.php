<head>
<title> Семейный бюджет </title>
<style>
* { margin: 0;
    padding: 0;
	box-sizing: border-box;}
.conteiner {   background: #E6E6FA;
border: 2px solid #000000;
height: 275px;
width: 200px;
color: #000000;
margin: 30px;
font:17px Tahoma;}
h2 {border-bottom: 1px solid #fff;
height: 60px;
padding: 10px 20px;}
input [ type="submit"] {background: white:;
margin: 25px 7px;
border: none;
padding: 3px;
position: absolute;
}

.c {   background: #E6E6FA;
border: 2px solid #0075b2;
height: 275px;
width: 200px;
color: #000000;
margin: 30px;
font:17px Tahoma;
position: absolute;
top: 300px;
 left: 2px;
}
h2 {border-bottom: 1px solid #fff;
height: 60px;
}
input [ type="submit"] {background: white;
border: none;
}

</style>
</head>
<body>
<form action="registr.php" method="post">
 <div class="conteiner">
 <h2>Для взрослых</h2><br>
 <label><p>Логин</p><input type="email" name="first name"></label>
 <label><p>Пароль</p><input type="password" name="password"></label><br>
 <button class="btn btn-success" name="do_signup" type="submit"><a href="adult.php">Вход</a></button>
 <p>Если вы не зарегистрированы нажмите <a href="registr.php">Регистрация</a>.</p>
 
  <div class="c">
 <h2>Для детей</h2>
 <label><p>Логин</p><input type="email" name="first and last name"></label>
 <label><p>Пароль</p><input type="password" name="password"></label><br>
  <button class="btn btn-success" name="do_signup" type="submit"><a href="kids.php">Вход</a></button>
  <p>Если вы не зарегистрированы нажмите <a href="registr.php">Регистрация</a>.</p>
 </form><br>
 </div>
</body> 
</html>