<?php
    session_start();
    require("includes/common.php");
    if (isset($_SESSION['email'])) {
       header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="mobiles, watchs shopping, handsets, smartwatches">
        <meta name="Author" content="Vishal Kumar">
        <title>Welcome | lets_deal</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </head>
    <body style="padding-top: 80px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

           <div id="content">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			   <!--indicators-->
			   <ol class="carousel-indicators">
			        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
			   </ol>
			   <div class="carousel-inner" role="listbox">
			       <div class="item active">
				      <div id="banner_image">
				         <div class="container">
						     <center>
							     <div id="banner_content">
								      <h1>Sapno ki apni Dukaan.</h1>
									  <p>For the students by the students</p>
									  <br/>
									  <a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger btn-lg active">Shop Now!</a>
								 </div>
							 </center>
					     </div>
					  </div>
				   </div>
				   <div class="item">
				      <div id="banner_image2">
				         <div class="container">
						     <center>
							     <div id="banner_content2">
								      <h1>Save your time</h1>
									  <p>get all your requirements within the campus</p>
									  <br/>
									  <a href="products.php" class="btn btn-danger btn-lg active">Shop Now!</a>
								 </div>
							 </center>
					     </div>
					  </div>
				   </div>
				   <div class="item">
				      <div id="banner_image3">
				         <div class="container">
						     <center>
							     <div id="banner_content3">
								      <h1>lets_deal</h1>
									  <p>grab the Best re-useable items just on a click</p>
									  <br/>
									  <a href="products.php" class="btn btn-danger btn-lg active">Shop Now!</a>
								 </div>
							 </center>
					     </div>
					  </div>
				   </div>
			   </div>
			   <!-- Left and right controls -->
               <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#myCarousel" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
               </a>
			</div>

            <div class="container">
			   <h3 class="banner_below">OUR <span>COLLECTIONS</span></h3>
			</div>
            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="images/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Electronic</h3>
                                    <p>The best reuseable electronics items</p>
									<a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger btn-lg active">Order Now!</a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="images/10.jpg" alt="">
                                <div class="caption" style="padding-top: 20px;">
                                    <h3>bicycle</h3>
                                    <p>get cycle at lower price</p>
									<a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger btn-lg active">Order Now!</a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="images/13.jpg" alt="">
                                <div class="caption" style="padding-top: 68px;">
                                    <h3>Books/Notes</h3>
                                    <p>No more tears from tierce.</p>
									<a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger btn-lg active">Order Now!</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!--Item categories listing end-->
        </div>

        <!--Footer-->
        <?php
           include 'includes/footer.php';
        ?>
        <!--Footer end-->

        <?php
		    include("modal.php");
		?>


    </body>
</html>
