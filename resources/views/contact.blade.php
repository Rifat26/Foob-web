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
                <h2 class="page-title">Contact Us</h2>
            </div><!-- end container -->
        </div><!-- end head-title -->

        <div id="main">
            <div class="container">

                <div id="primary" class="content-area">
                    <div id="content" class="site-content">

                        <div class="row no-gutters">

                            <div class="col-md-4">
                                <div class="gmap entry-media">
                                    <iframe
                                        src="http://www.google.cn/maps/embed?pb=!1m14!1m8!1m3!1d3952.6397770888398!2d110.4042447!3d-7.8278965!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57225c384a85%3A0x9ed0238d9f9046a1!2sJl.+Karanglo%2C+Daerah+Istimewa+Yogyakarta!5e0!3m2!1sid!2sid!4v1427272825372"
                                        width="620" height="510"></iframe>
                                </div><!-- end entry-media -->
                            </div><!-- end col -->

                            <div class="col-md-8">
                                <div class="contact-form">
                                    <h3>SIMPLY LEAVE A MESSAGE HERE</h3>
                                    <p>Please fill out our form below and we'll contact you as soon as possible.</p>
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6"><label
                                                    for="inputAddress">Address</label><input type="text"
                                                    class="form-control" id="inputAddress"
                                                    placeholder="Juntona Street 56"></div>
                                            <div class="form-group col-md-6"><label for="inputEmail">Email</label><input
                                                    type="email" class="form-control" id="inputEmail"
                                                    placeholder="Email"></div>
                                        </div>
                                        <div class="form-row"><label for="messageTextarea">Message</label><textarea
                                                class="form-control" id="messageTextarea" rows="6"></textarea></div>
                                        <!-- end form-row -->
                                        <div class="form-button"><button type="submit" class="btn btn-primary">Send
                                                Message</button></div>
                                    </form>
                                </div><!-- end contact-form -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row-space"></div>
                        <div class="row justify-content-between">
                            <div class="col-md-3">
                                <p><strong>TAPLAK OFFICE</strong></p>
                                <p>Jalan Kaliurang Km. 7,Banteng Kopen III RT 01 RW 22 No. 36 Sinduharjo Ngaglik,Sleman
                                </p>
                                <p><strong>TAPLAK HOURS</strong></p>
                                <p>Mon-Fri:9:00 am - 6:00 pm<br>Sat:9:00 am - 7.00 pm<br>Sun:10:30 am - 7.00
                                    pm<br>PH:Closed</p>
                            </div><!-- end col -->
                            <div class="col-md-8">
                                <h2>We make contact form and provide a map of the location where we are,so do not worry
                                </h2>
                                <p>Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                    consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                    molestie consequat,vel illum dolore eu feugiat nulla facilisis at vero eros et
                                    accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue
                                    duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend
                                    option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                <p>Donec imperdiet vitae sapien eu volutpat. Mauris pretium dignissim rhoncus. Donec
                                    iaculis justo vitae nibh commodo vehicula. Phasellus eleifend ipsum non est
                                    rutrum,vitae malesuada odio porttitor. Etiam rhoncus risus cursus sem laoreet,ut
                                    porttitor tortor ornare. Praesent sapien quam,porta non odio et,rutrum pretium mi.
                                    Nam vulputate vehicula ultrices.</p>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end content -->
                </div><!-- end primary -->
            </div><!-- end container -->
        </div><!-- end main -->
        
        @include('master.foot')