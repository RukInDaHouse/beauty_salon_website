<?php


if (isset($_POST['form'])) { // Это ид кнопки на которую нажмут и сработает php скрипт - Убрать если просто сообщение при заходе на страницу ( внизу скобку убрать }

$name = $_POST['name_input'];// это что ловим с формы 
$phone = $_POST['telephone_input']; // это что ловим с формы


$token = "849452335:AAG_ArG0H2nG-9Ncrn0Aq835oRY2I"; // Это ТОКЕН
$chat_id = "-23534799"; // Это ИД группы

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
  header('Location: url.html');
} else {
  echo "Error";
}
// ид кнопки
}
?>