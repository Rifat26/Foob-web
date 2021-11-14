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
                <h2 class="page-title">Login / Register</h2>
            </div><!-- end container -->
        </div><!-- end head-title -->

        <div id="main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="acc-box equal">
                            <h2>Login</h2>
                            <p><em>Welcome back. Log in using your e-mail and password.</em></p>
                            <form>
                                <div class="form-group">
                                    <label for="InputEmailAcc1">Email address *</label>
                                    <input type="email" class="form-control" id="InputEmailAcc1"
                                        placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password *</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberCheck">
                                    <label class="form-check-label" for="rememberCheck">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                                <span class="float-right">forget password? <a href="#">click here</a></span>
                            </form>
                        </div><!-- end acc-box -->
                    </div><!-- end col -->

                    <div class="col-12 col-md-6">
                        <div class="acc-box equal">
                            <h2>Register</h2>
                            <p><em>If you don't have account yet.</em></p>
                            <form>
                                <div class="form-group"><label for="completeName">Complete Name</label><input
                                        type="text" class="form-control" id="completeName"
                                        placeholder="ex. Indra Kurniawan"></div>
                                <div class="form-group"><label for="InputEmailAcc2">Email address *</label><input
                                        type="email" class="form-control" id="InputEmailAcc2"
                                        placeholder="you@email.com"></div><button type="submit"
                                    class="btn btn-primary">Register</button>
                            </form>
                        </div><!-- end acc-box -->
                    </div><!-- end col -->
                </div>
            </div><!-- end container -->
        </div><!-- end main -->
        
        @include('master.foot')