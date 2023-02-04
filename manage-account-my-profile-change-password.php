<?php include_once './includes/header.php'; ?>

<div class="content-header">
    <div class="content-header-title">Edit Profile Information</div>
    <div class="row gx-3 gy-2 justify-content-end">
        <div class="col-auto">
            <button class="btn btn-outlined-secondary btn-rounded">
                <span>Change password</span>
            </button>
        </div>
        <div class="col-auto">
            <button class="btn btn-outlined-danger btn-rounded">
                <span>Close my account</span>
            </button>
        </div>
    </div>
</div>
<div class="row gx-0">
    <div class="col-lg-16">
        <div class="content-body">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form class="box-gy-4">
                        <div class="form-group d-flex justify-content-between">
                            <div class="font-lg">Change Password</div>
                            <button class="btn btn-text text-secondary">
                                <span class="material-icons">undo</span>
                                <span class="font-weight-xl font-lg">Reset</span>
                            </button>
                        </div>
                        <div class="row-divider"></div>
                        <div class="form-group">
                            <label class="font-weight-sm">Current Password</label>
                            <input type="password" class="font-lg font-weight-sm form-control form-control-lg">
                        </div>
                        <div class="row gy-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span
                                        class="input-icon input-icon-sufix material-icons-outlined">remove_red_eye</span>
                                    <label class="font-weight-sm">New Password</label>
                                    <input type="email" class="font-lg font-weight-sm form-control form-control-lg">
                                    <span class="form-note text-secondary">Strong</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span
                                        class="input-icon input-icon-sufix material-icons-outlined">visibility_off</span>
                                    <label class="font-weight-sm">Confirm Password</label>
                                    <input type="text" class="font-lg font-weight-sm form-control form-control-lg">
                                    <span class="form-note text-danger">Password didn’t matched</span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="d-flex justify-content-center box-gx-4 mt-5">
                        <button class="btn btn-lg btn-muted font-lg font-weight-sm">Cancel</button>
                        <button class="btn btn-lg btn-primary font-lg font-weight-sm">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php'; ?>