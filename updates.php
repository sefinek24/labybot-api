<!DOCTYPE html> <!-- Copyright © by Nekosumi 2018 - 2021 All rights reserved -->
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Update list - LabyBOT API</title>
    <meta name="description" content="Updates of our API.">
	<meta name="keywords" content="laby, bot, interfejs, api">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/atsumi_avatar-compressed.png">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url("images/updates-min.jpg") fixed center;
            background-size: cover;
            text-shadow: 2px 2px 10px #000;
        }
    </style>
</head>
<body ondragstart="return false" ondrag="return false" oncontextmenu="return false" onselect="return false">
    <?php require "config.php"; ?>

    <div class="header">Updates</div>

    <div class="menu">
        <a href="/" title="Home page">Home page</a> ||
        <a href="updates.php" title="API updates"><u>Updates</u></a> ||
        <a href="authors.php" title="API authors">Authors</a> ||
        <a href="https://atsumi.xyz" target="_blank" title="Official website">Official website</a> ||
        <a href="https://discord.gg/s7CA97qQrf" target="_blank" title="LabyBOT support server - Discord">Support server</a> ||
        <a href="https://status.atsumi.xyz" target="_blank" title="Status page">Status page</a> ||
        <a href="https://atsumi.xyz/dodaj" target="_blank" title="Invite LabyBOT">Invite bot</a>
    </div>
    <hr>

    <div class="menu line">
        <div><code>Last update from: <?php echo $lastupdate; ?></code></div>
        <div><code>The list of updates is only available in Polish language.</code></div>
    </div>

    <div class="group">» API Updates</div>

    <div class="desc">
        <div class="changelog">• Update v2.7.1 from 24.02.2021.</div>
        - Optymalizacja API.<br>
        - Małe poprawki.
    </div>

    <div class="desc">
        <div class="changelog"> • Update v2.7.0 from 23.02.2021</div>
        - Optymalizacja API.<br>
        - Poprawiono obsługę błędów itd...<br>
        - Zmiana url na message. Pamiętaj o zaktualizowaniu swojego kodu.
    </div>

    <div class="desc">
        <div class="changelog"> • Update v2.6.8 from 21.02.2021</div>
        - API wróciło do żywych.<br>
        - Aktualizacja dokumentacji.
    </div>

    <div class="desc">
        <div class="changelog"> • Update v2.2.7 from 07.01.2021</div>
        - Zaktualizowano parę rzeczy.<br>
        - Od teraz API nie wymaga już podania tokenu.
    </div>

    <div class="desc">
        <div class="changelog"> • Update v2.2.6 from 01.01.2021</div>
        - Zaktualizowano date: 2020 -> 2021<br>
        - Zmniejszono rozmiar niektórych plików.
    </div>

    <div class="desc">
        <div class="changelog"> • Update v2.2.5 from 16.12.2020</div>
        - Poprawki w dokumentacji.<br>
        - Zaktualizowano endpoint <code>bigChar</code>.
    </div>

    <div class="desc">
        <div class="changelog"> • Update v2.2.4 from 27.11.2020</div>
        - Aktualizacja nazw domen w skryptach. labybot.pl -> atsumi.xyz
    </div>

    <div class="desc">
        <div class="changelog"> • Update v2.2.2 from 26.11.2020</div>
        - Naprawiono endpointa <code>lovefaces</code>.
    </div>

    <div class="desc">
        <div class="changelog"> • Update v2.2.1 from 11.11.2020</div>
        - <s>Od teraz, żeby skorzystać z niektórych endpointów, musisz uzyskać token od administratora API. Kontakt: nekopijemleko120@gmail.com</s><br>
        - Interfejs API będzie teraz tylko i wyłącznie wysyłać dane za pomocą JSON. Strony błędów w HTML zostały usunięte.<br>
        - Poprawki w skryptach oraz jakaś tam optymalizacja kodu.<br>
        - API <code>"terminal"</code> obsługuje od obsługuje zestaw znaków UTF-8.<br>
        - Dodano nowego endpointa <code>"bigChar"</code>. <b>BETA</b><br>
        - Zmieniono <code>authors.php</code> na <code>team.php</code>.<br>
        - Zmieniono napis <code>Authors</code> (w menu) na <code>Team</code>. Mała aktualizacja menu.<br>
        - Tekst na stronach jest teraz bardziej czytelny.<br>
        - Poprawiono rozpiskę błędów na stronie głównej.<br>
        - Usunięto moduł <code>labybotapi</code> dla NPM.
    </div>


    <div class="desc">
        <div class="changelog"> • Update v2.0.5 from 05.10.2020</div>
        - Poprawiono menu.<br>
        - Zaktualizowano plik <code>.htaccess</code>.
    </div>

    <div class="desc">
        <div class="changelog"> • Update v2.0.4 from 04.10.2020</div>
        <b>-</b> Poprawiono API z losowymi liczbami.<br>
        <b>-</b> Naprawiono błędne ścieżki obrazów w plikach z errorami.<br>
        <b>-</b> Usunięto cudzysłowy w błędach JSON.<br>
        <b>-</b> Dodano stronę z błędem 404.<br>
        <b>-</b> Dodano nowe bannery dotyczące modułu na stronie głównej.<br>
        <b>-</b> Zmiana nazw niektórych endpointów.
    </div>

    <div class="desc">
        <div class="changelog"> • Update v2.0.1 from 03.10.2020</div>
        <b>-</b> Dodano nową stronę (czyli tą) z aktualizacjami API oraz modułu.<br>
        <b>-</b> Pozmieniano tła oraz wszystkie je skompresowano.<br>
        <b>-</b> Poprawiono strony z błędami w HTML-u.<br>
        <b>-</b> Dodano bannery do strony głównej związane z modułem dla NPM.
    </div>

    <?php require "footer.php"; ?>
</body>
</html>