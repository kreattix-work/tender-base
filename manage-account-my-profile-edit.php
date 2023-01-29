<?php include_once './includes/header.php'; ?>

<div class="content-header">
    <div class="content-header-title">Edit Profile Information</div>
    <div class="d-flex box-gx-4">
        <button class="btn btn-outlined-secondary btn-rounded">
            <span>Change password</span>
        </button>
        <button class="btn btn-outlined-danger btn-rounded">
            <span>Close my account</span>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-16">
        <div class="content-body">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="ui-tabs">
                        <div class="ui-tabs-header d-flex align-items-center justify-content-between">
                            <ul class="ui-tabs-action">
                                <li class="ui-tabs-action-item"><a href="#tabs-1">Personal Information</a></li>
                                <li class="ui-tabs-action-item"><a href="#tabs-2">Billing Information</a></li>
                            </ul>
                            <div class=""><button class="btn btn-text text-secondary">
                                    <span class="material-icons">undo</span>
                                    <span class="font-weight-xl font-lg">Reset</span>
                                </button></div>
                        </div>
                        <div id="tabs-1">
                            <form class="my-4 box-gy-4">
                                <div class="form-group">
                                    <label class="font-weight-sm required-before">Name</label>
                                    <input type="text" class="font-lg font-weight-sm form-control form-control-lg">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="font-weight-sm required-before">Email Address</label>
                                            <input type="email"
                                                class="font-lg font-weight-sm form-control form-control-lg">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="font-weight-sm required-before">Mobile</label>
                                            <input type="text"
                                                class="font-lg font-weight-sm form-control form-control-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-sm">Company Name</label>
                                    <input type="text" class="font-lg font-weight-sm form-control form-control-lg">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-sm">Website Link</label>
                                    <input type="text" class="font-lg font-weight-sm form-control form-control-lg"
                                        placeholder="Type">
                                </div>
                            </form>
                            <div class="d-flex justify-content-end box-gx-4">
                                <button class="btn btn-muted font-lg font-weight-sm">Cancel</button>
                                <button class="btn btn-primary font-lg font-weight-sm">Update</button>
                            </div>
                        </div>
                        <div id="tabs-2">
                            <form class="my-4 box-gy-4">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <div>
                                            <input type="radio">
                                            <label for="html" class="text-primary">Find Address</label>
                                        </div>
                                        <div>
                                            <input type="radio">
                                            <label class="font-weight-sm" for="html">Manual</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <label class="font-weight-sm required-before">Email Address</label>
                                    <div class="row gx-0">
                                        <div class="col">
                                            <input type="email"
                                                class="font-lg font-weight-sm form-control form-control-lg">
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-primary font-lg fill-container">Find Address</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="required-before" for="">Address</label>
                                    <select class="form-control form-control-lg font-lg font-weight-sm">
                                        <option value="">Choose your Address</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required-before" for="">Address Line-1</label>
                                    <select class="form-control form-control-lg font-lg font-weight-sm">
                                        <option value="">Type</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required-before" for="">Address Line-2</label>
                                    <select class="form-control form-control-lg font-lg font-weight-sm">
                                        <option value="">Type</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required-before" for="">Post Code</label>
                                    <select class="form-control form-control-lg font-lg font-weight-sm">
                                        <option value="">Type</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="font-weight-sm required-before">City</label>
                                            <input type="text"
                                                class="font-lg font-weight-sm form-control form-control-lg">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="font-weight-sm required-before">Country</label>
                                            <select class="form-control form-control-lg font-lg font-weight-sm">
                                                <option value="">Type</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex justify-content-end box-gx-4">
                                <button class="btn btn-muted font-lg font-weight-sm">Cancel</button>
                                <button class="btn btn-primary font-lg font-weight-sm">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include_once './includes/footer.php'; ?>