<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 12/18/2019
 * Time: 12:43 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Installer</title>
</head>
<body>
<div class="step1">
    <h3>Server Information</h3>
    <form method="post" action="controller/installer.php">
        <input type="text" name="host" placeholder="ex. localhost"><br><br>
        <input type="text" name="username" placeholder="ex. root"><br><br>
        <input type="text" name="password" placeholder="ex.root"><br><br>
        <input type="text" name="db_name" placeholder="ex. test"><br><br>
        <button type="submit" name="need" value="Step1">Validate</button>
    </form>
</div>

<div class="step2">
    <h3>Script Importation</h3>
    <form method="post" action="controller/installer.php" enctype="multipart/form-data">
        <input type="file" name="host" placeholder="ex. localhost"><br><br>
        <button type="submit" name="need" value="Step2">Validate</button>
    </form>
</div>

<div class="except">
    <h3>Database Already Exist</h3>
    <h5>Do you want to erase it?</h5>
    <form method="post" action="controller/installer.php">
        <label>
            <input type="radio" name="qst_erase">
            Yes
        </label>
        <label>
            <input type="radio" name="qst_erase">
            No
        </label>
        <button type="submit" name="need" value="Step1">Validate</button>
    </form>
</div>
</body>
</html>
