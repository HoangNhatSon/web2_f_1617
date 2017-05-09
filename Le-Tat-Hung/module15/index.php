
<html>
    <head>
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
       
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1.less', 'css/1.css');
        ?>
        <link href="css/1.css" rel="stylesheet" type="text/css" />
        
    </head>

    <body>
        <div class="module-15">
                <div class="fullsize">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product1-1-600x600.jpg" alt=""/></div>
                            <h3>Scafood</h3>
                            <h5>$43.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product2-1-600x600.jpg" alt=""/></div>
                            <h3>Italian<br>spaghctti</h3>
                            <h5>$29.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product-gallery1.jpg" alt=""/></div>
                            <h3>Pumpkin Soup</h3>
                            <h5>$35.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product-gallery2-185x185.jpg" alt=""/></div>
                            <h3>Vegetahle<br>Soup</h3>
                            <h5>$15.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product-gallery3-185x185.jpg" alt=""/></div>
                            <h3>Fresh Salad</h3>
                            <h5>$11.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product6-600x600.jpg" alt=""/></div>
                            <h3>Gluten Free</h3>
                            <h5>$109.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product7-600x600.jpg" alt=""/></div>
                            <h3>Antipasti</h3>
                            <h5>$10.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product8-600x600.jpg" alt=""/></div>
                            <h3>Easy Meal</h3>
                            <h5>$36.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product9-600x600.jpg" alt=""/></div>
                            <h3>Lemon Tart</h3>
                            <h5>$150.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product10-600x600.jpg" alt=""/></div>
                            <h3>Grilled Pizza</h3>
                            <h5>$25.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product11-600x600.jpg" alt=""/></div>
                            <h3>Best Steak</h3>
                            <h5>$12.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hinh"><img src="images/product-gallery1.jpg" alt=""/></div>
                            <h3>Feta Salad</h3>
                            <h5>$36.00</h5>
                            <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>                
           
        </div>
    </body>
</html>