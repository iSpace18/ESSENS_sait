<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Success</title>
</head>
<body>
    <?php
    // Function to validate and sanitize form data
    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    // Get form data
    $name = clean_input($_POST["ФИО"]);
    $birthdate = clean_input($_POST["Дата"]);
    $address = clean_input($_POST["Адрес"]);
    $email = clean_input($_POST["Почта"]);
    $phone = clean_input($_POST["Телефон"]);

    // Set recipient email address
    $recipient = "steamdavid2007@gmail.com";

    // Set email subject
    $subject = "New Registration";

    // Build the email content
    $email_content = "New registration:\n\n";
    $email_content .= "Name: {$name}\n";
    $email_content .= "Birthdate: {$birthdate}\n";
    $email_content .= "Address: {$address}\n";
    $email_content .= "Email: {$email}\n";
    $email_content .= "Phone: {$phone}\n";

    // Send the email
    if (mail($recipient, $subject, $email_content)) {
        echo "Спасибо! Ваше сообщение отправлено.";
    } else {
        echo "Отправка не удалась. Пожалуйста, исправьте ошибки и попробуйте еще раз.";
    }
    ?>
</body>
</html>