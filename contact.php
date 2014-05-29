<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="includes/favicon.ico"/>
        <title>Matt Weeks Codes</title>
        <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="includes/css/style.css" rel="stylesheet">
    </head>
    <body>
        <script src="includes/jquery/jquery-2.1.0.min.js"></script>
        <script src="includes/bootstrap/js/bootstrap.min.js"></script>
        <? include "includes/php/header.php" ?>
        <? include "includes/php/banner.php" ?>
        <div class="middle">
            <div class="container">
                <div class="col-md-12 content">
                    <h2>Contact me</h2>
                    <p>
                        Thank you for visiting my web site, if you would like to contact me further, you can either visit my linkedin <a href="http://www.linkedin.com/in/mweeks1" target="_blank">profile</a>, or send an email to <a href="mailto:matt@weeks.codes" target="_top">matt@weeks.codes</a>.<br>
                        You can also use the below form to send an email.
                    </p>
                    <form action="sendEmail.php" method="post">
                        Your name:<br>
                        <input type="text" class="contactForm" name="cf_name" required><br><br>
                        Your e-mail:<br>
                        <input type="text" class="contactForm" name="cf_email" required><br><br>
                        Message:<br>
                        <textarea rows="5" id="messageContent" name="cf_message" required></textarea><br><br>
                        <input type="submit" value="Send">
                        <input type="reset" value="Clear">
                    </form>
                </div>
            </div>
        </div>
        <? include "includes/php/footer.php" ?>
    </body>
</html>