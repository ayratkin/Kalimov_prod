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
            <p class="header-text" >Contact</p>
        </div>

        <div class="content-body">
            <p class="contact-header" >Contact information</p>

            <div class="box-for-box">
                <div class="address-box">
                    <p>Address: 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
                <div class="phone-box">
                    <p>Phone: + 1235 2355 98</p>
                </div>
                <div class="email-box">
                    <p>Email: info@yoursite.com</p>
                </div>
                <div class="website-box">
                    <p>Website yoursite.com</p>
                </div>
                <div class="form-box"></div>
                <div class="map-box"></div>
            </div>
        </div>

        <?php include('phpElements/footer.php')?>

    </div>

</body>
</html>