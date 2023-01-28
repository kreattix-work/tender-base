<?php include_once './includes/header.php'; ?>

<div class="content-header">
    <div class="content-header-title">Email Template</div>
</div>
<div class="content-body">
    <div class="card no-shadow">
        <div class="card-body">
            <form class="box-gy-4">
                <div class="d-flex justify-content-between">
                    <div class="font-lg d-flex box-gx-2">
                        <div class="">Email Title :</div>
                        <div class="">Food & Engineering Tender, UK</div>
                    </div>
                    <div class="font-weight-sm">This email is controlled by : <strong class="text-primary">Jewel
                            Majumder</strong>
                    </div>
                </div>
                <div class="row-divider"></div>
                <div class="d-flex align-items-center">
                    <span class="font-lg">To:</span>
                    <div class="form-group form-group-type-text flex-1">
                        <input type="text" placeholder="Type email or select Team member/Department"
                            class="form-control form-control-rounded form-control-sm  font-lg font-weight-sm">
                    </div>
                    <button class="btn btn-outlined btn-rounded btn-lg">
                        <span class="font-weight-sm">Select Member</span>
                        <span class="dropdown-menu-icon material-icons">arrow_drop_down</span>
                    </button>
                </div>

                <div class="form-group">
                    <textarea class="form-control min-h-200 font-xl font-weight-sm"
                        placeholder="Type your message"></textarea>
                </div>
            </form>
            <div class="d-flex justify-content-between mt-5">
                <div class="box-gx-6">
                    <span class="dropdown-menu-icon material-icons-outlined">attach_file</span>
                    <span class="dropdown-menu-icon material-icons-outlined">link</span>
                    <span class="dropdown-menu-icon material-icons-outlined">emoji_emotions</span>
                    <span class="dropdown-menu-icon material-icons-outlined">image</span>
                </div>
                <div class="d-flex justify-content-center box-gx-4">
                    <button class="btn btn-rounded btn-lg btn-muted font-lg font-weight-sm">Cancel</button>
                    <button class="btn btn-rounded btn-lg btn-primary font-lg font-weight-sm">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once './includes/footer.php'; ?>