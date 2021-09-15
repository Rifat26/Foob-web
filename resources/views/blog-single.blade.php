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
                <h2 class="page-title">Blog Post</h2>
            </div><!-- end container -->
        </div><!-- end head-title -->

        <div id="main">
            <div class="container">
                <div class="row">

                    <div id="primary" class="content-area col-md-8">
                        <div id="content" class="site-content">

                            <div class="post format-image hentry">

                                <div class="entry-format">
                                    <div class="entry-meta">
                                        <div class="entry-date">
                                            <a href="#">
                                                <time class="published" datetime="2019-12-22"
                                                    title="December 22, 2019 - 21:12 pm">Dec<span
                                                        class="date">22</span>2019</time>
                                            </a>
                                        </div><!-- end entry-date -->


                                        <div class="social-shares">
                                            <span class="head-share">
                                                <i class="fas fa-share-alt"></i>
                                            </span>
                                            <div class="other-share">
                                                <a href="#" class="facebook">
                                                    <i class="fab fa-facebook-square"></i>
                                                </a>
                                                <a href="#" class="twitter">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="#" class="linkedin">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                                <a href="#" class="google-plus">
                                                    <i class="fab fa-pinterest"></i>
                                                </a>
                                                <a href="#" class="pinterest">
                                                    <i class="fas fa-envelope"></i>
                                                </a>
                                            </div><!-- end other-share -->
                                        </div><!-- end social-share -->

                                    </div><!-- end entry-meta -->
                                </div><!-- end entry-format -->

                                <div class="inner">

                                    <div class="entry-header">
                                        <span class="author vcard">
                                            Posted by <a href="#">Johnny Kurniawan</a>
                                        </span><!-- end author -->
                                        <span class="cat-links">
                                            <a href="#">mechanical</a>,
                                            <a href="#">random</a>,
                                            <a href="#">photography</a>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fa fa-fw fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
                                    </div><!-- end entry-header -->

                                    <h1 class="entry-title">Typi Non Habent Claritatem Insitam Est Usus Legentis in Qui
                                        Facit Eorum Claritatem</h1>

                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. Duis autem
                                            vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                            consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                                            accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                            augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta
                                            nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                                            facer possim assum. Typi non habent claritatem insitam; est usus legentis in
                                            iis qui facit eorum claritatem.</p>
                                        <figure class="wp-caption">
                                            <img src="images/content/image-49.png" alt="">
                                            <figcaption class="wp-caption-text">Image Caption : Sample Image from
                                                Shutterstock Photos</figcaption>
                                        </figure>
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                            lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum
                                            claram, anteposuerit litterarum formas humanitatis per seacula quarta decima
                                            et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari,
                                            fiant sollemnes in futurum.</p>
                                        <blockquote>Investigationes demonstraverunt lectores legere me lius quod ii
                                            legunt saepius.</blockquote>
                                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum
                                            claritatem. Investigationes demonstraverunt lectores legere me lius quod ii
                                            legunt saepius.</p>
                                        <h2>Heading Font Size</h2>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                            consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                                            accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                            augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta
                                            nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                                            facer possim assum. </p>
                                        <ul>
                                            <li>Vulputate velit esse molestie</li>
                                            <li>Typi non habent claritatem insitam</li>
                                            <li>Vero eros et accumsan et iusto odio</li>
                                            <li>Investigationes demonstraverunt lectores legere</li>
                                            <li>Eleifend option congue nihil imperdiet</li>
                                        </ul>
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                            lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum
                                            claram, anteposuerit litterarum formas humanitatis per seacula quarta decima
                                            et quinta decima.</p>
                                        <h4>Heading Two : Table Section</h4>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>HEADING ONE</th>
                                                    <th>HEADING TWO</th>
                                                    <th>HEADING THREE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Division One</td>
                                                    <td>Division One</td>
                                                    <td>Division One</td>
                                                </tr>
                                                <tr>
                                                    <td>Division Two</td>
                                                    <td>Division Two</td>
                                                    <td>Division Two</td>
                                                </tr>
                                                <tr>
                                                    <td>Division Three</td>
                                                    <td>Division Three</td>
                                                    <td>Division Three</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. Duis autem
                                            vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                            consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                                            accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                            augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta
                                            nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                                            facer possim assum. Typi non habent claritatem insitam; est usus legentis in
                                            iis qui facit eorum claritatem.</p>
                                        <p>
                                            <span>Categories : <a href="#"><em>Uncategorized</em></a></span><br />
                                            <span>Tags : <a href="#"><em>News</em></a> , <a
                                                    href="#"><em>Documentation</em></a></span>
                                        </p>
                                    </div><!-- end entry-content -->

                                </div><!-- end inner -->

                            </div><!-- end format-image hentry -->

                            <div class="author-wrapper">
                                <h2>About Author</h2>
                                <figure class="author-ava">
                                    <img src="images/content/auth-03.png" alt="Author">
                                </figure>
                                <div class="author-context">

                                    <div class="author-name">
                                        <a href="#">Dina Makulatuwa</a>
                                    </div><!-- end auth-name -->

                                    <div class="author-content">
                                        <p>Hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                                            feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                                            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla
                                            facilisi.</p>
                                    </div>

                                </div><!-- end author-wrapper -->
                            </div><!-- end author-area -->

                            <div class="related-content">
                                <h2>Related Content</h2>
                                <div class="row">

                                    <div class="col-md-4">
                                        <figure>
                                            <img src="images/content/blog-thumb-01.png" alt="">
                                        </figure>
                                        <div class="related-title">
                                            <h3><a href="#">Claritas est etiam processus dynamicus</a></h3>
                                        </div>
                                    </div><!-- end column -->

                                    <div class="col-md-4">
                                        <figure>
                                            <img src="images/content/blog-thumb-02.png" alt="">
                                        </figure>
                                        <div class="related-title">
                                            <h3><a href="#">Mauris ornare sodales gravida</a></h3>
                                        </div>
                                    </div><!-- end column -->

                                    <div class="col-md-4">
                                        <figure>
                                            <img src="images/content/blog-thumb-03.png" alt="">
                                        </figure>
                                        <div class="related-title">
                                            <h3><a href="#">Nulla sit amet justo nunc finibus commodo</a></h3>
                                        </div>
                                    </div><!-- end column -->

                                </div><!-- end row -->
                            </div><!-- end related-content -->

                            <div class="comment-outer">
                                <div id="comments" class="comments-area">
                                    <h2 class="comments-title">4 COMMENTS</h2>
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
                                                            <time datetime="2019-09-04T18:44:25+00:00">December 23 2019
                                                                pada 6:44 pm</time>
                                                        </a>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate
                                                            velit esse molestie consequat, vel illum dolore eu feugiat
                                                            nulla facilisis at vero eros et accumsan et iusto odio
                                                            dignissim qui blandit praesent luptatum zzril delenit augue
                                                            duis dolore te feugait nulla facilisi.</p>
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
                                                            <time datetime="2019-09-04T18:44:25+00:00">December 23 2019
                                                                pada 6:44 pm</time>
                                                        </a>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate
                                                            velit esse molestie consequat, vel illum dolore eu feugiat
                                                            nulla facilisis at vero eros et accumsan et iusto odio
                                                            dignissim qui blandit praesent luptatum zzril delenit augue
                                                            duis dolore te feugait nulla facilisi.</p>
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
                                                                    <time datetime="2019-09-04T18:44:25+00:00">December
                                                                        23 2019 pada 6:44 pm</time>
                                                                </a>
                                                            </div>
                                                            <div class="comment-content">
                                                                <p>Duis autem vel eum iriure dolor in hendrerit in
                                                                    vulputate velit esse molestie consequat, vel illum
                                                                    dolore eu feugiat nulla facilisis at vero eros et
                                                                    accumsan et iusto odio dignissim qui blandit
                                                                    praesent luptatum zzril delenit augue duis dolore te
                                                                    feugait nulla facilisi.</p>
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
                                                            <time datetime="2019-09-04T18:44:25+00:00">December 23 2019
                                                                pada 6:44 pm</time>
                                                        </a>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate
                                                            velit esse molestie consequat, vel illum dolore eu feugiat
                                                            nulla facilisis at vero eros et accumsan et iusto odio
                                                            dignissim qui blandit praesent luptatum zzril delenit augue
                                                            duis dolore te feugait nulla facilisi.</p>
                                                    </div><!-- end comment-content -->
                                                </div><!-- end comment-wrapper -->

                                            </div><!-- end comment-body -->
                                        </li><!-- end li -->

                                    </ol><!-- end .comment-list -->
                                </div><!-- end #comments-area -->

                                <div id="respond" class="comment-respond">
                                    <h2 id="reply-title" class="comment-reply-title">Leave a Reply</h2>
                                    <form class="comment-form">
                                        <p class="comment-notes">Your email address will not be published. All fields
                                            are required.</p>
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
                        </div><!-- end content -->
                    </div><!-- end primary -->

                    <div id="secondary" class="col-md-4">

                        <div id="search-2" class="widget widget_search">
                            <div class="widget-title-outer">
                                <h3 class="widget-title">Search</h3>
                            </div>
                            <div class="searchform">
                                <form>
                                    <input type="text" class="txt" name="s" placeholder="Type Keywords">
                                    <input type="submit" value="search" class="btn btn-sm">
                                </form>
                            </div><!-- end searchform -->
                        </div><!-- end search widget -->

                        <div class="widget post-type-widget">
                            <div class="widget-title-outer">
                                <h3 class="widget-title">Recent Posts</h3>
                            </div>
                            <ul>
                                <li>
                                    <span class="post-category">
                                        <a href="#">Uncategorized</a>
                                    </span>
                                    <figure class="post-thumbnail">
                                        <a href="#"><img src="images/content/thumb-post-01.png" alt=""></a>
                                    </figure>
                                    <h2 class="post-title">
                                        <a href="#">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a>
                                    </h2>
                                </li>
                                <li>
                                    <span class="post-category">
                                        <a href="#">Cooking Tips</a>
                                    </span>
                                    <figure class="post-thumbnail">
                                        <a href="#"><img src="images/content/thumb-post-02.png" alt=""></a>
                                    </figure>
                                    <h2 class="post-title">
                                        <a href="#">Euismod Tincidunt ut Laoreet Dolore Magna Aliquam</a>
                                    </h2>
                                </li>
                                <li>
                                    <span class="post-category">
                                        <a href="#">Kitchen</a>
                                    </span>
                                    <figure class="post-thumbnail">
                                        <a href="#"><img src="images/content/thumb-post-03.png" alt=""></a>
                                    </figure>
                                    <h2 class="post-title">
                                        <a href="#">Ullamcorper Suscipit Lobortis Nisl ut Aliquip Commodo Consequat</a>
                                    </h2>
                                </li>
                                <li>
                                    <span class="post-category">
                                        <a href="#">Vegetable</a>
                                    </span>
                                    <figure class="post-thumbnail">
                                        <a href="#"><img src="images/content/thumb-post-04.png" alt=""></a>
                                    </figure>
                                    <h2 class="post-title">
                                        <a href="#">Quod Mazim Placerat Facer Possim Assum</a>
                                    </h2>
                                </li>
                            </ul>
                        </div><!-- end widget -->

                        <div class="widget widget_categories">
                            <div class="widget-title-outer">
                                <h3 class="widget-title">Post Categories</h3>
                            </div>
                            <ul>
                                <li>
                                    <a class="float-left" href="#">Cooking Tips</a>
                                    <span class="float-right">17</span>
                                </li>
                                <li>
                                    <a class="float-left" href="#">Kitchen</a>
                                    <span class="float-right">14</span>
                                </li>
                                <li>
                                    <a class="float-left" href="#">Chef's Secret</a><span class="float-right">10</span>
                                </li>
                                <li><a class="float-left" href="#">Vegetable</a><span class="float-right">8</span></li>
                                <li><a class="float-left" href="#">Nutrition</a><span class="float-right">6</span></li>
                                <li><a class="float-left" href="#">Ingredients</a><span class="float-right">4</span>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                        <div class="widget">
                            <div class="widget-title-outer">
                                <h3 class="widget-title">News Tags</h3>
                            </div>
                            <div class="tagcloud"><a href="#">food</a><a href="#">ingredients</a><a href="#">chef</a><a
                                    href="#">kitchen</a><a href="#">vegetable</a><a href="#">cake</a><a
                                    href="#">beverage</a><a href="#">tips</a><a href="#">nutrition</a><a
                                    href="#">tools</a></div>
                        </div><!-- end widget -->
                        <div class="widget"><a href="#"><img src="images/content/banner.png" alt="Banner"></a></div>
                        <div class="widget">
                            <div class="widget-title-outer">
                                <h3 class="widget-title">Our Facebook Page</h3>
                            </div><iframe
                                src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true"></iframe>
                        </div><!-- end widget -->
                    </div><!-- end #secondary -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end main -->
        <div class="footer-instagram">
            <div class="ig-btn"><a href="#" class="ig-follow"><i class="fab fa-instagram"></i>&nbsp;Follow Me on
                    Instagram</a></div><!-- end ig-btn -->
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
            <div class="container"><a href="#"><i class="fab fa-facebook-square"></i>Facebook</a><a href="#"><i
                        class="fab fa-twitter"></i>Twitter</a><a href="#"><i
                        class="fab fa-pinterest"></i>Pinterest</a><a href="#"><i
                        class="fab fa-instagram"></i>Instagram</a><a href="#"><i
                        class="fab fa-linkedin"></i>Linkedin</a><a href="#"><i class="fab fa-youtube"></i>Youtube</a>
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
                                    Claritas est etiam processus dynamicus,qui sequitur mutationem consuetudium
                                    lectorum. Mirum est notare quam littera gothica,quam nunc putamus parum
                                    claram,anteposuerit litterarum formas humanitatis per seacula quarta decima et
                                    quinta decima.</p>
                            </div><!-- end widget-inner -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <div class="widget widget-subscribe">
                            <div class="widget-inner">
                                <h3 class="widget-title">Stay Updated</h3><span>Register your email address to get
                                    promos,product updates and other info.</span>
                                <div class="subscribe-form"><input type="email" name="EMAIL"
                                        placeholder="Your email address" required=""><input type="submit"
                                        value="Subscribe"></div><!-- end subscribe-form -->
                            </div><!-- end widget-inner -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="copy">
                            <p>&copy;2021 Food Web Template. Made with <i class="fas fa-heart"></i>by Alpha@SR</p>
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
    <!-- jQuery(necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="js/vendor/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins(below),or include individual files as needed -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
