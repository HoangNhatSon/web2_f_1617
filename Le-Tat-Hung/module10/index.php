<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/docs.theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
    </head>
    <body>
            <div class="module10">
              
                    <!--HERDER-->
                    <section id="demos">
                      
                            <div class="large-12 columns">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <a href="#"><img src="images/port-gi-1-800x545.jpg" alt=""/></a>
                                    
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-gi-2-600x746.jpg" alt=""/></a>   
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-gi-3-800x545.jpg" alt=""/></a>
                                    </div>
                                     <div class="item">
                                        <a href="#"><img src="images/port-fi-4.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-fi-6.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-gi-5.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-fi-7.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-fi-8.jpg" alt=""/></a> 
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-fi-9.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-fi-10.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-fi-11.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-fi-12.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-fi-13.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-fi-14.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="images/port-fi-15.jpg" alt=""/></a>
                                    </div>
                                </div>
                                <script>
                                    $(document).ready(function () {
                                        var owl = $('.owl-carousel');
                                        owl.owlCarousel({
                                            margin: 10,
                                            nav: true,
                                            loop: true,
                                            responsive: {
                                                0: {
                                                    items: 1
                                                },
                                                600: {
                                                    items: 3
                                                },
                                                1000: {
                                                    items: 5
                                                }
                                            }
                                        })
                                    })
                                </script>
                            </div>
                        
                    </section>
              
            </div>

    </body>
    <script src="js/highlight.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>    
</html>
