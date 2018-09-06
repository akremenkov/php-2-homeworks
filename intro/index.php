<?php
  $name = 'Arthur';
  $age = 34;
  $email = 'artbroker@rambler.ru';
  $city = 'Moscow';
  $about = 'BDM';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $name . ' – ' . $about ?></title>
  </head>
  <body>
    <h1>Страница пользователя <?= $name ?></h1>
      <dl>
        <dt>Имя</dt>
        <dd><?= $name ?></dd>
        <dt>Возраст</dt>
        <dd><?= $age ?></dd>
        <dt>Адрес электронной почты</dt>
        <dd><a href="?<?= $email ?>"><?= $email ?></a></dd>
        <dt>Город</dt>
        <dd><?= $city ?></dd>
        <dt>О себе</dt>
        <dd><?= $about ?></dd>
     </dl>
  </body>
</html>
