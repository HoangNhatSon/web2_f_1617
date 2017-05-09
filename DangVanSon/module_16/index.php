<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
			<div class="type-16">
				<div class="container">
					<div class="col-md-4">
						<div class="row">
						<div class="search">
							<input type="text" class="search1" placeholder="SEARCH">
								<button class="fa fa-search"></button>
							</div>
							<div class="chu">
						<h3>Product Categries</h3>
						</div>
						<div class="gach">
							
						</div>
						<div class="chu1">
							<a href="#">DESSERTS</a><br>
							<a href="#">DINMER</a><br>
							<a href="#">FOOD</a><br>
							<a href="#">LUNCH</a><br>
							<a href="#">STARTERS</a>
						</div>
						
						<div class="clearfix">	
						</div>
						<div class="chu2">
						<h3>Product Categries</h3>
						</div>
						<div class="gach1">
							
						</div>
						<div class="col-md-12">	
						<div class="col-md-6">
							<div class="hinh">
							<img src="images/product7-600x600.jpg" ><span>Starter 
							</span> <span class="chu3">Dish</span>
							</div>
						</div>
						<div class="clearfix">	
						<div class="col-md-6">
							<div class="giatien">
								<a href="#">$21.00</a><br>
							</div>
						</div>	
						</div>
						<div class="clearfix">	
						</div>
						<div class="col-md-6">
							<div class="hinh">
								<img src="images/product6-600x600.jpg" >
								<span class="soup">Fate Salad</span>
							</div>
						</div>
						<div class="clearfix">	
						<div class="col-md-6">
							<div class="giatien">
								<a href="#">$109.00</a><br>
							</div>
						</div>	
						</div>
						<div class="clearfix">	
						</div>
						<div class="col-md-6">
							<div class="hinh">
							<img src="images/product-gallery2-185x185.jpg" ><span class="soup">
							Fresh Soup
							</span> 
							</div>
						</div>
						<div class="clearfix">	
						<div class="col-md-6">
							<div class="giatien">
								<a href="#">$15.00</a><br>
							</div>
						</div>	
						</div>
						<div class="clearfix">	
						</div>
						<div class="col-md-6 lastitem">
							<div class="hinh">
							<img src="images/product-gallery1.jpg" ><span>Carrot
							</span> <span class="chu3">Soup</span>
							</div>
						</div>
						<div class="clearfix">	
						<div class="col-md-6 lastitem">
							<div class="giatien">
								<a href="#">$36.00</a><br>
							</div>
						</div>	
						</div>
						<div class="clearfix">	
						</div>
				</div>
			</div>
			</div>


</body>
</html>