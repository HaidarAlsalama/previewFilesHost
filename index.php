<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="img/rings.png">
    <title>By Rings Projects</title>
</head>
<body>
<div class="box">
<?php
    $path = ".";
    $dh = opendir($path);
    $i=1;
    while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin" && $file != "img" && $file != "main.css") {
    print '<a href="'.$path.'/'.$file.'">
        <div class="folder">
            <img src="img/rings_white.png" alt="">
            <span>'.$file.'</span>
        </div>
    </a>';
    $i++;
    }
    }
    closedir($dh);
?>
</div>
</body>
</html>