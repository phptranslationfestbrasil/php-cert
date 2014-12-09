<?php
$view = <<<HTML
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>phpcert - ERRO!</title>
</head>
<body>
    <div style="text-align: center">
        <h1>phpcert - ERRO!</h1>
        <p style="color: red">$erro</p>
        <br>
        <p><a href="javascript:history.back();">Voltar</a></p>
    </div>
</body>
</html>
HTML;
?>