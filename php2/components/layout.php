<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title><?= $title ?></title>
</head>
<body>
    <header>
        <hl><?= $page_title ?></h1>
    </header>
    <div><nav>
        <ul>
        <li>
            <a href="index.php" >Главная</a>
        </li>
        <li>
            <a href="reg.php">Регистрация</a>
        </li>
        <li>
            <a href="aut.php" >Вход</a>
        </li>
        <li>
            <a href="hid.php">Скрытая</a>
        </li>
    <li>
        <a href="fetch_test.html">gghgdg</a>
</li>
        </ul>
    </nav></div>
    <main>
        <div class = "Content">
        <?=  $content ?>
        </div>
    </main>
    

    <footer>
        <h4> </h4>
    </footer>
</body>
</html>