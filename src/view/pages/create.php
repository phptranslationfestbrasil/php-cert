<?php
$view = <<<HTML
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP TranslationFest Brasil - Create new certificate</title>
</head>
<body>
<div style="text-align: center">
    <h1>phpcert - Create new certificate</h1>
        <form name="create" id="create" action="app.php" method="get">
            <select name="usergroup" style="width: 200px;">
                <option name="usergroup" value="">Name of user group</option>
                <option name="usergroup" value="Grupo de usuários PHPSP">Grupo de usuários PHPSP</option>
                <option name="usergroup" value="Grupo de usuários PHPRS">Grupo de usuários PHPRS</option>
                <option name="usergroup" value="Grupo de usuários GOPHP">Grupo de usuários GOPHP</option>
                <option name="usergroup" value="Grupo de usuários PHPMA">Grupo de usuários PHPMA</option>
                <option name="usergroup" value="Grupo de usuários PHPSC">Grupo de usuários PHPSC</option>
                <option name="usergroup" value="Grupo de usuários PHPSC">Grupo de usuários PHPSC</option>
                <option name="usergroup" value="Grupo de usuários PHPSanca">Grupo de usuários PHPSanca</option>
                <option name="usergroup" value="Grupo de usuários PHPPB">Grupo de usuários PHPPB</option>
                <option name="usergroup" value="Grupo de usuários PHPDF">Grupo de usuários PHPDF</option>
            </select></br></br>

            <select name="city" style="width: 200px;">
                <option name="city" value="">Name of city</option>
                <option name="city" value="São Paulo - SP">São Paulo - SP</option>
                <option name="city" value="Porto Alegre - RS">Porto Alegre - RS</option>
                <option name="city" value="Goiânia - GO">Goiânia - GO</option>
                <option name="city" value="São Luiz - MA">São Luiz - MA</option>
                <option name="city" value="Chapecó - SC">Chapecó - SC</option>
                <option name="city" value="Florianópolis - SC">Florianópolis - SC</option>
                <option name="city" value="São Carlos - SP">São Carlos - SP</option>
                <option name="city" value="João Pessoa - PB">João Pessoa - PB</option>
                <option name="city" value="Brasília - DF">Brasília - DF</option>
            </select></br></br>

            <select name="place" style="width: 200px;">
                <option name="place" value="">Name of place</option>
                <option name="place" value="Editora Novatec">Editora Novatec</option>
                <option name="place" value="TargetTrust">TargetTrust</option>
                <option name="place" value="FAEG">FAEG</option>
                <option name="place" value="Cafufa Coworking">Cafufa Coworking</option>
                <option name="place" value="Unochapecó">Unochapecó - Centro de Residência de Software</option>     
                <option name="place" value="Taller Web Solutions">Taller Web Solutions</option>
                <option name="place" value="Aptor Software">Aptor Software</option>
                <option name="place" value="HostDime.com">HostDime.com</option>
                <option name="place" value="ClickLab Marketing Digital">ClickLab Marketing Digital</option>
            </select></br></br>

            <label for="student">Student</label></br>
            <input type="text" name="student" style="width: 200px;"></br></br>

            <label for="organizerOne">organizerOne</label></br>
            <input type="text" name="organizerOne" style="width: 200px;"></br></br>

            <label for="organizerTwo">organizerTwo</label></br>
            <input type="text" name="organizerTwo" style="width: 200px;"></br></br>

            <input type="submit" name="action" value="Generate">
            <input type="submit" name="action" value="Preview">
        </form>
    </div>
</body>
</html>
HTML;
?>