<?php
return array(
    'default' => array(
        'type' => 'smtp',
        'host' => 'smtp.yandex.ru',
        'port' => 465,
        'login' => 'sasha23.88@yandex.ru',
        'password' => 'nika0209!',
        //'encryption' => 'ssl',
        //либо tls — в зависимости от требований SMTP-сервера
    )
    $message = "Проверочное сообщение (тело)";
    $result = mail( 'sasha23.88@yandex.ru', 'Тема - проверочное письмо', $message );
    echo "result: $result";
?>