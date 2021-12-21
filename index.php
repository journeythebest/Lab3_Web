<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <form class="login-form" id="login-form" method="POST" dataset="login-form">
    <div class="form-container">
      <label for="loginForm-email-input">Логин</label>
      <input id="loginForm-email-input" type="email" required="" placeholder="example@example.com">

      <label for="loginForm-password-input">Пароль</label>
      <input id="loginForm-password-input" type="password" required="">

      <input type="submit" value="Войти">

      <div class="button" id="login-form-button-to-signup">Регистрация</div>
      <div class="button" id="exit-form1">Вернуться</div>
    </div>
  </form>
  <form class="login-form" id="signup-form" dataset="singup-form">
    <div class="form-container">
    <label for="signupForm-name-input">Имя</label>
    <input id="signupForm-name-input" type="name" required="" placeholder="Александр" pattern="[А-Яа-яA-Za-z\s-]*" title="Используйте русские или латинские буквы">

    <label for="signupForm-email-input">E-mail</label>
    <input id="signupForm-email-input" type="email" required="" placeholder="example@example.com" title="Введите email">

    <label for="signupForm-phone-input">Телефон</label>
    <input id="signupForm-phone-input" type="text" required="" placeholder="88005553535" pattern="8\d{3}\d{3}\d{2}\d{2}" title="Введите телефон в формате 8**********">

    <label for="signupForm-password-input">Пароль</label>
    <input id="signupForm-password-input" type="password" required="" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" title="Минимум 6 символов. Обязательно наличие букв и цифр">

    <label for="signupForm-passwordRepeat-input" class="form-label password-form-label">Повторите пароль</label>
    <input id="signupForm-passwordRepeat-input" type="password" required="" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="Минимум 8 символов. Обязательно наличие букв и цифр">

    <label for="signupForm-checkbox-input">Соглашение на обработку персональных данных</label>
    <input id="signupForm-checkbox-input" type="checkbox" required="">
                
    <input type="submit" class="form-signup-button" value="Регистрация">

    <div class="button" id="signup-form-button-to-login">Вход</div>

    <div class="button" id="exit-form2">Вернуться</div>
  </div>
  </form>

</head>
<script src="bdScripts.js">
</script>
<body onload="addReviews()">
  <header>
    <a href="index.php">
      Kinopoisk killer
    </a>
    <div class="login-button" id="header_login_button">
      Вход
    </div>
  </header>

  <div class="review-container" id="container">

  </div>

  <div onclick="addReviews()" class="load">Загрузить еще</div>

  <footer>
    <span>journeykiller1@gmail.com</span>
    <a href="https://vk.com/journeyofficial">ВК</a>
  </footer>
</body>
<script src="script.js"></script>
</html>