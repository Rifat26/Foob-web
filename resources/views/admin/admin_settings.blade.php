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
                <h3 class="text-themecolor mb-0 mt-0">Settings</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </div>
            
        </div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
           
            <form action="" method="POST">
                @csrf
                <div class="card-body">
                    <h2 class="card-title">Settings Info</h2>
                </div>
                <hr>
                <div class="form-body col-lg-10 mx-auto">
                    <div class="card-body">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Name</label>
                                    <div class="col-6">
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ $setting->vendor_name }}">
                                    </div>
                                </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Address</label>
                            <div class="col-6">
                                <input type="text" id="address" class="form-control" name="address" placeholder="Address" value="{{ $setting->vendor_address }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-2 col-form-label">Email</label>
                            <div class="col-6">
                                <input type="text" id="email" class="form-control" name="email" placeholder="Email" value="{{ $setting->vendor_email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-2 col-form-label">Phone</label>
                            <div class="col-6">
                                <input type="text" id="number" class="form-control" name="phone" placeholder="Number" value="{{ $setting->vendor_phone }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-fb-input" class="col-2 col-form-label">Facebook</label>
                            <div class="col-6">
                                <input type="text" id="facebook" class="form-control" name="fb" placeholder="Facebook" value="{{ $setting->fb_link }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-inst-input" class="col-2 col-form-label">Instagram</label>
                            <div class="col-6">
                                <input type="text" id="instagram" class="form-control" name="inst" placeholder="Instagram" value="{{ $setting->inst_link }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-twit-input" class="col-2 col-form-label">Twitter</label>
                            <div class="col-6">
                                <input type="text" id="twitter" class="form-control" name="twit" placeholder="Twitter" value="{{ $setting->twit_link }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label">Logo</label>
                            <div class="input-group col-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="logo" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label">Favicon</label>
                            <div class="input-group col-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="fav_icon" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="form-actions">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                            <button type="button" class="btn btn-dark">Cancel</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>