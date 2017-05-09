
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

  <div class="module_19">
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <div class="hinh">
          <img src="images/product1-1-600x600.jpg" alt=""/>
        </div>

        <div class="row abc">

          <div class="hinh1">
            <div class="col-md-4 mot">
             <img src="images/product-gallery3-185x185.jpg" alt=""/>
           </div>
         </div>
         <div class="col-md-4 hai">
           <img src="images/product-gallery3-185x185.jpg" alt=""/>
         </div>
         <div class="col-md-4 ba">
          <img src="images/product-gallery3-185x185.jpg" alt=""/>
        </div>

      </div>
    </div>
    <div class="col-md-6">
      <div class="chu">
        <h3>Seafood</h3>
        <div class="nut">
          <samp class="button"><i class="fa fa-share-alt" aria-hidden="true"></i> SHARE</samp>
          <samp class="button"><i class="fa fa-heart-o" aria-hidden="true"></i> LIKE</samp>
        </div>
        <h4>Lorem ipsum dolor sit</h4>
        <div class="canhle">
          <samp><i class="fa fa-star" aria-hidden="true"></i></samp>
          <samp><i class="fa fa-star" aria-hidden="true"></i></samp>
          <samp><i class="fa fa-star" aria-hidden="true"></i></samp>
          <samp><i class="fa fa-star" aria-hidden="true"></i></samp>
          <samp><i class="fa fa-star" aria-hidden="true"></i></samp>
          <samp class="chu1"> ( 1 customer review) </samp>
        </div>
        <div class="gach"></div>
        <div class="gia">
          <h5>$43.00</h5>
        </div>
        <div class="gach"></div>
        <h4>Sed ut perspiciatis unde omnis iste naturs error sit voluptatem <br>accusantium
          Doloremque lauatium. Sed ut  perspiciatis unde Sed perspiciatis unde
        </h4>
        <div class="add">
          <h4><a href="#">ADD TO CART</a></h4>
        </div>
        <div class="nut1">
          <samp class="ban1">CATEGORY</samp>
          <samp>FOOD</samp>
        </div>

        <div class="mota">
          <samp >DISCRIPTION</samp>
        </div>
        <div class="gach"></div>
      </div>
      <h4>Lorem ipsumdolorsit,consectetur adipiscing,sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.Ut enim minim<br>veniam, quis nostrud exercitation ullamco laboris nisi ualiquip ex ea<br> commodo consequat. Duis aute irure  dolor in asasa in voluptate velit</h4>
      <div class="mota">
        <samp>REVIEWS</samp>
      </div>
       <div class="gach"></div>
      <h4>Lorem ipsumdolorsit,consectetur adipiscing,sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.Ut enim minim<br>veniam, quis nostrud exercitation ullamco laboris nisi ualiquip ex ea<br> commodo consequat. Duis aute irure  dolor in asasa in</h4>
    </div>
  </div>
</div>
</div>

</body>
</html>