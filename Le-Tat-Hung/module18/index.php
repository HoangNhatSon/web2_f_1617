
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
        <div class="module18">
            <div class="col-md-2">
                <div class="logo">
                    <a href="#"><img src="images/meni-logo-dark.png" alt=""/></a>
                </div>
            </div>
            <div class="col-md-7">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">HOME</a></li>
                                <li><a href="#">PAGES</a></li>
                                <li><a href="#">ELEMENTS</a></li> 
                                <li><a href="#">PORTFOLIO</a></li>
                                <li><a href="#">BLOG</a></li> 
                                <li><a href="#">SHOP</a></li> 
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            
            <div class="col-md-3 lasticon">
                <ul>
                    <a href="#"><li><i class="fa fa-shopping-bag" aria-hidden="true"></i></li></a>
                    <a href="#"><li><i class="fa fa-search"></i></li></a>
                    <a href="#"><li><i class="fa fa-bars"></i></li></a>
                </ul>
            </div>
            <div class="clear" style="clear: both;"></div>
            <div class="banner">
                <h1>Shop</h1>
            </div>
        </div>
    </body>
</html>