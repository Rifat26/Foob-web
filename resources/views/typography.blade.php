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
                <h2 class="page-title">Typography</h2>
            </div><!-- end container -->
        </div><!-- end head-title -->

        <div id="main">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 bd-content">
                        <p class="bd-lead">Documentation and examples for Bootstrap typography, including global
                            settings, headings, body text, lists, and more.</p>
                        <h3>Global Setting</h3>
                        <p>Bootstrap sets basic global display, typography, and link styles. When more control is
                            needed, check out the <a href="https://getbootstrap.com/docs/4.0/utilities/text/">textual
                                utility classes</a>.</p>
                        <ul>
                            <li>Use a <a
                                    href="https://getbootstrap.com/docs/4.0/content/reboot/#native-font-stack">native
                                    font stack</a> that selects the best <code
                                    class="highlighter-rouge">font-family</code> for each OS and device.</li>
                            <li>For a more inclusive and accessible type scale, we assume the browser default root <code
                                    class="highlighter-rouge">font-size</code> (typically 16px) so visitors can
                                customize their browser defaults as needed.</li>
                            <li>Use the <code class="highlighter-rouge">$font-family-base</code>, <code
                                    class="highlighter-rouge">$font-size-base</code>, and <code
                                    class="highlighter-rouge">$line-height-base</code> attributes as our typographic
                                base applied to the <code class="highlighter-rouge">&lt;body&gt;</code>.</li>
                            <li>Set the global link color via <code class="highlighter-rouge">$link-color</code> and
                                apply link underlines only on <code class="highlighter-rouge">:hover</code>.</li>
                            <li>Use <code class="highlighter-rouge">$body-bg</code> to set a <code
                                    class="highlighter-rouge">background-color</code> on the <code
                                    class="highlighter-rouge">&lt;body&gt;</code> (<code
                                    class="highlighter-rouge">#fff</code> by default).</li>
                        </ul>
                        <p>These styles can be found within <code class="highlighter-rouge">_reboot.scss</code>, and the
                            global variables are defined in <code class="highlighter-rouge">_variables.scss</code>. Make
                            sure to set <code class="highlighter-rouge">$font-size-base</code> in <code
                                class="highlighter-rouge">rem</code>.</p>
                        <h3>Heading</h3>
                        <p>All HTML headings, <code class="highlighter-rouge">&lt;h1&gt;</code> through <code
                                class="highlighter-rouge">&lt;h6&gt;</code>, are available.</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Heading</th>
                                    <th>Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p><code class="highlighter-rouge">&lt;h1&gt;&lt;/h1&gt;</code></p>

                                    </td>
                                    <td><span class="h1">h1. Bootstrap heading</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><code class="highlighter-rouge">&lt;h2&gt;&lt;/h2&gt;</code></p>

                                    </td>
                                    <td><span class="h2">h2. Bootstrap heading</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><code class="highlighter-rouge">&lt;h3&gt;&lt;/h3&gt;</code></p>

                                    </td>
                                    <td><span class="h3">h3. Bootstrap heading</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><code class="highlighter-rouge">&lt;h4&gt;&lt;/h4&gt;</code></p>

                                    </td>
                                    <td><span class="h4">h4. Bootstrap heading</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><code class="highlighter-rouge">&lt;h5&gt;&lt;/h5&gt;</code></p>

                                    </td>
                                    <td><span class="h5">h5. Bootstrap heading</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><code class="highlighter-rouge">&lt;h6&gt;&lt;/h6&gt;</code></p>

                                    </td>
                                    <td><span class="h6">h6. Bootstrap heading</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <figure class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/h1&gt;</span><br/><span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/h2&gt;</span><br/><span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/h3&gt;</span><br/><span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/h4&gt;</span><br/><span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/h5&gt;</span><br/><span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/h6&gt;</span></code></pre>
                        </figure>
                        <p><code class="highlighter-rouge">.h1</code> through <code class="highlighter-rouge">.h6</code>
                            classes are also available, for when you want to match the font styling of a heading but
                            cannot use the associated HTML element.</p>
                        <div class="bd-example">
                            <p class="h1">h1. Bootstrap heading</p>
                            <p class="h2">h2. Bootstrap heading</p>
                            <p class="h3">h3. Bootstrap heading</p>
                            <p class="h4">h4. Bootstrap heading</p>
                            <p class="h5">h5. Bootstrap heading</p>
                            <p class="h6">h6. Bootstrap heading</p>
                        </div>

                        <div class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h1"</span><span class="nt">&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/p&gt;</span><br/><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h2"</span><span class="nt">&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/p&gt;</span><br/><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h3"</span><span class="nt">&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/p&gt;</span><br/><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h4"</span><span class="nt">&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/p&gt;</span><br/><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h5"</span><span class="nt">&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/p&gt;</span><br/><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h6"</span><span class="nt">&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/p&gt;</span></code></pre>
                        </div>

                        <h3>Customizing headings</h3>
                        <p>Use the included utility classes to recreate the small secondary heading text from Bootstrap
                            3.</p>
                        <div class="bd-example">
                            <span class="h3">
                                Fancy display heading
                                <small class="text-muted">With faded secondary text</small>
                            </span>
                        </div>

                        <figure class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;h3&gt;</span>Fancy display heading<span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>With faded secondary text<span class="nt">&lt;/small&gt;</span><span class="nt">&lt;/h3&gt;</span></code></pre>
                        </figure>

                        <h3>Display Heading</h3>
                        <p>Traditional heading elements are designed to work best in the meat of your page content. When
                            you need a heading to stand out, consider using a <strong>display heading</strong>—a larger,
                            slightly more opinionated heading style.</p>

                        <div class="bd-example bd-example-type">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><span class="display-1">Display 1</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="display-2">Display 2</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="display-3">Display 3</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="display-4">Display 4</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <figure class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-1"</span><span class="nt">&gt;</span>Display 1<span class="nt">&lt;/h1&gt;</span><br/><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-2"</span><span class="nt">&gt;</span>Display 2<span class="nt">&lt;/h1&gt;</span><br/><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-3"</span><span class="nt">&gt;</span>Display 3<span class="nt">&lt;/h1&gt;</span><br/><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-4"</span><span class="nt">&gt;</span>Display 4<span class="nt">&lt;/h1&gt;</span></code></pre>
                        </figure>

                        <h3>Lead</h3>
                        <p>Make a paragraph stand out by adding <code class="highlighter-rouge">.lead</code>.</p>
                        <div class="bd-example">
                            <p class="lead">
                                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est
                                non commodo luctus.
                            </p>
                        </div>
                        <div class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>
    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
<span class="nt">&lt;/p&gt;</span></code></pre>
                        </div>

                        <h3>Inline text elements</h3>
                        <p>Styling for common inline HTML5 elements.</p>
                        <div class="bd-example">
                            <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                            <p><del>This line of text is meant to be treated as deleted text.</del></p>
                            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                            <p><u>This line of text will render as underlined</u></p>
                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                            <p><strong>This line rendered as bold text.</strong></p>
                            <p><em>This line rendered as italicized text.</em></p>
                        </div>
                        <div class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;</span>You can use the mark tag to <span class="nt">&lt;mark&gt;</span>highlight<span class="nt">&lt;/mark&gt;</span> text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;del&gt;</span>This line of text is meant to be treated as deleted text.<span class="nt">&lt;/del&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;s&gt;</span>This line of text is meant to be treated as no longer accurate.<span class="nt">&lt;/s&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;ins&gt;</span>This line of text is meant to be treated as an addition to the document.<span class="nt">&lt;/ins&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;u&gt;</span>This line of text will render as underlined<span class="nt">&lt;/u&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;strong&gt;</span>This line rendered as bold text.<span class="nt">&lt;/strong&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;em&gt;</span>This line rendered as italicized text.<span class="nt">&lt;/em&gt;&lt;/p&gt;</span></code></pre>
                        </div>

                        <p><code class="highlighter-rouge">.mark</code> and <code
                                class="highlighter-rouge">.small</code> classes are also available to apply the same
                            styles as <code class="highlighter-rouge">&lt;mark&gt;</code> and <code
                                class="highlighter-rouge">&lt;small&gt;</code> while avoiding any unwanted semantic
                            implications that the tags would bring.</p>
                        <p>While not shown above, feel free to use <code class="highlighter-rouge">&lt;b&gt;</code> and
                            <code class="highlighter-rouge">&lt;i&gt;</code> in HTML5. <code
                                class="highlighter-rouge">&lt;b&gt;</code> is meant to highlight words or phrases
                            without conveying additional importance while <code
                                class="highlighter-rouge">&lt;i&gt;</code> is mostly for voice, technical terms, etc.
                        </p>

                        <h3>Blockquotes</h3>
                        <p>For quoting blocks of content from another source within your document. Wrap <code
                                class="highlighter-rouge">&lt;blockquote&gt;</code> around any <abbr
                                title="HyperText Markup Language">HTML</abbr> as the quote.</p>
                        <div class="bd-example">
                            <blockquote>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                            </blockquote>
                        </div>
                        <div class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre>
                        </div>

                        <h3>List</h3>
                        <h4>Unstyle</h4>
                        <p>Remove the default <code class="highlighter-rouge">list-style</code> and left margin on list
                            items (immediate children only). <strong>This only applies to immediate children list
                                items</strong>, meaning you will need to add the class for any nested lists as well.</p>
                        <div class="bd-example">
                            <ul class="list-unstyled">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
                        </div>

                        <div class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-unstyled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>Lorem ipsum dolor sit amet<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Consectetur adipiscing elit<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Integer molestie lorem at massa<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Facilisis in pretium nisl aliquet<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Nulla volutpat aliquam velit
    <span class="nt">&lt;ul&gt;</span>
      <span class="nt">&lt;li&gt;</span>Phasellus iaculis neque<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;</span>Purus sodales ultricies<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;</span>Vestibulum laoreet porttitor sem<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;</span>Ac tristique libero volutpat at<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Faucibus porta lacus fringilla vel<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Aenean sit amet erat nunc<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Eget porttitor lorem<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>
                        </div>

                        <h3>Inline</h3>
                        <p>Remove a list’s bullets and apply some light <code class="highlighter-rouge">margin</code>
                            with a combination of two classes, <code class="highlighter-rouge">.list-inline</code> and
                            <code class="highlighter-rouge">.list-inline-item</code>.</p>
                        <div class="bd-example">
                            <ul class="list-inline">
                                <li class="list-inline-item">Lorem ipsum</li>
                                <li class="list-inline-item">Phasellus iaculis</li>
                                <li class="list-inline-item">Nulla volutpat</li>
                            </ul>
                        </div>
                        <div class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-inline-item"</span><span class="nt">&gt;</span>Lorem ipsum<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-inline-item"</span><span class="nt">&gt;</span>Phasellus iaculis<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-inline-item"</span><span class="nt">&gt;</span>Nulla volutpat<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->
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
                            <p>&copy; 2021 Taplak Web Template. Made with <i class="fas fa-heart"></i> by Alpha@SR</p>
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
