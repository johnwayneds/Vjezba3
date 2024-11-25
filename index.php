<?php
// Varijable za naslov i poveznicu s konkatenacijom
$title_base = "Da Vincijev";
$title = $title_base . " kod";

$link_base = "https://hr.wikipedia.org/wiki/";
$link = $link_base . "Da_Vincijev_kod";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.">
    <meta name="keywords" content="Da Vinci, kod, triler, knjiga, Dan Brown">
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.</p>
    <p>
        <a href="<?php echo $link; ?>" target="_blank">
            Pročitajte više na Wikipediji
        </a>
    </p>
    
    <?php
    // index3.php
    ?>
    
</body>
</html>
