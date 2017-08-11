<!DOCTYPE html>
<html>
<head>
    <title>Twitter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../public/style.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">


</head>
<body>


<div class="result">

    <?php foreach ($data as $data) { ?>

        <div id="main" class=<?php echo $data['id']; ?>><p class="od" data-id=<?php echo $data['id']; ?>><?php echo $data['body']; ?></p>
            <p class="datas"><?php echo $data['data']; ?></p>
            <span><input class="btn-edit btn-css" data-id=<?php echo $data['id']; ?> type="submit" value="Edit"></span>
            <span class="del"><input class="btn-delete btn-css" data-id=<?php echo $data['id']; ?> type="submit" value="Delete"></span>
        </div>
    <?php } ?>
</div>
<h6>Type your twit</h6>
<span class="arrea"><textarea id="body" rows="5" cols="45" name="text"></textarea></span>
<span ><input class="btn-ajax btn-css" type="submit" value="Send"></span>

<script src="../public/main.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
</body>
</html>
