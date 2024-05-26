<?php
// Получение ответа из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST["answer"];

    // Параметры для отправки письма
    $to = "mukanbetsadikovaa@gmail.com";
    $subject = "Тапсырманың жауабы";
    $message = "Жауапт: " . $answer;
    $headers = "From: mukanbetsadykovaaktilek@gmail.com";

    // Отправка письма
    if (mail($to, $subject, $message, $headers)) {
        echo "Жауабыңыз сәтті жіберілді!";
    } else {
        echo "Қате.";
    }
} else {
    // Если запрос не является POST, вернуть ошибку
    echo "Қате: жауаб дұрыс толтырылмады.";
}
?>

