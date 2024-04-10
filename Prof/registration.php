<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Регистрация</title>
  <link href="registration.css" rel="stylesheet" type="text/css" />
  <link href="general-style.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="page">

    <div class="header">
      <h2 style="margin:0; padding:0">Проф.образование</h2>
      <button class="user-button">User</button>
    </div>

    <div class="nav">
      <a href="index.html">Главная</a>
    </div>

    <div class="map">
      
      <form action="insert.php" style="border:1px solid #ccc">
        <div class="container">
          <h1>Регистрация</h1>
          <p>Заполните форму для создания вашего аккаунта</p>
          <hr>

          <label for="email"><b>ФИО</b></label>
          <input type="text" placeholder="Введите ФИО" name="fio" required>

          <label for="email"><b>Направление</b></label><br>
          <input type="radio" name="path" value="programmer" checked> Программист<br>
          <input type="radio" name="path" value="engineer"> Инженер<br>
          <input type="radio" name="path" value="lawyer"> Юрист<br><br>

          <label for="email"><b>Номер телефона</b></label>
          <input type="text" placeholder="Введите номер телефона" name="number" required>
          
          <label for="email"><b>Почта</b></label>
          <input type="text" placeholder="Введите почту" name="email" required>

          <label for="psw"><b>Пароль</b></label>
          <input type="password" placeholder="Введите пароль" name="psw" required>

          <p>Создавая аккаунт вы соглашаетесь с нашей политикой конфиденциальности <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="button" class="cancelbtn">Отмена</button>
            <button type="submit" class="signupbtn">Регистрация</button>
          </div>
        </div>
      </form>
      
    </div>

    <footer>
      <h2 style="margin:0; padding:0">Footer</h2>
    </footer>
  </div>

  <script src="script.js"></script>

</body>

</html>