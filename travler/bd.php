<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/reset.css">
    <title>Document</title>
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<style>
    body{
        box-sizing: border-box;
        background: #6017a3;
        color: #ffffff;
        font-family: sans-serif;
    
    }
    .notice-wrap{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .notice{
        text-align: center;
        font-size: 30px;
    }
    .home{
        position: absolute;
        bottom: 0;
        margin-bottom: 20px;
    }
    .home a{
        text-decoration: none;
        color: #000000;
        text-transform: uppercase;
        font-weight: bold;
    }
</style>

<script>    
/* Эффект мигания */ 
    
setInterval (blinke_funk, 150);

	function blinke_funk() { 
		var blinke_speed = 550; //миллисекунды анимации

		$(".home").fadeIn(blinke_speed).fadeOut(blinke_speed);
		
    }
 </script>

<div class="notice-wrap">
    <div class="notice">
        Thanks <?php echo $_REQUEST ["fullname"];  ?> <br>
        We will call you back, expect!
    </div>
    <div class="home" >
        <a class="home-page" href="index.php">Home page</a>
    <div>   
</div>

<?php
try {
    $_conn = new PDO ("mysql:host=localhost; dbname=call", "root", "");

    if (empty($_POST['fullname'])) exit ("Поле не заполнено");
    if (empty($_POST['number'])) exit ("Поле не заполнено");

    $query = "INSERT INTO back VALUES (NULL, :name)";
    $msg = $conn->prepare($query);
    $msg->execute(['fullname' => $_POST['fullname']]);

    $msg_id = $conn->lastInsertID();

    $query = "INSERT INTO message_content VALUES (NULL , :number)";
    $msg = $conn->prepare($query);
    $msg->execute(['number => $_POST['number'], 'number' => $msg_id]);


}
catch (PDOException $e)
{
    echo"error";
}
?>

</body>
</html>