<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="includes/favicon.ico"/>
        <title>Matt Weeks Codes</title>
        <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="includes/style.css" rel="stylesheet">
    </head>
    <body>
        <script src="includes/jquery/jquery-2.1.0.min.js"></script>
        <script src="includes/bootstrap/js/bootstrap.min.js"></script>
        <? include "includes/header.php" ?>
        <? include "includes/banner.php" ?>
        <div class="middle">
            <div class="container">
                <div class="col-md-8 content">
                    <h2>Photography</h2>
                    <p>
                        Here are just a few of the photos that I've taken throughout my travels.<br>
                        View: &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="viewStyle" value="list" id="radList" onchange="showPictures();"> List &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="viewStyle" value="slider" checked="true" id="radslide" onchange="showPictures();"> Slider
                    </p>
                </div>
                <div id="pictures"></div>
                <script type="text/javascript">
                    var pictureList = ["","",""];
                    function showPictures() {
                        var pictureContent = "";
                        console.log(document.getElementById('radList').checked);
                        if (document.getElementById('radList').checked) {
                            pictureContent="radList";
                        }
                        else {
                            pictureContent="radSlide";
                        }
                        document.getElementById("pictures").innerHTML=pictureContent;
                    }
                    showPictures();
                </script>
            </div>
        </div>
        <? include "includes/footer.php" ?>
    </body>
</html>