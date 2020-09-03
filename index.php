<!DOCTYPE html>
<html>
<head>
    <title>Contact form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main-block">
    <div class="left-part">
        <i class="fas fa-envelope"></i>
        <i class="fas fa-at"></i>
        <i class="fas fa-mail-bulk"></i>
    </div>
    <?php
    if ($_GET['msg']){
        echo "<script>" . $_GET['msg'] . "</script>";
    }
    ?>
    <form method="post" action="form-handler.php">
        <h1>Обратная связь</h1>
        <div class="info">
            <label for="name"></label>
            <input class="fname" type="text" id="name" name="name" placeholder="Ваше имя" required>
            <label for="email"></label>
            <input type="text" name="email" id="email" placeholder="Электронный адрес" required>
            <label for="phone"> </label>
            <input type="text" name="phone" id="phone" placeholder="Номер телефона" required>
            <label for="profile"></label>
            <input type="text" name="profile" id="profile" placeholder="Ссылка на профиль социальной сети" required>
        </div>
        <div>
            <label for="message">Сообщение</label>
            <textarea rows="4" id="message" name="message" required></textarea>
        </div>
        <button type="submit">Отправить</button>
    </form>
</div>
</body>
</html>