<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="..\assets\booklet.css">
    <script src="..\assets\index.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoggyStudio</title>
</head>
<body>
<nav class="nav">
    <div class="logo">
            <a href="index1.php">
            <img class="poggylogo" src="..\images\logo.jpg">
            </a>
    </div>
        <div class="container">
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="booklet.php">Booklet</a></li>
                    <li><a href="#">Crew</a></li>
                    <li><a href="#">Shoot With Poggy</a></li>
                    <li><a href="#">How to pose</a></li>
                    <li><a href="#">Previously trusted</a></li>
                    
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
    </section>
    <div style="height: 1000px">
        <!-- just to make scrolling effect possible -->
		
                <p class="myP2">
                    
                    COMING SOON
                    <img src="https://stickershop.line-scdn.net/stickershop/v1/product/10649902/LINEStorePC/main.png?v=1">
                    
			</p>
    </div>
    <footer >


    <p class="cr">&copy; 2023 PoggyStudio. All rights reserved.</p>

    </footer>
<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
</body>
</html>