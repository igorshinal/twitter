<!DOCTYPE html>
<html>
<head>
    <title>Twitter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../public/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body>
<?php foreach ($data as $data) {?>
    <p><?php echo $data['body'];?></p>
    <span><?php echo $data['data']; ?></span>
<?php } ?>


<div class="result"></div>



    <p><b>Введите ваш твит</b></p>
    <p><textarea rows="10" cols="45" class="body" name="text"></textarea></p>
    <p><input class="btn-ajax" type="submit" value="Отправить"></p>




<script src="../public/main.js"></script>
</body>
</html>
