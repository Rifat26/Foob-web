<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taplak - Modern Food Recipe Web Template</title><!-- STYLE CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING:Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="page" class="hfeed site">
        <!-- start page wrapper -->

        <header id="masthead" class="site-header navbar-fixed-top">
            <div class="header-navigation">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col col-md-2">
                            <div class="site-branding navbar-brand">
                                <a href="#"><img src="images/logo.png" alt="Food Recipe Web Template"
                                        title="Taplak"></a>
                            </div><!-- end logo -->
                        </div><!-- end col-md-3 -->

                        <div class="col-12 col-md-8">
                            <nav class="site-navigation navbar navbar-expand-lg navbar-light">

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home <span
                                                    class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Recipes</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                                <a class="dropdown-item" href="recipes.html">Recipe List</a>
                                                <a class="dropdown-item" href="recipe-single.html">Recipe Single</a>
                                                <a class="dropdown-item" href="recipe-index.html">Recipe Index</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="submit-recipe.html">Submit Recipe</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Events</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <a class="dropdown-item" href="event.html">Event List</a>
                                                <a class="dropdown-item" href="event-single.html">Event Single</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Blog</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                                <a class="dropdown-item" href="blog.html">Blog List</a>
                                                <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                                                <a class="dropdown-item" href="archive.html">Archive</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Pages</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                                <a class="dropdown-item" href="contact.html">Contact</a>
                                                <a class="dropdown-item" href="faq.html">FAQ</a>
                                                <a class="dropdown-item" href="typography.html">Typography</a>
                                                <a class="dropdown-item" href="my-account.html">My Account</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="login.html">Login</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">About Us</a>
                                        </li>
                                    </ul>
                                </div><!-- end navbar-collapse -->
                            </nav><!-- end site-navigation -->
                        </div><!-- end col-md-6 -->

                        <div class="col-md-2">
                            <nav class="social-navigation">
                                <div class="social-container">
                                    <ul class="social-menu">
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div><!-- end social-container -->
                                <div class="search-container">
                                    <button type="button" class="buttonsearch" id="buttonsearch">
                                        <i class="fas fa-search openclosesearch"></i><i
                                            class="fas fa-times openclosesearch" style="display:none"></i>
                                    </button>
                                </div><!-- end search-container -->
                            </nav>
                        </div><!-- end col-md-3 -->

                    </div><!-- end row -->

                </div><!-- end container-fluid -->
            </div><!-- end header-navigation -->
        </header><!-- end #masthead -->

        <div class="container searchbardiv" id="formsearch">
            <form role="search" method="get" id="searchform">
                <div class="input-group">
                    <input type="text" id="searchbox" class="form-control" name="s">
                    <div class="input-group-btn">
                        <button class="btn btn-search" id="searchsubmit" type="submit">
                            <strong>Search</strong>
                        </button>
                    </div>
                </div>
            </form>
        </div><!-- end searchbardiv -->

        <div class="head-title">
            <div class="container">
                <h2 class="page-title">Recipe Index</h2>
            </div><!-- end container -->
        </div><!-- end head-title -->

        <div id="main">
            <div class="container">

                <div class="recipe-index card-columns">
                    <div class="card">
                        <div class="index-box">
                            <div class="index-head">
                                <h3>A</h3>
                            </div>
                            <div class="index-list">
                                <ul>
                                    <li>
                                        <a href="#">All</a>
                                        <span>38</span>
                                    </li>
                                    <li>
                                        <a href="#">Asian</a>
                                        <span>3</span>
                                    </li>
                                </ul>
                            </div><!-- end index-list -->
                        </div><!-- end index-box -->
                    </div><!-- end col -->

                    <div class="card">
                        <div class="index-box">
                            <div class="index-head">
                                <h3>B</h3>
                            </div>
                            <div class="index-list">
                                <ul>
                                    <li>
                                        <a href="#">Banana</a>
                                        <span>4</span>
                                    </li>
                                    <li>
                                        <a href="#">Beef</a>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <a href="#">Bolu</a>
                                        <span>5</span>
                                    </li>
                                    <li>
                                        <a href="#">Bajigur</a>
                                        <span>8</span>
                                    </li>
                                </ul>
                            </div><!-- end index-list -->
                        </div><!-- end index-box -->
                    </div><!-- end col -->

                    <div class="card">
                        <div class="index-box">
                            <div class="index-head">
                                <h3>C</h3>
                            </div>
                            <div class="index-list">
                                <ul>
                                    <li>
                                        <a href="#">Cheese</a>
                                        <span>10</span>
                                    </li>
                                    <li>
                                        <a href="#">Chicken</a>
                                        <span>7</span>
                                    </li>
                                    <li>
                                        <a href="#">Chocolate</a>
                                        <span>5</span>
                                    </li>
                                    <li>
                                        <a href="#">Coffee</a>
                                        <span>8</span>
                                    </li>
                                </ul>
                            </div><!-- end index-list -->
                        </div><!-- end index-box -->
                    </div><!-- end col -->

                    <div class="card">
                        <div class="index-box">
                            <div class="index-head">
                                <h3>D</h3>
                            </div>
                            <div class="index-list">
                                <ul>
                                    <li>
                                        <a href="#">Duck Rice</a>
                                        <span>4</span>
                                    </li>
                                    <li>
                                        <a href="#">Durian Cake</a>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <a href="#">Delima Red</a>
                                        <span>5</span>
                                    </li>
                                    <li>
                                        <a href="#">Dendeng</a>
                                        <span>8</span>
                                    </li>
                                </ul>
                            </div><!-- end index-list -->
                        </div><!-- end index-box -->
                    </div><!-- end col -->

                    <div class="card">
                        <div class="index-box">
                            <div class="index-head">
                                <h3>F</h3>
                            </div>
                            <div class="index-list">
                                <ul>
                                    <li>
                                        <a href="#">Fruit Party</a>
                                        <span>18</span>
                                    </li>
                                    <li>
                                        <a href="#">Fish</a>
                                        <span>6</span>
                                    </li>
                                    <li>
                                        <a href="#">Fresh Tofu</a>
                                        <span>4</span>
                                    </li>
                                </ul>
                            </div><!-- end index-list -->
                        </div><!-- end index-box -->
                    </div><!-- end col -->

                    <div class="card">
                        <div class="index-box">
                            <div class="index-head">
                                <h3>G</h3>
                            </div>
                            <div class="index-list">
                                <ul>
                                    <li>
                                        <a href="#">Grill</a>
                                        <span>6</span>
                                    </li>
                                    <li>
                                        <a href="#">Gorengan</a>
                                        <span>12</span>
                                    </li>
                                </ul>
                            </div><!-- end index-list -->
                        </div><!-- end index-box -->
                    </div><!-- end col -->

                    <div class="card">
                        <div class="index-box">
                            <div class="index-head">
                                <h3>L</h3>
                            </div>
                            <div class="index-list">
                                <ul>
                                    <li>
                                        <a href="#">Lumpia</a>
                                        <span>9</span>
                                    </li>
                                    <li>
                                        <a href="#">Lunch</a>
                                        <span>7</span>
                                    </li>
                                    <li>
                                        <a href="#">Lemper</a>
                                        <span>5</span>
                                    </li>
                                </ul>
                            </div><!-- end index-list -->
                        </div><!-- end index-box -->
                    </div><!-- end col -->

                    <div class="card">
                        <div class="index-box">
                            <div class="index-head">
                                <h3>S</h3>
                            </div>
                            <div class="index-list">
                                <ul>
                                    <li>
                                        <a href="#">Sausage</a>
                                        <span>9</span>
                                    </li>
                                    <li>
                                        <a href="#">Seafood</a>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <a href="#">Spicy</a>
                                        <span>5</span>
                                    </li>
                                    <li>
                                        <a href="#">Steak</a>
                                        <span>8</span>
                                    </li>
                                </ul>
                            </div><!-- end index-list -->
                        </div><!-- end index-box -->
                    </div><!-- end col -->


                </div><!-- end card colum -->

            </div><!-- end container -->
        </div><!-- end main -->

        <div class="footer-instagram">
            <div class="ig-btn">
                <a href="#" class="ig-follow"><i class="fab fa-instagram"></i>&nbsp;Follow Me on Instagram</a>
            </div><!-- end ig-btn -->
            <ul class="ig-feed">
                <li><a href="#"><img src="images/content/ig-1.png" alt="photo"></a></li>
                <li><a href="#"><img src="images/content/ig-2.png" alt="photo"></a></li>
                <li><a href="#"><img src="images/content/ig-3.png" alt="photo"></a></li>
                <li><a href="#"><img src="images/content/ig-4.png" alt="photo"></a></li>
                <li><a href="#"><img src="images/content/ig-5.png" alt="photo"></a></li>
                <li><a href="#"><img src="images/content/ig-6.png" alt="photo"></a></li>
            </ul>
        </div><!-- end footer-instagram -->

        <div class="footer-social">
            <div class="container">
                <a href="#"><i class="fab fa-facebook-square"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-pinterest"></i>Pinterest</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
                <a href="#"><i class="fab fa-youtube"></i>Youtube</a>
            </div><!-- end container -->
        </div><!-- footer-social -->

        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget widget-about">
                            <div class="widget-inner">
                                <h3 class="widget-title">About Food Web</h3>
                                <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                    lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                    anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta
                                    decima.</p>
                            </div><!-- end widget-inner -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <div class="widget widget-subscribe">
                            <div class="widget-inner">
                                <h3 class="widget-title">Stay Updated</h3>
                                <span>Register your email address to get promos, product updates and other info.</span>
                                <div class="subscribe-form">
                                    <input type="email" name="EMAIL" placeholder="Your email address" required="">
                                    <input type="submit" value="Subscribe">
                                </div><!-- end subscribe-form -->
                            </div><!-- end widget-inner -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="copy">
                            <p>&copy; 2021 Food Web Template. Made with <i class="fas fa-heart"></i> by Alpha@SR</p>
                        </div><!-- end copy -->
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <ul class="bottom-nav">
                            <li><a href="http://www.bootstrapmb.com/">Home</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                        </ul>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end bottom -->

    </div><!-- end #page hfeed site -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="js/vendor/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins(below),or include individual files as needed -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
