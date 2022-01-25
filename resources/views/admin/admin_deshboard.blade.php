<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor mb-0 mt-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm float-right ml-2"><i class="ti-settings text-white"></i></button>
                <button class="btn float-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
                <div class="dropdown float-right mr-2 hidden-sm-down">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> January 2019 </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">February 2019</a> <a class="dropdown-item" href="#">March 2019</a> <a class="dropdown-item" href="#">April 2019</a> </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8"><span class="display-6">2376 <i class="ti-angle-down font-14 text-danger"></i></span>
                                <h6>Total Visits</h6></div>
                            <div class="col-4 align-self-center text-right  pl-0">
                                <div id="sparklinedash3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8"><span class="display-6">3670 <i class="ti-angle-up font-14 text-success"></i></span>
                                <h6>Page Views</h6></div>
                            <div class="col-4 align-self-center text-right pl-0">
                                <div id="sparklinedash"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8"><span class="display-6">1562 <i class="ti-angle-up font-14 text-success"></i></span>
                                <h6>Unique Visits</h6></div>
                            <div class="col-4 align-self-center text-right pl-0">
                                <div id="sparklinedash2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8"><span class="display-6">35% <i class="ti-angle-down font-14 text-danger"></i></span>
                                <h6>Bounce Rate</h6></div>
                            <div class="col-4 align-self-center text-right pl-0">
                                <div id="sparklinedash4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-inline float-right">
                            <li>
                                <h6 class="text-muted"><i class="fa fa-circle mr-1" style="color:#51bdff"></i>2015</h6>
                            </li>
                            <li>
                                <h6 class="text-muted"><i class="fa fa-circle mr-1" style="color:#11a0f8"></i>2016</h6>
                            </li>
                            <li>
                                <h6 class="text-muted"><i class="fa fa-circle mr-1 text-info"></i>2019</h6>
                            </li>
                        </ul>
                        <h4 class="card-title">Total Revenue</h4>
                        <div class="clear"></div>
                        <div class="total-sales" style="height: 365px;"></div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sales Prediction</h4>
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <span class="display-6 text-primary">$3528</span>
                                        <h6 class="text-muted">10% Increased</h6>
                                        <h5>(150-165 Sales)</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <div id="gauge-chart" style=" width:150px; height:150px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sales Difference</h4>
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <span class="display-6 text-success">$4316</span>
                                        <h6 class="text-muted">10% Increased</h6>
                                        <h5>(150-165 Sales)</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="ct-chart" style="width:120px; height: 120px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total Visits</h4>
                        <div id="visitfromworld" style="width:100%!important; height:415px"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Browser Stats</h4>
                        <table class="table browser mt-4 no-border">
                            <tbody>
                                <tr>
                                    <td style="width:40px"><img src="admin_assets/assets/images/browser/chrome-logo.png" alt=logo /></td>
                                    <td>Google Chrome</td>
                                    <td class="text-right"><span class="label label-light-info">23%</span></td>
                                </tr>
                                <tr>
                                    <td><img src="admin_assets/assets/images/browser/firefox-logo.png" alt=logo /></td>
                                    <td>Mozila Firefox</td>
                                    <td class="text-right"><span class="label label-light-success">15%</span></td>
                                </tr>
                                <tr>
                                    <td><img src="admin_assets/assets/images/browser/safari-logo.png" alt=logo /></td>
                                    <td>Apple Safari</td>
                                    <td class="text-right"><span class="label label-light-primary">07%</span></td>
                                </tr>
                                <tr>
                                    <td><img src="admin_assets/assets/images/browser/internet-logo.png" alt=logo /></td>
                                    <td>Internet Explorer</td>
                                    <td class="text-right"><span class="label label-light-warning">09%</span></td>
                                </tr>
                                <tr>
                                    <td><img src="admin_assets/assets/images/browser/opera-logo.png" alt=logo /></td>
                                    <td>Opera mini</td>
                                    <td class="text-right"><span class="label label-light-danger">23%</span></td>
                                </tr>
                                <tr>
                                    <td><img src="admin_assets/assets/images/browser/internet-logo.png" alt=logo /></td>
                                    <td>Microsoft edge</td>
                                    <td class="text-right"><span class="label label-light-megna">09%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar"></div>
                        <!-- BEGIN MODAL -->
                        <div class="modal fade none-border" id="my-event">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><strong>Add Event</strong></h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Add Category -->
                        <div class="modal fade none-border" id="add-new-event">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Category Name</label>
                                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label">Choose Category Color</label>
                                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                        <option value="success">Success</option>
                                                        <option value="danger">Danger</option>
                                                        <option value="info">Info</option>
                                                        <option value="primary">Primary</option>
                                                        <option value="warning">Warning</option>
                                                        <option value="inverse">Inverse</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                        <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END MODAL -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class=""><img src="admin_assets/assets/images/users/1.jpg" alt="user" class="img-circle" width="100"></div>
                            <div class="pl-3">
                                <h3 class="font-medium">Daniel Kristeen</h3>
                                <h6>UIUX Designer</h6>
                                <button class="btn btn-success"><i class="ti-plus"></i> Follow</button>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col border-right">
                                <h2 class="font-light">14</h2>
                                <h6>Photos</h6></div>
                            <div class="col border-right">
                                <h2 class="font-light">54</h2>
                                <h6>Videos</h6></div>
                            <div class="col">
                                <h2 class="font-light">145</h2>
                                <h6>Tasks</h6></div>
                        </div>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body">
                        <p class="text-center aboutscroll" style="overflow: hidden; width: auto; height: 80px;">
                            Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunLorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididuntt
                        </p>
                        <ul class="list-icons d-flex flex-item text-center pt-2">
                            <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Website"><i class="fa fa-globe font-20"></i></a></li>
                            <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="twitter"><i class="fab fa-twitter font-20"></i></a></li>
                            <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fab fa-facebook-square font-20"></i></a></li>
                            <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Youtube"><i class="fab fa-youtube font-20"></i></a></li>
                            <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Linkd-in"><i class="fab fa-linkedin font-20"></i></a></li>
                        </ul>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-12 mb-4">
                                <h4>Followers</h4></div>
                            <div class="col"><span class="round" data-toggle="tooltip" title="Varun"><img src="admin_assets/assets/images/users/4.jpg" alt="user" width="45"/></span></div>
                            <div class="col"><span class="round" data-toggle="tooltip" title="Alia"><img src="admin_assets/assets/images/users/2.jpg" alt="user" width="45"/></span></div>
                            <div class="col"><span class="round" data-toggle="tooltip" title="Akshay"><img src="admin_assets/assets/images/users/3.jpg" alt="user" width="45"/></span></div>
                            <div class="col"><span class="round" data-toggle="tooltip" title="More">5+</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Chats</h4>
                        <div class="chat-box">
                            <!--chat Row -->
                            <ul class="chat-list">
                                <!--chat Row -->
                                <li>
                                    <div class="chat-img"><img src="admin_assets/assets/images/users/1.jpg" alt="user" /></div>
                                    <div class="chat-content">
                                        <h5>James Anderson</h5>
                                        <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing & type setting industry.</div>
                                    </div>
                                    <div class="chat-time">10:56 am</div>
                                </li>
                                <!--chat Row -->
                                <li>
                                    <div class="chat-img"><img src="admin_assets/assets/images/users/2.jpg" alt="user" /></div>
                                    <div class="chat-content">
                                        <h5>Bianca Doe</h5>
                                        <div class="box bg-light-success">It’s Great opportunity to work.</div>
                                    </div>
                                    <div class="chat-time">10:57 am</div>
                                </li>
                                <!--chat Row -->
                                <li class="odd">
                                    <div class="chat-content">
                                        <div class="box bg-light-inverse">I would love to join the team.</div>
                                        <br/>
                                    </div>
                                    <div class="chat-time">10:58 am</div>
                                </li>
                                <!--chat Row -->
                                <li class="odd">
                                    <div class="chat-content">
                                        <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                        <br/>
                                    </div>
                                    <div class="chat-time">10:59 am</div>
                                </li>
                                <!--chat Row -->
                                <li>
                                    <div class="chat-img"><img src="admin_assets/assets/images/users/3.jpg" alt="user" /></div>
                                    <div class="chat-content">
                                        <h5>Angelina Rhodes</h5>
                                        <div class="box bg-light-primary">Well we have good budget for the project</div>
                                    </div>
                                    <div class="chat-time">11:00 am</div>
                                </li>
                                <!--chat Row -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-8">
                                <textarea placeholder="Type your message here" class="form-control b-0"></textarea>
                            </div>
                            <div class="col-4 text-right">
                                <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fas fa-paper-plane"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Messages</h4>
                        <div class="message-box">
                            <div class="message-widget">
                                <!-- Message -->
                                <a href="#">
                                    <div class="user-img"> <img src="admin_assets/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online float-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="user-img"> <img src="admin_assets/assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy float-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="user-img"> <span class="round">A</span> <span class="profile-status away float-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5> <span class="mail-desc">Simply dummy text of the printing and typesetting industry.</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="user-img"> <img src="admin_assets/assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline float-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="user-img"> <img src="admin_assets/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online float-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Welcome to the Elite Admin</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="user-img"> <img src="admin_assets/assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy float-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="mt-3">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block mt-4"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="mt-3 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="admin_assets/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="admin_assets/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="admin_assets/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="admin_assets/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="admin_assets/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="admin_assets/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="admin_assets/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="admin_assets/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>