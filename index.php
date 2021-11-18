<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Portfolio</title>
</head>
<body>

    <?php 
        include('phpElements/left-sidebar.php')
    ?>


    <div class="content">

        <div class="main_box">

            <div class="div-for-img">
                <img src="img/DSC_7965.jpg" alt="">
            </div>

            <div class="text-in-main-box">
                <p class="subhead">Hello! I'm</p>
                <p class="big-letter">Marat Kalimov</p>
                <p class="head">Marat Kalimov <p class="head-color"> A Videographer.</p> <p class="head1">I Capture Life</p>

                <p class="descriptions">I am A Photographer from America Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p class="podpis">Marat Kalimov</p>

                <div class="social">
                    <a href=""><img class="tg" src="img/tg.png" alt="Telegramm"></a>
                    <a href="https://vimeo.com/user59814603" target="_blank"><img class="vm" src="img/vm.png" alt="Vimeo"></a>
                    <a href="https://www.youtube.com/channel/UCfzyyEWnuZ0vSTUKJYvD2kA" target="_blank"><img class="yt" src="img/yt.png" alt="YouTube"></a>
                    <a href="https://www.instagram.com/kalimov_production/" target="_blank"><img class="inst" src="img/inst.png" alt="Instagramm"></a>
                </div>

            </div>
        </div>

        <?php include('phpElements/footer.php')?>

    </div>

</body>
</html>