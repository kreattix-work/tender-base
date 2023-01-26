<?php include_once './includes/header.php'; ?>

<div class="content-header">
    <div class="col flex-1 content-header-title">Category tracking</div>
    <div class="col-6">
        <div class="form-group flex-1">
            <span class="input-icon input-icon material-icons">search</span>
            <input type="text" placeholder="Search by category title or CPV..." class="form-control form-control-rounded form-control-sm">
        </div>
    </div>
</div>
<div class="content-body box-gy-3">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col">
                    <div class="font-lg text-dark">Agriculture and Food</div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center box-gx-4">
                        <div>
                            <span class="font-weight-sm text-secondary">Buyer:</span>
                            <span>12</span>
                        </div>
                        <div>
                            <span class="font-weight-sm text-primary">Supplier:</span>
                            <span>15</span>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-rounded btn-outlined-dark">
                        <span class="font-weight-sm">More details</span>
                        <span class="material-icons-outlined icon-xs">arrow_downward</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col">
                    <div class="font-lg text-dark">Agriculture and Food</div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center justify-content-center box-gx-4">
                        <div class="highlight-secondary-light radius-1 py-1 px-2 text-dark">
                            <span>Buyer:</span>
                            <span>12</span>
                        </div>
                        <div>
                            <span class="font-weight-sm">Supplier:</span>
                            <span>15</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center justify-content-end box-gx-4">
                        <div>
                            <div class="form-group">
                                <span class="input-icon input-icon material-icons">search</span>
                                <input type="text" placeholder="Search" class="form-control form-control-rounded">
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-rounded btn-outlined-dark px-5">
                                <span class="font-weight-sm">Hide</span>
                                <span class="material-icons-outlined icon-xs">arrow_upward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php'; ?>