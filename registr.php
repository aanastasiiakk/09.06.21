<head>
<title> Семейный бюджет </title>
<style>
* { margin: 0;
    padding: 0;
	box-sizing: border-box;}
.conteiner {   background: #2F4F4F;
border: 2px solid #0075b2;
height: 275px;
width: 200px;
color: #fff;
margin: 30px;
font:17px Tahoma;
position: absolute;
top: 50px;
 left: 2px;
 }
h2 {border-bottom: 1px solid #fff;
height: 60px;
padding: 10px 20px;}
input [ type="submit"] {background: white:;
margin: 25px 7px;
border: none;
padding: 3px;
position: absolute;
}

.c {   background:  #2F4F4F;
border: 2px solid #0075b2;
height: 275px;
width: 200px;
color: #fff;
margin: 30px;
font:17px Tahoma;
position: relative;
top: 15px;
 left: -29px;
}
h2 {border-bottom: 1px solid #fff;
height: 60px;
}
input [ type="submit"] {background: white;
border: none;
}
h1 {
position: relative;
top: 5px;
left: 10px;}

</style>
</head>
<body>
<h1>Famaly budget<h1>
<form action="registr.php" method="post">
 <div class="conteiner">
 <h2>For adult</h2>
 <label><p>e-mail</p><input type="email" name="first and last name"></label>
 <label><p>password</p><input type="password" name="password"></label>
 <label><p>again</p><input type="password" name="password"></label>
 <div class="submit"><input type="submit" value="send"></div>
 <p>Если вы зарегистрированы нажмите <a href="avtor.php">Войти</a>.</p>
 
  <div class="c">
 <h2>For kids</h2>
 <label><p>e-mail</p><input type="email" name="first and last name"></label>
 <label><p>password</p><input type="password" name="password"></label>
 <label><p>again</p><input type="password" name="password"></label>
 <div class="submit"><input type="submit" value="send"></div>
 <p>Если вы зарегистрированы нажмите <a href="avtor.php">Войти</a>.</p>
 </form><br>
 </div>
</body> 
</html>