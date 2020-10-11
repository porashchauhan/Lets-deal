<?php
session_start();
require("includes/common.php");
if (!isset($_SESSION['email']))
	header('location: index.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | lets_deal</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <center><h1 style="letter-spacing: 3px;">Welcome to our Online Store!</h1></center>
                <p style="text-align:center;"> No need to hunt around, we have all in one place.</p>

            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/5.jpg" alt="">
                        <div class="caption">
                            <h3>Hercules sprint 3000  </h3>
                            <p>(fair condition)<br />Price: Rs.1200 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                // created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/2.jpg" alt="">
                        <div class="caption">
                            <h3>Dell laptop</h3>
                            <p>(fair condition) Price: Rs. 20000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                // created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                // created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/4.jpg" alt=""  style="height: 167px";>
                        <div class="caption">
                            <h3>Boat bass headphone</h3>
                            <p>Price: Rs.600</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                // created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/18.jpg" alt=""  style="height: 167px";>
                        <div class="caption">
                            <h3>Tata cooler</h3>
                            <p>Price: Rs.1000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model2</h3>
                            <p>Price: Rs. 800</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                // created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 1000 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                // created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/21.jpg" alt=""  style="height: 167px";>
                        <div class="caption">
                            <h3>Pro git 2nd edition </h3>
                            <p>Price: Rs. 200 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                // created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/22.jpg" alt=""  style="height: 167px";>
                        <div class="caption">
                            <h3>Wireless keyboard </h3>
                            <p>(fair condition) Price: Rs. 400 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                // created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/23.jpg" alt=""  style="height: 140px";>
                        <div class="caption">
                            <h3>Rasberry pie module</h3>
                            <p>(working condition) Price: Rs.200</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/24.jpg" alt="">
                        <div class="caption">
                            <h3>hero sprint</h3>
                            <p>Price: Rs.900</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                // created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/25.jpg" alt=""  style="height: 167px";>
                        <div class="caption">
                            <h3>Bed study table</h3>
                            <p>Price Rs.700</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                // created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
		<?php include("modal.php"); ?>
    </body>

</html>
