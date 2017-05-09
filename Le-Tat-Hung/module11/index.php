
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
        <div class="module-11">
            
                <div class="fullsize">
                    <div class="row">
                       
                        <div class="col-md-7">
                                 <div class="chu">
                                    <h3>TASTY AND CRUNCHY</h3>
                                    <h1>OUR CHEF</h1>
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea<br> commodo condor consectetur adipiscing elit, sed do eiusmod tempor<br> incidition ullam.<br>
                                    </h5>
                                    <a href="#"><h4>VIEW OUR MENU</h4></a>
                                </div>
                        </div>
                        <div class="col-md-5">
                                <div class="hinh">
                                    <img src="images/home1-main-image-5.jpg" alt=""/>
                                </div>
                        </div>
                    </div>
                </div>                
           
        </div>
    </body>
</html>