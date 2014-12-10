<?php
$view = <<<HTML
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>phpcert - Create new certificate</title>
</head>
<body>
<div style="text-align: center">
    <h1>phpcert - Create new certificate</h1>
        <form name="create" id="create" action="app.php" method="get">
            <select name="cert" style="width: 200px;">
                <option name="cert" value="">Type of certificate</option>
                <option name="cert" value="translationfest">Translation Fest</option>
            </select><br><br>
            <label for="student">Student</label><br>
            <input type="text" name="student" style="width: 200px;"><br><br>
            <label for="course">Course</label><br>
            <input type="text" name="course" style="width: 200px;"><br><br>

            <input type="submit" name="action" value="Generate">
            <input type="submit" name="action" value="Preview">
        </form>
    </div>
</body>
</html>
HTML;
?>