    

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
        <br><br><br>
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

                            @foreach ($blog as $item)

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

                                    </div><!-- end entry-meta -->
                                </div><!-- end entry-format -->

                                <div class="inner">

                                    <div class="entry-header">
                                        <span class="author vcard">
                                            Posted by <a href="#">Johnny Kurniawan</a>
                                        </span><!-- end author -->
                                        <span class="cat-links">
                                            <a href="#">recipe</a>,
                                            <a href="#">random</a>,
                                            <a href="#">traditional</a>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fas fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
                                    </div><!-- end entry-header -->

                                    <h1 class="entry-title">
                                        <a href="#">{{$item->blog_title}}</a>
                                    </h1>

                                    <div class="entry-media">
                                        <img src={{$item->blog_img}} alt="">
                                    </div><!-- end entry-media -->

                                    <div class="entry-content">
                                        <p>{{$item->blog_discription}}</p>
                                    </div>

                                </div><!-- end inner -->

                             </div><!-- end format-image hentry -->
                             @endforeach 

                            {{--<div class="post format-video hentry">

                                <div class="entry-format">
                                    <div class="entry-meta">
                                        <div class="entry-date">
                                            <a href="#">
                                                <time class="published" datetime="2019-12-22"
                                                    title="December 22, 2019 - 21:12 pm">Dec<span
                                                        class="date">22</span>2019</time>
                                            </a>
                                        </div><!-- end entry-date -->

                                    </div><!-- end entry-meta -->
                                </div><!-- end entry-format -->

                                <div class="inner">

                                    <div class="entry-header">
                                        <span class="author vcard">
                                            Posted by <a href="#">Anwar Sudi</a>
                                        </span><!-- end author -->
                                        <span class="cat-links">
                                            <a href="#">recipe</a>,
                                            <a href="#">random</a>,
                                            <a href="#">traditional</a>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fas fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
                                    </div><!-- end entry-header -->

                                    <h1 class="entry-title">
                                        <a href="#">Post Format Video Content Sample</a>
                                    </h1>

                                    <div class="entry-media">
                                        <iframe
                                            src="//www.youtube.com/embed/XSGBVzeBUbk?controls=0&amp;showinfo=0"></iframe>
                                    </div><!-- end entry-media -->

                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                            dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                                            dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
                                            dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                                            feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option
                                            congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                                            Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum
                                            claritatem.</p>
                                    </div>

                                </div><!-- end inner -->

                            </div><!-- end format-video hentry -->

                            <div class="post format-link hentry">

                                <div class="entry-format">
                                    <div class="entry-meta">
                                        <div class="entry-date">
                                            <a href="#">
                                                <time class="published" datetime="2019-12-22"
                                                    title="December 22, 2019 - 21:12 pm">Dec<span
                                                        class="date">22</span>2019</time>
                                            </a>
                                        </div><!-- end entry-date -->

                                    </div><!-- end entry-meta -->
                                </div><!-- end entry-format -->

                                <div class="inner">

                                    <div class="entry-header">
                                        <span class="author vcard">
                                            Posted by <a href="#">Anwar Sudi</a>
                                        </span><!-- end author -->
                                        <span class="cat-links">
                                            <a href="#">recipe</a>,
                                            <a href="#">random</a>,
                                            <a href="#">traditional</a>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fas fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
                                    </div><!-- end entry-header -->

                                    <h1 class="entry-title">
                                        <a href="#">Typi Non Habent Claritatem Insitam Est Usus Legentis in Qui Facit
                                            Eorum Claritatem <span class="meta"><i
                                                    class="fa fa-fw fa-external-link-square"></i></span></a>
                                    </h1>

                                    <div class="entry-content">
                                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                            doming id quod mazim placerat facer possim assum. Typi non habent claritatem
                                            insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    </div><!-- end entry-content -->

                                </div><!-- end inner -->

                            </div><!-- end format-link hentry -->

                            <div class="post format-audio hentry">

                                <div class="entry-format">
                                    <div class="entry-meta">
                                        <div class="entry-date">
                                            <a href="#">
                                                <time class="published" datetime="2019-12-22"
                                                    title="December 22, 2019 - 21:12 pm">Dec<span
                                                        class="date">22</span>2019</time>
                                            </a>
                                        </div><!-- end entry-date -->

                                    </div><!-- end entry-meta -->
                                </div><!-- end entry-format -->

                                <div class="inner">

                                    <div class="entry-header">
                                        <span class="author vcard">
                                            Posted by <a href="#">Anwar Sudi</a>
                                        </span><!-- end author -->
                                        <span class="cat-links">
                                            <a href="#">recipe</a>,
                                            <a href="#">random</a>,
                                            <a href="#">traditional</a>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fas fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
                                    </div><!-- end entry-header -->

                                    <h1 class="entry-title">
                                        <a href="#">Post Format Audio Content Sample</a>
                                    </h1>

                                    <div class="entry-media">
                                        <iframe
                                            src="https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F155644678&amp;show_artwork=true&amp;"></iframe>
                                    </div><!-- end entry-media -->

                                </div><!-- end inner -->

                            </div><!-- end format-audio hentry -->

                            <div class="post format-quote hentry">

                                <div class="entry-format">
                                    <div class="entry-meta">
                                        <div class="entry-date">
                                            <a href="#">
                                                <time class="published" datetime="2019-12-22"
                                                    title="December 22, 2019 - 21:12 pm">Dec<span
                                                        class="date">22</span>2019</time>
                                            </a>
                                        </div><!-- end entry-date -->

                                    </div><!-- end entry-meta -->
                                </div><!-- end entry-format -->

                                <div class="inner">

                                    <div class="entry-header">
                                        <span class="author vcard">
                                            Posted by <a href="#">Anwar Sudi</a>
                                        </span><!-- end author -->
                                        <span class="cat-links">
                                            <a href="#">recipe</a>,
                                            <a href="#">random</a>,
                                            <a href="#">traditional</a>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fas fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
                                    </div><!-- end entry-header -->

                                    <div class="entry-content">
                                        <blockquote>
                                            <p>Wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                                            <cite>SUFYAN ISKANDAR</cite>
                                        </blockquote>
                                    </div>

                                </div><!-- end inner -->

                            </div><!-- end format-audio hentry -->

                            <div class="post format-gallery hentry">

                                <div class="entry-format">
                                    <div class="entry-meta">
                                        <div class="entry-date">
                                            <a href="#">
                                                <time class="published" datetime="2019-12-22"
                                                    title="December 22, 2019 - 21:12 pm">Dec<span
                                                        class="date">22</span>2019</time>
                                            </a>
                                        </div><!-- end entry-date -->

                                    </div><!-- end entry-meta -->
                                </div><!-- end entry-format -->

                                <div class="inner">

                                    <div class="entry-header">
                                        <span class="author vcard">
                                            Posted by <a href="#">Anwar Sudi</a>
                                        </span><!-- end author -->
                                        <span class="cat-links">
                                            <a href="#">recipe</a>,
                                            <a href="#">random</a>,
                                            <a href="#">traditional</a>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fas fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
                                    </div><!-- end entry-header -->

                                    <h1 class="entry-title">
                                        <a href="#">Post Format Gallery Content Sample</a>
                                    </h1>

                                    <div class="entry-media">
                                        <div id="media-gallery" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#media-gallery" data-slide-to="0" class="active"></li>
                                                <li data-target="#media-gallery" data-slide-to="1"></li>
                                                <li data-target="#media-gallery" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="images/content/media-02.png" alt="">
                                                </div><!-- end item -->
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="images/content/media-03.png" alt="">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="images/content/media-04.png" alt="">
                                                </div>
                                            </div><!-- end carousel-inner -->

                                            <!-- Controls -->
                                            <a class="carousel-control-prev" href="#media-gallery" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#media-gallery" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>

                                        </div><!-- end carousel -->
                                    </div>

                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                            dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                                            dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
                                            dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                                            feugait nulla facilisi.</p>
                                    </div>

                                </div><!-- end inner -->

                            </div><!-- end format-gallery hentry -->

                            <div class="post format-chat hentry">

                                <div class="entry-format">
                                    <div class="entry-meta">
                                        <div class="entry-date">
                                            <a href="#">
                                                <time class="published" datetime="2019-12-22"
                                                    title="December 22, 2019 - 21:12 pm">Dec<span
                                                        class="date">22</span>2019</time>
                                            </a>
                                        </div><!-- end entry-date -->

                                    </div><!-- end entry-meta -->
                                </div><!-- end entry-format -->

                                <div class="inner">

                                    <div class="entry-header">
                                        <span class="author vcard">
                                            Posted by <a href="#">Anwar Sudi</a>
                                        </span><!-- end author -->
                                        <span class="cat-links">
                                            <a href="#">recipe</a>,
                                            <a href="#">random</a>,
                                            <a href="#">traditional</a>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fas fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
                                    </div><!-- end entry-header -->

                                    <h1 class="entry-title">
                                        <a href="#">Post Format Chat Content Sample</a>
                                    </h1>

                                    <div class="entry-content">
                                        <ul class="chat">
                                            <li>
                                                <span class="name">Nania : </span>
                                                <p>Hey, How are you?</p>
                                            </li>
                                            <li>
                                                <span class="name">Julia : </span>
                                                <p>I'm just fine and you?</p>
                                            </li>
                                            <li><span class="name">Nania:</span>
                                                <p>I'm fine too. So, where do yo want to go now?</p>
                                            </li>
                                            <li>
                                                <span class="name">Julia : </span>
                                                <p>I want to go to the traditional market, buying some vegetables..</p>
                                            </li>
                                            <li>
                                                <span class="name">Nania : </span>
                                                <p>Owh Ok. See you tomorrow.</p>
                                            </li>
                                        </ul>
                                    </div>

                                </div><!-- end inner -->

                            </div><!-- end format-chat hentry -->

                            <div class="post format-status hentry">

                                <div class="entry-format">
                                    <div class="entry-meta">
                                        <div class="entry-date">
                                            <a href="#">
                                                <time class="published" datetime="2019-12-22"
                                                    title="December 22, 2019 - 21:12 pm">Dec<span
                                                        class="date">22</span>2019</time>
                                            </a>
                                        </div><!-- end entry-date -->

                                    </div><!-- end entry-meta -->
                                </div><!-- end entry-format -->

                                <div class="inner">

                                    <div class="entry-header">
                                        <span class="author vcard">
                                            Posted by <a href="#">Anwar Sudi</a>
                                        </span><!-- end author -->
                                        <span class="cat-links">
                                            <a href="#">recipe</a>,
                                            <a href="#">random</a>,
                                            <a href="#">traditional</a>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fas fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
                                    </div><!-- end entry-header -->

                                    <h1 class="entry-title">
                                        <a href="#">Post Format Status Content Sample</a>
                                    </h1>

                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                            dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                                            dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
                                            dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                                            feugait nulla facilisi.</p>
                                    </div>

                                </div><!-- end inner -->

                            </div><!-- end format-status hentry -->

                            <div class="post format-aside hentry">

                                <div class="entry-format">
                                    <div class="entry-meta">
                                        <div class="entry-date">
                                            <a href="#">
                                                <time class="published" datetime="2019-12-22"
                                                    title="December 22, 2019 - 21:12 pm">Dec<span
                                                        class="date">22</span>2019</time>
                                            </a>
                                        </div><!-- end entry-date -->

                                    </div><!-- end entry-meta -->
                                </div><!-- end entry-format -->

                                <div class="inner">

                                    <div class="entry-header">
                                        <span class="author vcard">
                                            Posted by <a href="#">Anwar Sudi</a>
                                        </span><!-- end author -->
                                        <span class="cat-links">
                                            <a href="#">recipe</a>,
                                            <a href="#">random</a>,
                                            <a href="#">traditional</a>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fas fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
                                    </div><!-- end entry-header -->

                                    <h1 class="entry-title">
                                        <a href="#">Post Format Aside Content Sample</a>
                                    </h1>

                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                            dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                                            dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
                                            dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                                            feugait nulla facilisi.</p>
                                    </div>

                                </div><!-- end inner -->

                            </div><!-- end format-aside hentry -->--}}
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
        
        