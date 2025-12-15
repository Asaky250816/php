<?php
require_once('functions/search_city_time.php');

$tokyo = searchCityTime('東京');
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>World Clock</title>
<link rel="stylesheet" href="css/sanitize.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                World Clock
            </a>
        </div>
    </header>

<main>
    <div class="result__content">
        <div class="result-cards">
            <div class="result-card__img-wrapper">
                <img class="result-card__img" src="img/national_flag_img/<?php echo htmlspecialchars($selected_city['img']); ?>" alt="<?php echo htmlspecialchars($selected_city['name']); ?>の国旗">
</div>
<div class="result-card__body">
            <p class="result-card__city"><?php echo htmlspecialchars($selected_city['name']); ?></p>
            <p class="result-card__time"><?php echo getCityTime($selected_city['time_zone']); ?></p>
</div>
        </div>
        <div class="result-card">
<div class="result-card__img-wrapper">
            <img class="result-card__img" src="img/national_flag_img/<?php echo htmlspecialchars($tokyo['img']); ?>" alt="<?php echo htmlspecialchars($tokyo['name']); ?>の国旗">
</div>
<div class="result-card__body">
            <p class="result-card__city"><?php echo htmlspecialchars($tokyo['name']); ?></p>
            <p class="result-card__time"><?php echo getCityTime($tokyo['time_zone']); ?></p>
</div>
        </div>
</div>
    </div>
</main>
</body>
</html>
