<?php


if (isset($_POST['form'])) { // Это ид кнопки на которую нажмут и сработает php скрипт - Убрать если просто сообщение при заходе на страницу ( внизу скобку убрать }

$name = $_POST['user_name'];// это что ловим с формы 
$phone = $_POST['user_phone']; // это что ловим с формы


$token = "1253277011:AAGGXrlyeSr4A7EIG8LS4LIJzoFQR3qosLw"; // Это ТОКЕН
$chat_id = "-466997802"; // Это ИД группы

$arr = array(

// 'Заказ с сайты: ' => $zakaz,
  'Телефон: ' => $phone,
  'Имя: ' => $name,
  'Мыло' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

// Это условие Если отправлено редирект если нет  ошибка Можно убрать!
if ($sendToTelegram) {
  header('Location: http://f0421388.xsph.ru/');
} else {
  echo "Error";
}
// ид кнопки
}
?>