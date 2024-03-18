<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['ФИО'];
    $dob = $_POST['Дата'];
    $address = $_POST['Адрес'];
    $email = $_POST['Почта'];
    $phone = $_POST['Телефон'];

    $to = "steamdavid2007@gmail.com";
    $subject = "Новая заявка с формы";
    $message = "Имя: $name\n";
    $message .= "Дата рождения: $dob\n";
    $message .= "Адрес: $address\n";
    $message .= "Email: $email\n";
    $message .= "Телефон: $phone\n";

    $headers = "From: your_email@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Данные успешно отправлены.";
    } else {
        echo "Ошибка при отправке данных.";
    }
}
?>