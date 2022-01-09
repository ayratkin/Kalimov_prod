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

        <div class="page_header">
            <p class="header-text" >My Services</p>
        </div>

        <div class="page2_content">
            <div class="row1">
                <div class="row__title">
                    <p> 
                        <h2 class="row__title__subtitle" >Имиджевый видеоролик</h2>
                        <br>
                        <p class="row__title__text" > Снимем видео, которое расскажет об опыте работы компании.
⠀                       <br>

                        Создадим историю, сценарий которой покажет уникальность бренда, товара или продукта.
                        <br>
 

                        Через имиджевое видео также можем рассказать историю человека, профессионала в своем деле,что важно при продвижении личного бренда в соцсетях или создании экспертного YouTube-канала..</p>
                        
                    </p>
                </div>

                <div class="row__picture">
                    <img src="/img/imidj.jpg" alt="">
                </div>
            </div>

            <div class="row2">
                <div class="row__title">
                    <div class="row__title__subtitle">Рекламный видеоролик</div>
                    <br>
                    <div class="row__title__text">Расскажем о вашем продукте или услуге и покажем, как этим пользоваться так, что это вызовет эмоции.
                    <br> <br>
                    Заполните бриф, и мы расскажем, как видим концепцию для решения вашей задачи</div>
                </div>

                <div class="row__picture">
                    <img src="/img/reklama.jpg" alt="">
                </div>  
            </div>

            <div class="row3">
                <div class="row__title">
                    <div class="row__title__subtitle">
                    Интервью и репортажи для Ютуб-каналов
                    </div>
                    <br>
                    <div class="row__title__text">
                    Нужно видео-интервью? Пропишем сценарий, исходя из тезисов и снимем с лучшим звуком, светом и без лишних пауз в разговоре.
                    <br> <br>
                    Планируете мероприятие?
                    Снимем видео о важном событии или проведем видеотрансляцию ивента сразу на несколько площадок.
                    </div>
                </div>

                <div class="row__picture">
                    <img src="/img/intreview.jpg" alt="">
                </div>
            </div>

            

        </div>

        <?php include('phpElements/footer.php')?>

    </div>

</body>
</html>