
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

  <div class="module-6">
   <div class="container">
     <div class="top">
      <h5>TASTY AND CRUNCHY</h5>
      <h2>OUR MENU</h2>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sedolorm reminusto <br> doeiusmod tempor incidition ulla mco laboris nisi ut aliquip 
        ex ea commo <br> condorico consectetur adipiscing elitut aliquip.
      </h4>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="menuone">

          <div class="col-md-6">
              <div class="noidung">
                <h5>MUSSELS SOUP</h5>
                <span class="fa"><i class="fa fa-star" aria-hidden="true"></i></span> 
              </div>
              <div class="ngang"></div>
              <span class="money">   $ 23.00</span>
              <a href="#">Lorem ipsum dolor sit amet, feugiat delicata.</a>
          </div>
          <div class="col-md-6">
          <div class="canh">
            <div class="noidung">
              <h5>SICILIAN MEATBALLS</h5>
            </div>
            <div class="duoi"></div>
            <span class="money">   $ 25.00</span>
            <a href="#">Lorem ipsum dolor sit amet, feugiat delicata.</a>
          </div>
          </div>
          <div class="col-md-6">
          <div class="canh">
            <div class="noidung">
              <h5>ITALIAN SPAGHETTI</h5>
            </div>
            <div class="duoi"></div>
            <span class="money">   $ 12.00</span>
            <a href="#">Lorem ipsum dolor sit amet, feugiat delicata.</a>
          </div>
          </div>
          <div class="col-md-6">
          <div class="canh">
            <div class="noidung">
              <h5>SEAFOOD SALAD</h5>
              <span class="fa"><i class="fa fa-star" aria-hidden="true"></i></span> 

            </div>
            <div class="ngang"></div>
            <span class="money">   $ 17.00</span>
            <a href="#">Lorem ipsum dolor sit amet, feugiat delicata.</a>
          </div>
          </div>

          <div class="col-md-6">
          <div class="canh">
            <div class="noidung">
              <h5>BEEF BURGER</h5>
              <span class="fa"><i class="fa fa-star" aria-hidden="true"></i></span> 

            </div>
            <div class="ngang"></div>
            <span class="money">   $ 10.00</span>
            <a href="#">Lorem ipsum dolor sit amet, feugiat delicata.</a>
          </div>
          </div>

          <div class="col-md-6">
          <div class="canh">
            <div class="noidung">
              <h5>ROAST CHICKEN</h5>

            </div>
            <div class="duoi1"></div>
            <span class="money">   $ 22.00</span>
            <a href="#">Lorem ipsum dolor sit amet, feugiat delicata.</a>
          </div>
          </div>

          <div class="col-md-6">
          <div class="canh">
            <div class="noidung">
              <h5>STUFFED STRAWBERRY</h5>
            </div>
            <div class="duoi2"></div>
            <span class="money">   $ 15.00</span>
            <a href="#">Lorem ipsum dolor sit amet, feugiat delicata.</a>
          </div>
          </div> 

          <div class="col-md-6">
          <div class="canh">
            <div class="noidung">
              <h5>GRILLED FISH</h5>

            </div>
            <div class="duoi3"></div>
            <span class="money">   $ 36.00</span>
            <a href="#">Lorem ipsum dolor sit amet, feugiat delicata.</a>

          </div>
          </div>


        </div>
      </div>
    </div>

  </div>
</body>
</html>