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
        <script src="includes/responsiveSlider.js"></script>

        <? include "includes/header.php" ?>
        <? include "includes/banner.php" ?>
        <div class="middle">
            <div class="container">
                <div class="col-md-9 content">
                    <h2>Photography</h2>
                    <p>
                        Here are just a few of the photos that I've taken throughout my travels.<br>
                    </p>
                </div>
                <div class="col-md-3 content">
                    <p>
                        View: &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="viewStyle" value="list" id="radList" onchange="showPictures();"> List &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="viewStyle" value="slider" checked="true" id="radslide" onchange="showPictures();"> Slider
                    </p>
                </div>
                <div id="pictures"></div>
                <script type="text/javascript">
                var reload = false;
                    var pictureList = [["includes/pictures/IMG_1258.JPG","Sierra road, CA"],
					                   ["includes/pictures/IMG_2156.JPG","California coast"],
					                   ["includes/pictures/IMG_2322.JPG","California coast"],
					                   ["includes/pictures/IMG_8741.JPG","Seattle"],
					                   ["includes/pictures/IMG_2447.JPG","California coast"],
					                   ["includes/pictures/IMG_8897.JPG","Seattle"],
					                   ["includes/pictures/IMG_2814.JPG","California coast"],
					                   ["includes/pictures/IMG_000.JPG","San Diego, CA"]];
                    function showPictures() {
                        var pictureContent = "";
                        if (document.getElementById('radList').checked) {
                            for (var i = 0; i<pictureList.length; i++) {
                            	pictureContent += "<img class='pictureList' src='" + pictureList[i][0] + "' alt='" + pictureList[i][1] + "' /><br><p>" + pictureList[i][1] + "</p><br>";
                            }
                        }
                        else {
                        	if(reload) { location.reload(); }
                        	reload = true;
                            pictureContent="<div class='rslides_container'><ul class='rslides' id='slider'>";
                            for (var i = 0; i<pictureList.length; i++) {
                            	pictureContent+="<li><img src='" + pictureList[i][0] + "' alt='" + pictureList[i][1] + "'></li>";
                            }
                            pictureContent+="</ul></div>"

						    $(function () {
						      $("#slider").responsiveSlides({
						        auto: true,
						        pager: true,
						        nav: false,
						        speed: 1000,
						        timeout: 4000,
						        maxwidth: 1200,
						        namespace: "large-btns"
						      });
						    });

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