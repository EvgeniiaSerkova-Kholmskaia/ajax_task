<?php
session_start();
$login = $_SESSION['login'];

?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Страница</title>
  </head>
  <body>

    <nav>
      <?php if (isset($login)): ?>
        <a href="logout.php">Выйти</a>
      <?php else: ?>
        <a href="form.php">Войти</a>
      <?php endif; ?>
    </nav>

    <h2>Контент доступен всем пользователям</h2>
    <div id="comment">
      <!-- отобразить то, что отправил пользователь  -->
    </div>
    <?php if (isset($login)): ?>
    <form>
      <div>
        <textarea name="text" placeholder="Введите текст"></textarea>
      </div>
      <input type="submit" value="Добавить">
    </form>
    <?php endif; ?>

    <script src="js/ajax_form.js" charset="utf-8"></script>
  </body>
</html>
