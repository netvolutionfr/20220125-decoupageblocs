<?php
$page = basename($_SERVER['PHP_SELF']);

$liste_pages = array(
        array('page' => 'index.php', 'title' => 'Accueil'),
        array('page' => 'services.php', 'title' => 'Services'),
        array('page' => 'tarifs.php', 'title' => 'Tarifs'),
        array('page' => 'exemple.php', 'title' => 'Exemple'),
        array('page' => 'contact.php', 'title' => 'Contact'),
);

$title_id = array_search($page, array_column($liste_pages, 'page'));
$title = $liste_pages[$title_id]['title'];
$active = ' active" aria-current="page';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Mon site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
<?php
foreach ($liste_pages as $item) {
    $url = $item['page'];
    $title = $item['title'];
?>
    <li class="nav-item">
        <a class="nav-link<?php echo ($page == $url?$active:''); ?>" href="<?php echo $url; ?>"><?php echo $title; ?></a>
    </li>
<?php
}
?>
                </ul>
            </div>
        </div>
    </nav>