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
                <h2 class="page-title">The Recipe</h2>
            </div><!-- end container -->
        </div><!-- end head-title -->

        <div id="main">
            <div class="container">

                <div class="recipe-content">

                    <div class="row">
                        <div class="col">
                            <div class="recipe-lvl">
                                <span>LEVEL : <a href="#">MASTER</a></span>
                                <span>TIME : 2 HOURS</span>
                            </div><!-- end recipe level -->
                            <div class="recipe-head">
                                <h1 class="recipe-title">Tiger Pawn Roasted</h1>
                                <div class="recipe-auth">
                                    <img src="images/content/auth-03.png" alt="recipe author">
                                    <span>Posted by <a href="#">Dina Makulatuwa</a></span>
                                </div><!-- recipe author -->
                                <div class="recipe-finger">

                                    <div class="box-sharing">
                                        <a href="#"><i class="fas fa-print"></i></a>
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                        <a href="#"><i class="fas fa-bookmark"></i></a>
                                    </div>

                                    <div class="recipe-rating">
                                        <span>DELICIOUS : <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="far fa-star"></i></span>
                                    </div>
                                </div><!-- end recipe finger -->
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-md-6">
                            <figure class="recipe-pict">
                                <img src="images/content/image-recipe.png" alt="IMG 01">
                            </figure>
                        </div><!-- end col -->
                        <div class="col-md-6">
                            <div class="detail-desc">
                                <p><strong>DESCRIPTION</strong></p>
                                <p>Maecenas eu maximus turpis. Aliquam eget libero vitae elit tempor mollis. Curabitur
                                    sed mi et quam varius <em>rhoncus velex</em>. Mauris facilisis consequat libero non
                                    varius. Suspendisse nec quam tincidunt, imperdiet risus sed, finibus erat. Curabitur
                                    egestas nulla non dolor <a href="#">gravida</a>, maximus dictum massa lacinia. Cras
                                    porttitor, diam ac lacinia scelerisque, arcu arcu aliquet quam, non dignissim tortor
                                    turpis at mauris. Ut eget euismod nulla.</p>

                                <p>Donec quis finibus nibh. Donec mattis id orci sed dapibus. Praesent augue odio,
                                    imperdiet sed mollis in, vehicula quis nulla. Ut eu vulputate ligula. Vivamus
                                    volutpat lectus dolor, sed congue elit rhoncus pharetra. Praesent non posuere felis.
                                    Ut aliquam luctus odio, ac commodo felis consectetur nec. Integer vehicula sit amet
                                    erat ut pharetra. Mauris ornare ligula dui, id placerat lacus iaculis sed.</p>
                            </div><!-- recipe desc -->
                            <div class="recipe-tags">
                                <span>Tags : <a href="#">cooking</a>, <a href="#">pawn</a>, <a href="#">roasted</a>, <a
                                        href="#">delicious</a></span>
                            </div><!-- end recipe tags -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="space-section"></div>

                    <div class="row">
                        <div class="ingredient col-md-4">
                            <p><strong>INGREDIENTS</strong></p>
                            <ul>
                                <li>3 pound sesame snaps powder gingerbread</li>
                                <li>2 ounce lemon drops chupa chups bear</li>
                                <li>1 (1.25 ounce) package cookie cotton candy</li>
                                <li>1 (14.5 ounce) marshmallow liquorice</li>
                                <li>1 cup crushed tortilla chips</li>
                                <li>1/2 cup sour cream (optional)</li>
                                <li>1/4 cup chopped red onions</li>
                                <li>1 ounce sugar plum pastry fruitcake</li>
                                <li>1/3 fruitcake powder halvah</li>
                                <li>1/2 cup marzipan</li>
                                <li>1/4 ounce muffin caramels</li>
                                <li>1/2 cup jujubes jelly chupa</li>
                                <li>1/4 ounce bonbon topping</li>
                            </ul>
                        </div><!-- end col -->
                        <div class="direction col-md-8">
                            <p><strong>DIRECTIONS</strong></p>
                            <ol>
                                <li>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                        consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                        et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis
                                        dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend
                                        option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                                    </p>
                                </li>
                                <li>
                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum
                                        claritatem. Investigationes demonstraverunt lectores legere me lius quod ii
                                        legunt saepius.</p>
                                </li>
                                <li>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta
                                        decima.</p>
                                </li>
                                <li>
                                    <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum,
                                        consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat.</p>
                                </li>
                                <li>
                                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                </li>
                                <li>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                        consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                        et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis.
                                    </p>
                                </li>
                            </ol>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="space-section"></div>

                    <div class="row">
                        <div class="col-md-4">
                            <p><strong>NUTRITION</strong></p>
                            <table style="width: 100%">
                                <tr>
                                    <td><strong>Calories</strong></td>
                                    <td>102 kcal</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td><strong>Cholesterol</strong></td>
                                    <td>9 mg</td>
                                    <td>3%</td>
                                </tr>
                                <tr>
                                    <td><strong>Carbohydrates</strong></td>
                                    <td>12.4 gr</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td><strong>Fat</strong></td>
                                    <td>4.8 gr</td>
                                    <td>7%</td>
                                </tr>
                                <tr>
                                    <td><strong>Protein</strong></td>
                                    <td>4.6 gr</td>
                                    <td>9%</td>
                                </tr>
                            </table>
                        </div><!-- end col -->
                        <div class="col-md-8">
                            <div class="nutrition-bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div><!-- end col -->

                    </div><!-- end row -->

                </div><!-- end recipe content -->

            </div><!-- end container -->
        </div><!-- end main -->

        <div class="related-recipe">
            <div class="container">
                <h3>RELATED RECIPES</h3>
                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="recipe-thumb">
                            <img src="images/content/thumb-1.png" alt="Recipe Image">
                            <a href="#" class="bookmarker"><i class="fas fa-bookmark"></i></a>
                            <a href="#" class="view-recipe">VIEW RECIPE</a>
                        </div>
                        <div class="recipe-desc">
                            <h2 class="recipe-title">
                                <a href="#">Salad Nicoise</a>
                            </h2>
                            <p><em>By Lina Sukowati</em></p>
                            <span><i class="fas fa-clock"></i>&nbsp;9 Minutes</span>
                        </div><!-- end recipe-desc -->
                    </div><!-- end col -->
                    <div class="col-6 col-md-3">
                        <div class="recipe-thumb">
                            <img src="images/content/thumb-2.png" alt="Recipe Image">
                            <a href="#" class="bookmarker"><i class="fas fa-bookmark"></i></a>
                            <a href="#" class="view-recipe">VIEW RECIPE</a>
                        </div>
                        <div class="recipe-desc">
                            <h2 class="recipe-title">
                                <a href="#">Grilled Beef Steak</a>
                            </h2>
                            <p><em>By Eka Nurwasilah</em></p>
                            <span><i class="fas fa-clock"></i>&nbsp;26 Minutes</span>
                        </div><!-- end recipe-desc -->
                    </div><!-- end col -->
                    <div class="col-6 col-md-3">
                        <div class="recipe-thumb">
                            <img src="images/content/thumb-3.png" alt="Recipe Image">
                            <a href="#" class="bookmarker"><i class="fas fa-bookmark"></i></a>
                            <a href="#" class="view-recipe">VIEW RECIPE</a>
                        </div>
                        <div class="recipe-desc">
                            <h2 class="recipe-title">
                                <a href="#">Tiger Prawns Roasted</a>
                            </h2>
                            <p><em>By Nurjanah</em></p>
                            <span><i class="fas fa-clock"></i>&nbsp;27 Minutes</span>
                        </div><!-- end recipe-desc -->
                    </div><!-- end col -->
                    <div class="col-6 col-md-3">
                        <div class="recipe-thumb">
                            <img src="images/content/thumb-4.png" alt="Recipe Image">
                            <a href="#" class="bookmarker"><i class="fas fa-bookmark"></i></a>
                            <a href="#" class="view-recipe">VIEW RECIPE</a>
                        </div>
                        <div class="recipe-desc">
                            <h2 class="recipe-title">
                                <a href="#">Korean Soup</a>
                            </h2>
                            <p><em>By Lina Sukowati</em></p>
                            <span><i class="fas fa-clock"></i>&nbsp;45 Minutes</span>
                        </div><!-- end recipe-desc -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- related recipe -->

        <div class="recipe-comment">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <div class="comment-outer">
                            <div id="comments" class="comments-area">
                                <h2 class="comments-title">4 COMMENTS FOR THIS RECIPE</h2>
                                <ol class="comment-list">

                                    <li class="comment">
                                        <!-- start comment -->
                                        <div class="comment-body">

                                            <figure class="comment-author vcard">
                                                <img src="images/content/auth-00.png" alt="">
                                            </figure><!-- end comment-author vcard -->

                                            <div class="comment-wrapper">
                                                <div class="comment-meta">
                                                    <b class="fn">Jessica Marchetti</b>
                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </div><!-- end comment-meta -->
                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <time datetime="2019-09-04T18:44:25+00:00">December 23 2019 pada
                                                            6:44 pm</time>
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                                                        esse molestie consequat, vel illum dolore eu feugiat nulla
                                                        facilisis at vero eros et accumsan et iusto odio dignissim qui
                                                        blandit praesent luptatum zzril delenit augue duis dolore te
                                                        feugait nulla facilisi.</p>
                                                </div><!-- end comment-content -->
                                            </div><!-- end comment-wrapper -->

                                        </div><!-- end comment-body -->
                                    </li><!-- end li -->

                                    <li class="comment">
                                        <!-- start comment -->
                                        <div class="comment-body">

                                            <figure class="comment-author vcard">
                                                <img src="images/content/auth-01.png" alt="">
                                            </figure><!-- end comment-author vcard -->

                                            <div class="comment-wrapper">
                                                <div class="comment-meta">
                                                    <b class="fn">Paijo Kossim</b>
                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </div><!-- end comment-meta -->
                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <time datetime="2019-09-04T18:44:25+00:00">December 23 2019 pada
                                                            6:44 pm</time>
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                                                        esse molestie consequat, vel illum dolore eu feugiat nulla
                                                        facilisis at vero eros et accumsan et iusto odio dignissim qui
                                                        blandit praesent luptatum zzril delenit augue duis dolore te
                                                        feugait nulla facilisi.</p>
                                                </div><!-- end comment-content -->
                                            </div><!-- end comment-wrapper -->

                                        </div><!-- end comment-body -->

                                        <ol class="children">
                                            <li class="comment">
                                                <!-- start-children-comment -->
                                                <div class="comment-body">

                                                    <figure class="comment-author vcard">
                                                        <img src="images/content/auth-03.png" alt="">
                                                    </figure><!-- end comment-author vcard -->

                                                    <div class="comment-wrapper">
                                                        <div class="comment-meta">
                                                            <b class="fn">Dina Makulatuwa</b>
                                                            <div class="reply">
                                                                <a href="#" class="comment-reply-link">Reply</a>
                                                            </div>
                                                        </div><!-- end comment-meta -->
                                                        <div class="comment-metadata">
                                                            <a href="#">
                                                                <time datetime="2019-09-04T18:44:25+00:00">December 23
                                                                    2019 pada 6:44 pm</time>
                                                            </a>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate
                                                                velit esse molestie consequat, vel illum dolore eu
                                                                feugiat nulla facilisis at vero eros et accumsan et
                                                                iusto odio dignissim qui blandit praesent luptatum zzril
                                                                delenit augue duis dolore te feugait nulla facilisi.</p>
                                                        </div><!-- end comment-content -->
                                                    </div><!-- end comment-wrapper -->

                                                </div><!-- end comment-body -->
                                            </li><!-- end comment -->
                                        </ol><!-- end children -->
                                    </li><!-- end li -->

                                    <li class="comment">
                                        <!-- start comment -->
                                        <div class="comment-body">

                                            <figure class="comment-author vcard">
                                                <img src="images/content/auth-02.png" alt="">
                                            </figure><!-- end comment-author vcard -->

                                            <div class="comment-wrapper">
                                                <div class="comment-meta">
                                                    <b class="fn">Johnny Kurniawan</b>
                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </div><!-- end comment-meta -->
                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <time datetime="2019-09-04T18:44:25+00:00">December 23 2019 pada
                                                            6:44 pm</time>
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                                                        esse molestie consequat, vel illum dolore eu feugiat nulla
                                                        facilisis at vero eros et accumsan et iusto odio dignissim qui
                                                        blandit praesent luptatum zzril delenit augue duis dolore te
                                                        feugait nulla facilisi.</p>
                                                </div><!-- end comment-content -->
                                            </div><!-- end comment-wrapper -->

                                        </div><!-- end comment-body -->
                                    </li><!-- end li -->

                                </ol><!-- end .comment-list -->
                            </div><!-- end #comments-area -->

                            <div id="respond" class="comment-respond">
                                <h2 id="reply-title" class="comment-reply-title">Leave a Reply</h2>
                                <form class="comment-form">
                                    <p class="comment-notes">Your email address will not be published. All fields are
                                        required.</p>
                                    <p class="comment-form-email">
                                        <label for="author">Name</label>
                                        <span class="required">*</span>
                                        <input id="author" type="text" class="input-text" name="author">
                                    </p>
                                    <p class="comment-form-author">
                                        <label for="email">Email</label>
                                        <span class="required">*</span>
                                        <input id="email" type="text" class="input-text" name="author">
                                    </p>
                                    <p class="comment-form-url">
                                        <label for="url">Website</label>
                                        <span class="required">*</span>
                                        <input id="url" type="text" class="input-text" name="author">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label for="comment">Comment</label>
                                        <textarea name="comment" id="comment" cols="45" rows="10"
                                            class="input-text"></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input class="btn btn-primary" name="submit" type="submit" id="button"
                                            value="Post Comment">
                                    </p>
                                </form><!-- end #comment-form -->
                            </div><!-- end comment-respond -->

                        </div><!-- end comment-outer -->
                    </div>
                </div>
            </div>
        </div>

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
