<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">

    <title>World Clock</title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="./index.php" class="header__logo">
                World Clock
            </a>
        </div>
    </header>
    <main>
        <div class="search-form__content">
            <h2 class="search-form__content-title">日本と世界の時間を比較</h2>
            <form class="search-form" action="result.php" method="get">
                <div class="search-form__item">
                    <select class="search-form__item-select" name="city">
                        <option value="シドニー">シドニー</option>
                        <option value="上海">上海</option>
                        <option value="モスクワ">モスクワ</option>
                        <option value="ロンドン">ロンドン</option>
                        <option value="ヨハネスブルク">ヨハネスブルク</option>
                        <option value="ニューヨーク">ニューヨーク</option>
                    </select>
                </div>
                <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>