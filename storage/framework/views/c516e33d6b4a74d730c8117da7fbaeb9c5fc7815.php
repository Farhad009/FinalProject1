<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->



    <title>Food Corner</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />



    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/font-awesome.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.carousel.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.theme.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/animate.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/flexslider.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/pricing.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/main.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap-datetimepicker.min.css')); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>

        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        

            .owl-carousel .owl-wrapper, .owl-carousel .owl-item:nth-child(<?php echo e($key + 1); ?>) .item

            {

                background: url(<?php echo e(asset('uploads/slider/'.$slider->image)); ?>);

                background-size: cover;

            }

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </style>



    <script src="<?php echo e(asset('frontend/js/jquery-1.11.2.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('frontend/js/jquery.flexslider.min.js')); ?>"></script>

    <script type="text/javascript">

        $(window).load(function() {

            $('.flexslider').flexslider({

                animation: "slide",

                controlsContainer: ".flexslider-container"

            });

        });

    </script>







</head>

<body data-spy="scroll" data-target="#template-navbar">



<!--== 4. Navigation ==-->

<nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">

    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">

                <span class="sr-only">Toggle navigation</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

            </button>

            <a class="navbar-brand" href="#">

                <img id="logo" src="<?php echo e(asset('frontend/images/Logo_main.png')); ?>" class="logo img-responsive">

            </a>

        </div>



        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="Food-fair-toggle">

            <ul class="nav navbar-nav navbar-right">

                <li><a href="#about">about</a></li>

                <li><a href="#menu-list">menu list</a></li>

                <li><a href="#reserve">reservation</a></li>

                <li><a href="#contact">contact</a></li>

            </ul>

        </div><!-- /.navbar-collapse -->

    </div><!-- /.row -->

</nav>





<!--== 5. Header ==-->

<section id="header-slider" class="owl-carousel">

    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="item">

            <div class="container">

                <div class="header-content">

                    <h1 class="header-title"><?php echo e($slider->title); ?></h1>

                    <p class="header-sub-title"><?php echo e($slider->sub_title); ?></p>

                </div> <!-- /.header-content -->

            </div>

        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</section>







<!--== 6. About us ==-->

<section id="about" class="about">

    <img src="<?php echo e(asset('frontend/images/icons/about_color.png')); ?>" class="img-responsive section-icon hidden-sm hidden-xs">

    <div class="wrapper">

        <div class="container-fluid">

            <div class="row dis-table">

                <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">



                </div>

                <div class="col-xs-12 col-sm-6 dis-table-cell">

                    <div class="section-content">

                        <h2 class="section-content-title">About us</h2>

                        <p class="section-content-para">

                            Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.

                        </p>

                        <p class="section-content-para">

                            beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.

                        </p>

                    </div> <!-- /.section-content -->

                </div>

            </div> <!-- /.row -->

        </div> <!-- /.container-fluid -->

    </div> <!-- /.wrapper -->

</section> <!-- /#about -->





<!--==  7. Afordable Pricing  ==-->

<section id="menu-list" class="menu-list">

    <div id="w">

        <div class="pricing-filter">

            <div class="pricing-filter-wrapper">

                <div class="container">

                    <div class="row">

                        <div class="col-md-10 col-md-offset-1">

                            <div class="section-header">

                                <h2 class="pricing-title">Our Menu List In Affordable Pricing</h2>

                                <ul id="filter-list" class="clearfix">

                                    <li class="filter" data-filter="all">All</li>

                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <li class="filter" data-filter="#<?php echo e($category->slug); ?>"><?php echo e($category->name); ?> <span class="badge"><?php echo e($category->items->count()); ?></span></li>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul><!-- @end  #filter-list -->

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <div class="container">

            <div class="row">

                <div class="col-md-10 col-md-offset-1">

                    <ul id="menu-pricing" class="menu-price">



                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <li class="item" id="<?php echo e($item->category->slug); ?>">

                                <a href="#">

                                    <img src="<?php echo e(asset('uploads/item/'.$item->image)); ?>" class="img-responsive" alt="Item" style="height: 300px; width: 369px;" >

                                    <div class="menu-desc text-center">

                                            <span>

                                                <h3><?php echo e($item->name); ?></h3>

                                                <?php echo e($item->description); ?>


                                            </span>

                                    </div>

                                </a>

                                <h2 class="white">$<?php echo e($item->price); ?></h2>

                            </li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>



                    <!-- <div class="text-center">

                            <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>

                    </div> -->



                </div>

            </div>

        </div>



    </div>

</section>




        <!--== 15. Reserve A Table! ==-->
        <section id="reserve" class="reserve">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/reserve_black.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Reserve A Table !</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                            
                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#reserve -->



        <section class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="<?php echo e(asset('frontend/images/icons/reserve_color.png')); ?>">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="reserve.php">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  e-mail">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone">
                                            </div>
                                            <div class="form-group">
                                        <input type="text" class="form-control reserve-form empty iconified" name="dateandtime" id="datetimepicker1" placeholder="&#xf017;  Time">
                                    </div>

                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Make a reservation
                                            </button>
                                        </div>
                                            
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Hours</h3>
                                    <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                    <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                    <div class="launch">
                                        <h4>Lunch</h4>
                                        <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                    </div>

                                    <div class="dinner">
                                        <h4>Dinner</h4>
                                        <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                        <p>Sun: 5:30 PM - 12:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




        <section id="contact" class="contact">
            <div class="container-fluid color-bg">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell">
                        <h2 class="section-title">Contact With us</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <p>16th Birn street Get Plaza (4th floar) USA</p>
                            <p>+44 12 213584</p>
                            <p>example@mail.com </p>
                        </div>
                    </div>
                </div>
                <div class="social-media">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <ul class="center-block">
                                <li><a href="#" class="fb"></a></li>
                                <li><a href="#" class="twit"></a></li>
                                <li><a href="#" class="g-plus"></a></li>
                                <li><a href="#" class="link"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid">
            <div class="row">
                <div id="map-canvas"></div>
            </div>
        </div>



        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                             <form class="contact-form" method="post" action="contact.php">
                                
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Message"></textarea>
                                </div>

                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2015 <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    
       
        

        <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
        <script type="<?php echo e(asset('frontend/text/javascript" src="js/jquery.mixitup.min.js')); ?>" ></script>
        <script src="<?php echo e(asset('frontend/js/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.validate.js')); ?>"></script>
        <script type="<?php echo e(asset('frontend/text/javascript" src="js/jquery.hoverdir.js')); ?>"></script>
        <script type="<?php echo e(asset('frontend/text/javascript" src="js/jQuery.scrollSpeed.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/script.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/bootstrap-datetimepicker.min.js')); ?>"></script>
        <script>
       $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })
    </script>

    </body>
</html><?php /**PATH C:\laragon\www\OnlineCorner\resources\views/welcome.blade.php ENDPATH**/ ?>