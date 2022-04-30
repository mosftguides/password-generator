<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>генератор паролей</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    # Подготовьте данные для последующего использования
    error_reporting(0); # не показывать ошибок
    # Записать данные, отправленные из index.php, в переменные
    $len = $_POST['length'];
    $qua = $_POST['quanity'];
    $num = $_POST['num'];
    $son = $_POST['son']; 

    if ($son=="sonY"){
        # Прописные, строчные и специальные символы
        $zeichen='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%&/\()=?{[]}';
    }
    else {
    # прописные и строчные буквы
    $zeichen = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

?>
    <!-- Рубрики сайта -->
    <h1 class="opensans">Генератор паролей</h1>
    <h2 class="ubuntu">Простой в использовании, быстрый и подходящий для всех устройств генератор паролей!</h2>
    <h2 class="roboto">Ваши пароли: </h2>
<?php
    # Генерация пароля или паролей
    # Пароли генерируются в цикле
    for ($i = 1; $i <= $qua; $i++) {
        # i равно 1, i увеличивается с каждой итерацией цикла, и цикл завершается,
        # если я того же роста, что и qua
        echo '<br>';
        $ranstr = substr(str_shuffle(str_repeat($zeichen, ceil($len/strlen($zeichen)) )),0,$len); # Функция генерации пароля
        echo '<h3 class="roboto">' . $ranstr . '</h3>'; # Вывод только что сгенерированного пароля
    }


    # Спецификация языков программирования и их логотипы
    echo '<br>';
    echo '<p class="roboto">Для этого сайта использовались языки программирования PHP и HTML.<p>';
    echo "<br><br>";

    # картинки
    ?>
    <img class="ohpimg2" src="php-logo.png"></img>
    <img class="ohpimg1" src="html-logo.png"></img>
</body>
</html>