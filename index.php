<!DOCTYPE html> <!-- Copyright © by Nekosumi 2018 - 2021 All rights reserved -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Documentation - LabyBOT API</title>
    <meta name="description" content="API documentation for our LabyBOT Discord.">
    <meta name="keywords" content="atsumi, laby, bot, labybot, endpoint, interfejs, api, losowe, liczby, zdjecia, owo, uwu, kot, pies, psy, koty, emoji, unicode, liczby, 8ball, magiczna, kula, lisy, ryby, przyciemnij, rozjasnij, zamaz, blur, piksele, wygladz, szkic, odbracanie">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/atsumi_avatar-compressed.png">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url("images/background-min.jpg") fixed center;
            background-size: cover;
            text-shadow: 2px 2px 10px #000
        }
    </style>
</head>
<body ondragstart="return false" ondrag="return false" oncontextmenu="return false" onselect="return false">
    <div class="header">LabyBOT API</div>

    <div class="menu">
        <a href="/" title="Home page"><u>Home page</u></a> ||
        <a href="updates.php" title="API updates">Updates</a> ||
        <a href="authors.php" title="API authors">Authors</a> ||
        <a href="https://atsumi.xyz" target="_blank" title="Official website">Official website</a> ||
        <a href="https://discord.gg/s7CA97qQrf" target="_blank" title="LabyBOT support server - Discord">Support server</a> ||
        <a href="https://status.atsumi.xyz" target="_blank" title="Status page">Status page</a> ||
        <a href="https://atsumi.xyz/dodaj" target="_blank" title="Invite LabyBOT">Invite bot</a>
    </div>
    <hr class="line">

    <div class="group" style="text-align:center;color:blue">» WARNING «</div>
    <div class="infoDesc">
        Jest to stary interfejs API przeznaczony do bota LabyBOT. Obecnie tworzę nowego bota z nowym panelem oraz api i tak dalej.
    </div>


    <!-- 1 -->
    <div class="group">» Random things</div>
    <div class="desc">
        <div>• Random OwO <code>[Unicode]</code>: <a href="api/index.php?type=owo" title="GET /api/index.php?type=owo" target="_blank">Preview</a></div>
        <div>• Random UwU <code>[Unicode]</code>: <a href="api/index.php?type=uwu" title="GET /api/index.php?type=uwu" target="_blank">Preview</a></div>
        <div>• Random love faces <code>[Unicode]</code>: <a href="api/index.php?type=lovefaces" title="GET /api/index.php?type=lovefaces" target="_blank">Preview</a></div>
        <div>• Random cat faces <code>[Unicode]</code>: <a href="api/index.php?type=catfaces" title="GET /api/index.php?type=catfaces" target="_blank">Preview</a></div>
        <div>• Random dog faces <code>[Unicode]</code>: <a href="api/index.php?type=dogfaces" title="GET /api/index.php?type=dogfaces" target="_blank">Preview</a></div>
        <div>• 8Ball <code>[Yes/No]</code>: <a href="api/index.php?type=eightball" title="GET /api/index.php?type=eightball" target="_blank">Preview</a></div>
        <div>• Random number: <a href="api/index.php?type=randomNumber&min=1&max=10" title="GET /api/index.php?type=randomNumber&min=NUMBER&max=NUMBER" target="_blank">Preview</a></div>
    </div>

    <div class="group">» Images</div>
    <div class="desc">
        <div>• Random cat: <a href="api/index.php?type=cats" title="GET /api/index.php?type=cats" target="_blank">Preview</a></div>
        <div>• Random dog: <a href="api/index.php?type=dogs" title="GET /api/index.php?type=dogs" target="_blank">Preview</a></div>
        <div>• Random fox: <a href="api/index.php?type=foxes" title="GET /api/index.php?type=foxes" target="_blank">Preview</a></div>
        <div>• Random fish: <a href="api/index.php?type=fishes" title="GET /api/index.php?type=fishes" target="_blank">Preview</a></div>
        <div>• Random alpaca: <a href="api/index.php?type=alpacas" title="GET /api/index.php?type=alpacas" target="_blank">Preview</a></div>
        <div>• Random bird: <a href="api/index.php?type=birds" title="GET /api/index.php?type=birds" target="_blank">Preview</a></div>
    </div>

    <div class="group">» Filters</div>
    <div class="desc">
        <div>• Gaussian Blur: <a href="api/gaussian_blur.php?power=13&url=https://api.atsumi.xyz/images/example-min.jpg" title="GET /api/gaussian_blur.php?power=NUMBER&url=URL" target="_blank">Preview</a></div>
        <div>• Brightness: <a href="api/brightness.php?power=50&url=https://api.atsumi.xyz/images/example-min.jpg" title="GET /api/brightness.php?power=NUMBER&url=URL" target="_blank">Preview</a></div>
        <div>• Smooth: <a href="api/smooth.php?power=4&url=https://api.atsumi.xyz/images/example-min.jpg" title="GET /api/smooth.php?power=NUMBER&url=URL" target="_blank">Preview</a></div>
        <div>• Pixelate: <a href="api/pixelate.php?power=10&url=https://api.atsumi.xyz/images/example-min.jpg" title="GET /api/pixelate.php?power=NUMBER&url=URL" target="_blank">Preview</a></div>
        <div>• Grayscale: <a href="api/grayscale.php?url=https://api.atsumi.xyz/images/example-min.jpg" title="GET /api/grayscale.php?url=URL" target="_blank">Preview</a></div>
        <div>• Negate: <a href="api/negate.php?url=https://api.atsumi.xyz/images/example-min.jpg" title="GET /api/negate.php?url=URL" target="_blank">Preview</a></div>
        <div>• Emboss: <a href="api/emboss.php?url=https://api.atsumi.xyz/images/example-min.jpg" title="GET /api/emboss.php?url=URL" target="_blank">Preview</a></div>
        <div>• Mean removal: <a href="api/mean_removal.php?url=https://api.atsumi.xyz/images/example-min.jpg" title="GET /api/mean_removal.php?url=URL" target="_blank">Preview</a></div>
    </div>

    <div class="group">» Text</div>
    <div class="desc">
        <div>• Text placed in the terminal: <a href="api/terminal.php?text=--+Hello+World!+--+~+Atsumi+API+~" title="GET /api/terminal.php?text=STRING" target="_blank">Preview</a></div>
        <div>• Big characters: <a href="api/bigChar.php?text=Hello!" title="GET /api/bigChar.php?text=STRING" target="_blank">Preview</a></div>
    </div>
    <hr class="line">


    <!-- 2 -->
    <div class="group" style="text-align: center;">Informations</div>

    <div class="group">» Default values of <code>„&power”</code></div>
    <div class="desc">
        <div>• Gaussian Blur: 13</div>
        <div>• Brightness: 50</div>
        <div>• Pixelate: 10</div>
        <div>• Smooth: 4</div>
    </div>

    <div class="group">» Maximum values of <code>„&power”</code></div>
    <div class="desc">
        <div>• Gaussian Blur: 70</div>
        <div>• Brightness: Min = -250, max = 250</div>
        <div>• Pixelate: 1000</div>
        <div>• Smooth: 15</div>
    </div>

    <div class="group">» Parameters</div>
    <div class="desc">
        <code>&url=STRING</code> <span class="red">[Required]</span> - Should contain a link to the picture.<br>
        <code>?power=NUMBER</code> <span class="opn">[Optional]</span> - Indicates the power of the filter.<br>
        <code>?text=STRING</code> <span class="red">[Required for the terminal and bigChar]</span> - Text placed in api terminal.<br>
        <code>&min=NUMBER</code> <span class="red">[Required for random numbers]</span> - Minimum random number.<br>
        <code>&max=NUMBER</code> <span class="red">[Required for random numbers]</span> - Maximum random number.<br>
    </div>

    <div class="group">» Errors description</div>
    <div class="desc">
        <span class="green">•</span> 200 - Success.<br>

        <span class="red">•</span> 110- An error occurred while retrieving all photos from the directory. Please contact the administrator.<br>
        <span class="red">•</span> 111 - An error has occurred in the array. Please contact the administrator.<br>
        <span class="red">•</span> 118 - Something went wrong while parsing file extensions. Please contact the administrator.<br>
        <span class="ylw">•</span> 123 - A required file has crashed. Please contact the administrator.<br>
        <span class="ylw">•</span> 136 - Unknown file extension. Please contact the administrator.<br>
        <span class="blue">•</span> 174 - Photo directory not found. Wait a few minutes. If the problem persists, please contact us.<br>
        <span class="red">•</span> 183 - An error occurred while drawing the image. Please contact the administrator.<br>

        <span class="ylw">•</span> 301 - A required file with the extension „lb” was not found. Please contact the administrator.<br>
        <span class="ylw">•</span> 302 - The server cannot read the contents of the file with the extension lb. for some reason. Please contact the administrator.<br>
        <span class="red">•</span> 326 - Failed to receive data. Please contact the administrator.<br>

        <span class="blue">•</span> 404 - File not found.<br>

        <span class="blue">•</span> 431 - Parameter <code>„?type”</code> does not exist.<br>
        <span class="blue">•</span> 432 - The parameter value <code>„?type”</code> was not specified by you.<br>
        <span class="blue">•</span> 433 - The value of the <code>„?type”</code> parameter is not in the array.<br>

        <span class="blue">•</span> 441 - Parameter <code>„&url”</code> does not exist.<br>
        <span class="blue">•</span> 442 - The parameter value <code>„&url</code> was not specified by you.<br>
        <span class="blue">•</span> 443 - The URL specified in <code>„&url”</code> does not lead to any image.<br>
        <span class="blue">•</span> 444 - The extension of the specified image in <code>„&url”</code> is not supported by the server.<br>

        <span class="blue">•</span> 451 - The parameter value <code>„&power”</code> was not specified by you.<br>
        <span class="blue">•</span> 452 - <code>„&power”</code> is not a number.<br>
        <span class="blue">•</span> 453 - The number specified in <code>„&power”</code> is too large.<br>
        <span class="blue">•</span> 454 - The number specified in <code>„&power”</code> is too large negative number.<br>

        <span class="blue">•</span> 461 - The <code>„?text”</code> parameter does not exist!<br>
        <span class="blue">•</span> 462 - The parameter value <code>„?text”</code> was not specified by you.<br>

        <span class="blue">•</span> 471 - Parameter <code>„&min”</code> does not exist.<br>
        <span class="blue">•</span> 472 - The parameter value <code>„&min”</code> was not specified by you.<br>
        <span class="blue">•</span> 473 - Parameter <code>„&max”</code> does not exist.<br>
        <span class="blue">•</span> 474 - The parameter value <code>„&max”</code> was not specified by you.<br>
        <span class="blue">•</span> 475 - <code>„&min”</code> is not a number.<br>
        <span class="blue">•</span> 476 - <code>„&max”</code> is not a number.<br>
        <span class="blue">•</span> 477 - The number specified in <code>„&min”</code> is too large.<br>
        <span class="blue">•</span> 478 - The number specified in <code>„&max”</code> is too large.<br>
    </div>

    <?php require "footer.php"; ?>
</body>
</html>