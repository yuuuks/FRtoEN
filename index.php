<?php

$selectedLanguage = isset($_GET['lang']) ? $_GET['lang'] : 'fr';


if ($selectedLanguage === 'en') {
    include('lang/en.php');
} else {
    include('lang/fr.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo WELCOME; ?></title>
</head>
<body>

    <form action="" method="get">
        <select name="lang" onchange="this.form.submit()">
            <option value="fr" <?php echo $selectedLanguage === 'fr' ? 'selected' : ''; ?>>Français</option>
            <option value="en" <?php echo $selectedLanguage === 'en' ? 'selected' : ''; ?>>English</option>
        </select>
    </form>
    <h1><?php echo WELCOME; ?></h1>
    <p><?php echo ABOUT; ?></p>

</body>
</html>
