@include('master.head')

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
                <h2 class="page-title">My Account</h2>
            </div><!-- end container -->
        </div><!-- end head-title -->

        <div id="main">
            <div class="container">
                <div class="row">

                    <div id="primary" class="content-area col-md-8">
                        <div id="content" class="site-content">

                            <div class="profile-details">
                                <figure class="profile-ava">
                                    <img src="images/content/auth-03.png" alt="Author">
                                </figure>
                                <div class="profile-context">
                                    <div class="profile-name">
                                        <h3>Dina Makulatuwa</h3>
                                    </div>
                                    <div class="profile-content">
                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt
                                            saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem
                                            consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc
                                            putamus parum claram, anteposuerit litterarum formas humanitatis.</p>
                                    </div>
                                    <div class="profile-socmed">
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fas fa-envelope"></i></a>
                                    </div>
                                </div><!-- end profile-context -->
                            </div><!-- end profile-details -->

                            <div class="my-content">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="article-tab" data-toggle="tab" href="#article"
                                            role="tab" aria-controls="article" aria-selected="true">My Articles
                                            <strong>(5)</strong></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="recipe-tab" data-toggle="tab" href="#recipe" role="tab"
                                            aria-controls="recipe" aria-selected="false">My Recipe
                                            <strong>(6)</strong></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="bookmark-tab" data-toggle="tab" href="#bookmark"
                                            role="tab" aria-controls="bookmark" aria-selected="false">Bookmarked
                                            <strong>(3)</strong></a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="article" role="tabpanel"
                                        aria-labelledby="article-tab">
                                        <div class="article-list">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p class="cat-list">Cooking Tips</p>
                                                    <div class="entry-date">
                                                        <a href="#">
                                                            <time class="published" datetime="2019-12-22"
                                                                title="December 22, 2019 - 21:12 pm">Dec<span
                                                                    class="date">22</span>2019</time>
                                                        </a>
                                                    </div><!-- end entry-date -->
                                                </div>
                                                <div class="col-md-5">
                                                    <figure>
                                                        <img src="images/content/list-01.png" alt="">
                                                    </figure>
                                                </div>
                                                <div class="col-md-5">
                                                    <h3>
                                                        <a href="#">Eodem Modo Typi, Qui Nunc Nobis Videntur Parum
                                                            Clari</a>
                                                    </h3>
                                                    <a href="#" class="readmore"><em>Continue Reading</em></a>
                                                </div>
                                            </div>
                                        </div><!-- end article-list -->

                                        <div class="article-list">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p class="cat-list">Cooking Tips</p>
                                                    <div class="entry-date">
                                                        <a href="#">
                                                            <time class="published" datetime="2019-12-22"
                                                                title="December 22, 2019 - 21:12 pm">Dec<span
                                                                    class="date">22</span>2019</time>
                                                        </a>
                                                    </div><!-- end entry-date -->
                                                </div>
                                                <div class="col-md-5">
                                                    <figure>
                                                        <img src="images/content/list-02.png" alt="">
                                                    </figure>
                                                </div>
                                                <div class="col-md-5">
                                                    <h3>
                                                        <a href="#">Nullam Volutpat at Lectus ut Mollis</a>
                                                    </h3>
                                                    <a href="#" class="readmore"><em>Continue Reading</em></a>
                                                </div>
                                            </div>
                                        </div><!-- end article-list -->

                                        <div class="article-list">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p class="cat-list">Cooking Tips</p>
                                                    <div class="entry-date">
                                                        <a href="#">
                                                            <time class="published" datetime="2019-12-22"
                                                                title="December 22, 2019 - 21:12 pm">Dec<span
                                                                    class="date">22</span>2019</time>
                                                        </a>
                                                    </div><!-- end entry-date -->
                                                </div>
                                                <div class="col-md-5">
                                                    <figure>
                                                        <img src="images/content/list-03.png" alt="">
                                                    </figure>
                                                </div>
                                                <div class="col-md-5">
                                                    <h3>
                                                        <a href="#">Suspendisse Tempor Feugiat Ultricies</a>
                                                    </h3>
                                                    <a href="#" class="readmore"><em>Continue Reading</em></a>
                                                </div>
                                            </div>
                                        </div><!-- end article-list -->

                                        <div class="article-list">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p class="cat-list">Cooking Tips</p>
                                                    <div class="entry-date">
                                                        <a href="#">
                                                            <time class="published" datetime="2019-12-22"
                                                                title="December 22, 2019 - 21:12 pm">Dec<span
                                                                    class="date">22</span>2019</time>
                                                        </a>
                                                    </div><!-- end entry-date -->
                                                </div>
                                                <div class="col-md-5">
                                                    <figure>
                                                        <img src="images/content/list-04.png" alt="">
                                                    </figure>
                                                </div>
                                                <div class="col-md-5">
                                                    <h3>
                                                        <a href="#">Rhoncus Gravida Augue Imperdiet</a>
                                                    </h3>
                                                    <a href="#" class="readmore"><em>Continue Reading</em></a>
                                                </div>
                                            </div>
                                        </div><!-- end article-list -->

                                        <div class="article-list">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p class="cat-list">Cooking Tips</p>
                                                    <div class="entry-date">
                                                        <a href="#">
                                                            <time class="published" datetime="2019-12-22"
                                                                title="December 22, 2019 - 21:12 pm">Dec<span
                                                                    class="date">22</span>2019</time>
                                                        </a>
                                                    </div><!-- end entry-date -->
                                                </div>
                                                <div class="col-md-5">
                                                    <figure>
                                                        <img src="images/content/list-05.png" alt="">
                                                    </figure>
                                                </div>
                                                <div class="col-md-5">
                                                    <h3>
                                                        <a href="#">Curabitur Lobortis Sapien Sit Amet</a>
                                                    </h3>
                                                    <a href="#" class="readmore"><em>Continue Reading</em></a>
                                                </div>
                                            </div>
                                        </div><!-- end article-list -->
                                    </div>
                                    <div class="tab-pane fade" id="recipe" role="tabpanel" aria-labelledby="recipe-tab">

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="recipe-thumb">
                                                    <img src="images/content/thumb-1.png" alt="Recipe Image">

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
                                            <div class="col-4">
                                                <div class="recipe-thumb">
                                                    <img src="images/content/thumb-2.png" alt="Recipe Image">

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
                                            <div class="col-4">
                                                <div class="recipe-thumb">
                                                    <img src="images/content/thumb-3.png" alt="Recipe Image">

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
                                        </div><!-- end row -->

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="recipe-thumb">
                                                    <img src="images/content/thumb-4.png" alt="Recipe Image">

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
                                            <div class="col-4">
                                                <div class="recipe-thumb">
                                                    <img src="images/content/thumb-5.png" alt="Recipe Image">

                                                    <a href="#" class="view-recipe">VIEW RECIPE</a>
                                                </div>
                                                <div class="recipe-desc">
                                                    <h2 class="recipe-title">
                                                        <a href="#">Roast Aubergine</a>
                                                    </h2>
                                                    <p><em>By Lina Sukowati</em></p>
                                                    <span><i class="fas fa-clock"></i>&nbsp;1 Hour</span>
                                                </div><!-- end recipe-desc -->
                                            </div><!-- end col -->
                                            <div class="col-4">
                                                <div class="recipe-thumb">
                                                    <img src="images/content/thumb-6.png" alt="Recipe Image">

                                                    <a href="#" class="view-recipe">VIEW RECIPE</a>
                                                </div>
                                                <div class="recipe-desc">
                                                    <h2 class="recipe-title">
                                                        <a href="#">Indian Mixed Rice</a>
                                                    </h2>
                                                    <p><em>By Eka Nurwasilah</em></p>
                                                    <span><i class="fas fa-clock"></i>&nbsp;26 Minutes</span>
                                                </div><!-- end recipe-desc -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end tab -->
                                    <div class="tab-pane fade" id="bookmark" role="tabpanel"
                                        aria-labelledby="bookmark-tab">
                                        <div class="row">
                                            <div class="col-4">
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
                                            <div class="col-4">
                                                <div class="recipe-thumb">
                                                    <img src="images/content/thumb-5.png" alt="Recipe Image">
                                                    <a href="#" class="bookmarker"><i class="fas fa-bookmark"></i></a>
                                                    <a href="#" class="view-recipe">VIEW RECIPE</a>
                                                </div>
                                                <div class="recipe-desc">
                                                    <h2 class="recipe-title">
                                                        <a href="#">Roast Aubergine</a>
                                                    </h2>
                                                    <p><em>By Lina Sukowati</em></p>
                                                    <span><i class="fas fa-clock"></i>&nbsp;1 Hour</span>
                                                </div><!-- end recipe-desc -->
                                            </div><!-- end col -->
                                            <div class="col-4">
                                                <div class="recipe-thumb">
                                                    <img src="images/content/thumb-6.png" alt="Recipe Image">
                                                    <a href="#" class="bookmarker"><i class="fas fa-bookmark"></i></a>
                                                    <a href="#" class="view-recipe">VIEW RECIPE</a>
                                                </div>
                                                <div class="recipe-desc">
                                                    <h2 class="recipe-title">
                                                        <a href="#">Indian Mixed Rice</a>
                                                    </h2>
                                                    <p><em>By Eka Nurwasilah</em></p>
                                                    <span><i class="fas fa-clock"></i>&nbsp;26 Minutes</span>
                                                </div><!-- end recipe-desc -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div>
                            </div><!-- end my-content -->

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
        
        @include('master.foot')