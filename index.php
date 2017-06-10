<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="MobileOptimized" content="width" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <title>miniSlider</title>
        <meta name="author" content="Subrata Dhal">
        <meta name="desription" content="miniSlider a simple jquery plugins and very usefull slider">
        <meta name="keyword" content="jquery,jquery plugins,javascript plugins,jquery slider,slider">
        <meta name="robots" content="index,follow">
        <link rel="canonical" href="http://subratadhal.com/jquery/minislider/" />
        <link href="css/page.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'/>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#slider').minislider();
            });
        </script>
    </head>
    <body> 
        <div id="container">
            <header>
                <h1>miniSlider<span>Ver-1.0</span></h1>
            </header>
            <section>
                <div id="slider-div">
                    <div id="slider">
                        <ul>
                            <li class="subuActive"><img src="images/image1.jpg" alt="Latest Image Slider"/></li>
                            <li><img src="images/image3.jpg" alt="Support Modern Browsers"/></li>
                            <li><img src="images/image4.jpg" alt="Updated Version"/></li>
                            <li><img src="images/image5.jpg" alt="100% Customizable"/></li>
                            <li><img src="images/image6.jpg" alt="Theme Available"/></li>
                        </ul>
                    </div>
                </div>
                <div class="divider"></div>
            </section>
        </div>
        <article>
            <header>
                <h2>Features</h2>
            </header>
            <ul class="feature">
                <li>Based on HTML5/CSS3/Jquery</li>
                <li>Less thank 10Kb size.</li>
                <li>Fully Customizable CSS</li>
                <li>Compatible in Firefox, Safari, Opera, IE7, and IE6 </li>
            </ul>
        </article>
        <div class="github-link">
            <img src="images/github.png" alt=""/>
            <p> Find the working url on <a href="https://github.com/subratadhal/minislider" target="_blank">github.</a></p>
        </div>
        <footer>    
            <div class="footer">
                Designed and Developed by: <a target="_blank" href="http://www.subratadhal.com">subratadhal.com</a>
            </div>
        </footer>
        <script src="js/minislider.js"></script>
    </body>
</html>
