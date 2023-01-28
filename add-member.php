<?php include_once './includes/header.php'; ?>

<div class="content-header">
    <div class="content-header-title">Add Team member</div>
    <div>
        <button class="btn btn-outlined-primary btn-rounded">
            <span>Create Team</span>
        </button>
    </div>
</div>
<div class="content-body">
    <div class="card shadow-sm py-5">
        <form class="card-body box-gy-6">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <div class="font-lg font-weight-sm">Please entered required information bellow</div>
                    <button class="btn btn-text text-secondary">
                        <span class="material-icons">undo</span>
                        <span class="font-weight-xl font-lg">Reset</span>
                    </button>
                </div>
                <div class="col-6"></div>
            </div>
            <div class="row">
                <div class="col-6 text-right font-lg text-dark mt-3">
                    <label for="name">Name</label>
                </div>
                <div class="col-12">
                    <div class="form-group flex-1">
                        <input type="text" placeholder="Title or Tender id"
                            class="form-control form-control-lg font-lg font-weight-sm">
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
            <div class="row">
                <div class="col-6 text-right font-lg text-dark mt-3">
                    <label for="fname">Contact Details</label>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="form-group flex-1">
                            <input type="text" placeholder="+88"
                                class="form-control form-control-lg font-lg font-weight-sm">
                        </div>
                        <div class="form-group flex-1">
                            <span class="input-icon input-icon-prefix material-icons-outlined">mail</span>
                            <input type="text" placeholder="example@email.com"
                                class="form-control form-control-lg font-lg font-weight-sm">
                            <span class="form-note">Password will be recieved on email address</span>
                        </div>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
            <div class="row">
                <div class="col-6 text-right font-lg text-dark mt-3">
                    <label for=" name">User Role</label>
                </div>
                <div class="col-12">
                    <div class="form-group flex-1">
                        <input data-trigger-popover="#popoverid-1"
                            class="form-control form-control-lg font-weight-sm font-lg" value="Manager" readonly />
                        <div class="popover-dialog" id="popoverid-1">
                            <div class="popover-content box-gy-3">
                                <div class="popover-header">
                                    <div class="text-muted font-weight-sm">Select Role</div>
                                    <div>
                                        <button class="btn btn-sm btn-text text-primary p-0 no-hover">
                                            <span class="material-icons-outlined">add</span>
                                            <span>Create Role</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row-divider pb-1"></div>
                                <div class="popover-body">
                                    <div class="box-gy-4">
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span>Folder Name</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span>Folder Name</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span>Folder Name</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="popover-actions">
                                <button class="btn btn-primary btn-flat flex-1 close-popover">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
            <div class="row">
                <div class="col-6 text-right font-lg text-dark mt-3">
                    <label for=" name">Assign Department</label>
                </div>
                <div class="col-12">
                    <div class="form-group flex-1">
                        <select class="form-control  form-control-lg font-weight-sm font-lg">
                            <option value="6">Food</option>
                        </select>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
            <div class="row">
                <div class="col-6 text-right font-lg text-dark mt-3">
                    <label for="fname">Assign Category & Location</label>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="form-group flex-1">
                            <span class="input-icon input-icon-as-text p-0 text-secondary">Edit</span>
                            <input type="text" placeholder="All Categories"
                                class="font-lg font-weight-sm form-control form-control-lg" />
                        </div>
                        <div class="form-group flex-1">
                            <span class="input-icon input-icon-prefix material-icons-outlined">location_on</span>
                            <select class="form-control form-control-lg font-lg font-weight-sm">
                                <option value=""> 15 selected</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
            <div class="row">
                <div class="col-6"></div>
                <div class="col-12">
                    <div class="row-divider mb-4"></div>
                    <div class="d-flex justify-content-end box-gx-4">
                        <button class="btn btn-lg px-5">Cancel</button>
                        <button class="btn btn-primary btn-lg px-5">Save</button>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </form>
    </div>
</div>
<?php include_once './includes/footer.php'; ?>