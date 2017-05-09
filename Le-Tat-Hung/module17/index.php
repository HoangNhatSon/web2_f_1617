
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
        <div class="module-17 ">
            <div class="container">
                <div class="row">
                <div class="col-md-3">
                    <h4>Product Tags</h4>
                    <div class="tang">
                        <a href="#">DESSERT</a>
                        <a href="#">FOOD</a>
                        <div class="clearfix"></div>
                        <br>
                        <a href="#">FRESH</a>
                        <a href="#">HEALTHY</a>
                         <div class="clearfix"></div>
                        <br>
                        <a href="#">LUNCH</a>
                        <a href="#">PASTA</a>
                         <div class="clearfix"></div>
                        <br>
                        <a href="#">RECIPE</a>
                        <a href="#">SNACKS</a>
                         <div class="clearfix"></div>
                        <br>
                        <a href="#">SOUP</a>
                        <a href="#">VEGETERIAN</a>
                    </div>
                   
                       
                </div>
                </div>
            </div>
        </div>
        
        
    </body>
</html>