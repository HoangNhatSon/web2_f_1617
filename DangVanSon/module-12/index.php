
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
        <div class="modul12">
            <div class="container">
                <div class="chu">
                    <h4>TASTY AND CRUNCHY</h4>
                    <h1>SPECIAL RECIPES</h1>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm<br> reminusto doeiusmod tempor incidition ulla mco laboris nisi ut aliquip<br> ex ea commo condorico consectetur adipiscing elitut aliquip.</h5>
                </div>
                <div class=" row">
                    <div class="items">
                    <div class="col-md-4 item">
                        <img src="images/blog-post1.jpg" alt=""/>
                        <h4>APRIL 11, 2016 HEALTHY</h4>
                        <h2>ITALIAN FAMOUS PASTA WITH MEAT AND CHEESE</h2>
                        <h5>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauatium, totam rem aperiam perspiciatis unde omnis....</h5>
                        <h3>1 COMMENTS</h3>
                    </div>
                    <div class="col-md-4 item">
                       <img src="images/blog-post2.jpg" alt=""/>
                        <h4>APRIL 11, 2016 RECIPES</h4>
                        <h2>CHOCOLATE TRUFFLE CAKE WITH HONEY FLAVOR</h2>
                        <h5>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauatium, totam rem aperiam perspiciatis unde omnis....</h5>
                        <h3>2 COMMENTS</h3>
                    </div>
                        <div class="col-md-4 item">
                        <img src="images/blog-post3.jpg" alt=""/>
                        <h4>MEDITERRANEAN TASTE</h4>
                        <h2>ITALIAN FAMOUS PASTA WITH MEAT AND CHEESE</h2>
                        <h5>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauatium, totam rem aperiam perspiciatis unde omnis....</h5>
                        <h3>1 COMMENTS</h3>
                    </div>
                </div>
            </div>
        </div>
        
        
    </body>
</html>