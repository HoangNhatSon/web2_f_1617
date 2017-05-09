
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
        <div class="module20">
                <div class="fullsize">
                    <div class="row"></div>
                   <h1>Related Products</h1>
                        <div class="col-md-3">
                            <div class="hinh"><img src="images/product6-600x600.jpg" alt=""/></div>
                            
                                <h3>Glutcn Free</h3>
                                <h5>$109.00</h5>
                                <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="hinh"><img src="images/product9-600x600.jpg" alt=""/></div>
                                <h3>Lcmon Tart</h3>
                                <h5>$150.00</h5>
                                 <div class="icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                        </div>
                        <div class="col-md-3">
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
                        <div class="col-md-3">
                                <div class="hinh"><img src="images/product9-600x600.jpg" alt=""/></div>

                                    <h3>Fruit Tart</h3>
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
                </div>                
           
        </div>
    </body>
</html>