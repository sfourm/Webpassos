<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="novasenha.php" method="POST">
            <input type="text" name="email" placeholder="seu e-mail">
            <input name="eviar" value="ok" type="submit">
        </form>
    </body>
</html>