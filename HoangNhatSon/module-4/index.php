
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
      
        <div class ="module-4">
            <div class="fullsize">
                
                    <div class="fullsize1">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>TASTY AND CRUNCHY</h5>
                                <h2>INGREDIENTS</h2>
                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                                    tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condor <br>
                                    consectetur adipiscing elit, sed do eiusmod tempor incidition ullam.
                                </h4>
                                <h3><a href="#" >VIEW OUR MENU</a></h3> 
                            </div>
                            <div class="col-md-6">
                                <img src="images/home1-main-image-4.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
     <div class="clearfix"></div>
    </body>
   <div class="clearfix"></div>
</html>