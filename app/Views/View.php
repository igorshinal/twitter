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


<div class="result">

    <?php foreach ($data as $data) { ?>

        <div class=<?php echo $data['id']; ?>><p class="od" data-id=<?php echo $data['id']; ?>><?php echo $data['body']; ?></p>
            <p><?php echo $data['data']; ?></p>
            <span><input class="btn-edit" data-id=<?php echo $data['id']; ?> type="submit" value="Edit"></span>
            <span><input class="btn-delete" type="submit" value="Delete"></span>
        </div>
    <?php } ?>
</div>

<p><textarea id="body" rows="10" cols="45" name="text"></textarea></p>
<p><input class="btn-ajax" type="submit" value="Отправить"></p>

<script src="../public/main.js"></script>
</body>
</html>
