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
                        <h2 class="row__title__subtitle" >Image video</h2>
                        <p class="row__title__text">
                        Let's create a story, the script of which will show the uniqueness of the brand, product or product.
                        Through an image video, we can also tell the story of a person, a professional in his field, which is important when promoting a personal brand on social networks or creating an expert YouTube channel.
                        </p>
                </div>

                <div class="row__picture">
                    <img src="/img/imidj.jpg" alt="">
                </div>
            </div>

            <div class="row2">
                <div class="row__title">
                    <div class="row__title__subtitle">Promotional video</div>
                    <div class="row__title__text">
                        We will tell you about your product or service and show you how to use it in a way that will evoke emotions. 
                        <br>
                        Fill out the brief and we will tell you how we see the concept for solving your problem.
                    </div>
                </div>

                <div class="row__picture">
                    <img src="/img/reklama.jpg" alt="">
                </div>  
            </div>

            <div class="row3">
                <div class="row__title">
                    <div class="row__title__subtitle">
                    Interviews and reports for YouTube channels
                    </div>
                    <div class="row__title__text">
                    Need a video interview? We will write a script based on the theses and shoot with the best sound, light and without unnecessary pauses in the conversation.
                    <br>
                    Planning an event? We will shoot a video about an important event or we will broadcast the event to several sites at once.
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