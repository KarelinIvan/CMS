<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?= htmlspecialchars($title) ?>
        </title>
        <meta name="description" content="<?= htmlspecialchars($description) ?>">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
        <link rel="shorcut icon" type="image/png" href="img/favicon.ico">
    </head>
    <body>
        <header>
            <div class="container">
                <a class="skip-link" href="#container">Перейти к содержимому</a>
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt="Creative Folk"></a>
                </div>
                <nav role="navigation">
                    <button id="toggle-navigation" aria-expanded="false">
                        <span class="icon-menu"></span>
                        <span class="hidden">Меню</span>
                    </button>
                    <ul id="menu">
                        <?php foreach ($navigation as $link) { ?>
                        <li>
                            <a href="category.php?id=<?= $link['id'] ?>"
                            <?= ($section == $link['id']) ? 'class="on" aria-current="page"' : '' ?>>
                            <?= $link['name'] ?></>   
                        </li>
                        <?php } ?>
                        <li>
                            <a href="search.php">
                                <span class="icon-search"></span>
                                <span class="search-text">Поиск</span>
                            </a>
                        </li>    
                    </ul>
                </nav>
            </div>
        </header>
