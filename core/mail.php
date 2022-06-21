<meta charset="utf-8">

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$name = htmlspecialchars(trim($name));
$email = htmlspecialchars(trim($email));
$subject = htmlspecialchars(trim($subject));
$message = htmlspecialchars(trim($message));

$name = urldecode($name);
$email = urldecode($email);
$subject = urldecode($subject);
$message = urldecode($message);

if (mail(
    "neowarewebdev@gmail.com",
    "Новий лист з сайту 'NeowareWebDev'",
    "Ім'я: " . $name . "\n" .
        "E-mail: " . $email . "\n" .
        "Тема: " . $subject . "\n" .
        "Повідомлення: " . $message . "\n"
)) {
    echo <<<_END
    <style type="text/css">
        div {
            background: #06ccff;
            text-align: center;
        }
        p { 
            margin-top: 200px;
            text-align: center;
            font-family: inherit;
            font-weight: 700;
            font-size: 2.3rem;
            letter-spacing: 1.5px;
            color: #fee800;
        }
        p:last-child {
            margin-top: 50px;
            margin-bottom: 50px;
        }   
        a {
            padding: 10px 30px;
            width: 50%;
            background: #009EE2;
            color: #6a6c74;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-family: inherit;
            font-weight: 700;
            font-size: 18px;
            box-shadow: 0px 2px 12px 0px rgba(13, 56, 60, 0.2);
            transition: all .3s ease;
            text-decoration: none;
        } 
        a:hover {
            background: #008bc7;
            color: #fee800;
        }
       </style>
    <div class="reply__inner">
        <div class="reply__text">
            <p>Дякуємо за ваш запит.</p>
            <p>Ми зв'яжемося з Вами найближчим часом!</p>
        </div>
        <a href="https://neowarewebdev.com.ua/" class="form__button reply__bytton ">На головну</a>
    </div>
_END;
} else {
    echo "Перевірте дані вводу.";
};
?>