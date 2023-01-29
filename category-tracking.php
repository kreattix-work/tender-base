<?php include_once './includes/header.php'; ?>

<div class="content-header">
    <div class="col flex-1 content-header-title">Category tracking</div>
    <div class="col-6">
        <div class="form-group flex-1">
            <span class="input-icon input-icon material-icons">search</span>
            <input type="text" placeholder="Search by category title or CPV..."
                class="form-control form-control-rounded form-control-sm">
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
            <div class="row align-items-center" id="card-header-parent-id" data-collapse-status="open">
                <div class="col">
                    <div class="font-lg text-dark">Agriculture and Food</div>
                </div>
                <div class="col">
                    <div class="hide-on-close d-flex align-items-center justify-content-center box-gx-4">
                        <div class="highlight-secondary-light radius-1 py-1 px-2 text-dark">
                            <span>Buyer:</span>
                            <span>12</span>
                        </div>
                        <div>
                            <span class="font-weight-sm">Supplier:</span>
                            <span>15</span>
                        </div>
                    </div>
                    <div class="hide-on-open d-flex justify-content-center box-gx-4">
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
                <div class="col">
                    <div class="d-flex align-items-center justify-content-end box-gx-4">
                        <div class="hide-on-close">
                            <div class="form-group">
                                <span class="input-icon input-icon material-icons">search</span>
                                <input type="text" placeholder="Search" class="form-control form-control-rounded">
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-rounded btn-outlined-dark px-5" data-collapse="#collapseid-1"
                                data-collapse-status="open" data-collapse-parent="#card-header-parent-id">
                                <span class="font-weight-sm hide-on-open">More Detais</span>
                                <span class="material-icons-outlined icon-xs hide-on-open">arrow_downward</span>
                                <span class="font-weight-sm hide-on-close">Hide</span>
                                <span class="material-icons-outlined icon-xs hide-on-close">arrow_upward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-gy-3 collapse show" id="collapseid-1">
                <div class="row-divider mt-3"></div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center box-gx-2">
                        <span class="font-weight-sm">Showing</span>
                        <select class="form-control form-control-xs">
                            <option value=" 10" selected>10</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="font-weight-sm">Entities</span>
                    </div>
                    <div class="d-flex box-gx-2">
                        <button class="btn btn-outlined btn-sm btn-square" disabled>
                            <span class="material-icons-outlined">chevron_left</span>
                        </button>
                        <button class="btn btn-outlined-secondary btn-sm btn-square">1</button>
                        <button class="btn btn-outlined btn-sm btn-square">
                            <span class="material-icons-outlined">chevron_right</span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center" id="card-header-parent-id-2" data-collapse-status="open">
                <div class="col">
                    <div class="font-lg text-dark">Agriculture and Food</div>
                </div>
                <div class="col">
                    <div class="hide-on-close d-flex align-items-center justify-content-center box-gx-4">
                        <div>
                            <span class="font-weight-sm">Buyer:</span>
                            <span>12</span>
                        </div>
                        <div class="highlight-primary-light radius-1 py-1 px-2 text-dark">
                            <span>Supplier:</span>
                            <span>15</span>
                        </div>
                    </div>
                    <div class="hide-on-open d-flex justify-content-center box-gx-4">
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
                <div class="col">
                    <div class="d-flex align-items-center justify-content-end box-gx-4">
                        <div class="hide-on-close">
                            <div class="form-group">
                                <span class="input-icon input-icon material-icons">search</span>
                                <input type="text" placeholder="Search" class="form-control form-control-rounded">
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-rounded btn-outlined-dark px-5" data-collapse="#collapseid-2"
                                data-collapse-status="open" data-collapse-parent="#card-header-parent-id-2">
                                <span class="font-weight-sm hide-on-open">More Detais</span>
                                <span class="material-icons-outlined icon-xs hide-on-open">arrow_downward</span>
                                <span class="font-weight-sm hide-on-close">Hide</span>
                                <span class="material-icons-outlined icon-xs hide-on-close">arrow_upward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-gy-3 collapse show" id="collapseid-2">
                <div class="row-divider mt-3"></div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center box-gx-2">
                        <span class="font-weight-sm">Showing</span>
                        <select class="form-control form-control-xs">
                            <option value=" 10" selected>10</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="font-weight-sm">Entities</span>
                    </div>
                    <div class="d-flex box-gx-2">
                        <button class="btn btn-outlined btn-sm btn-square" disabled>
                            <span class="material-icons-outlined">chevron_left</span>
                        </button>
                        <button class="btn btn-outlined-primary btn-sm btn-square">1</button>
                        <button class="btn btn-outlined btn-sm btn-square">
                            <span class="material-icons-outlined">chevron_right</span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="card">
        <div class="card-body box-gy-3">
            <div class="row align-items-center" id="card-header-parent-id" data-collapse-status="open">
                <div class="col">
                    <div class="font-lg text-dark">Agriculture and Food</div>
                </div>
                <div class="col">
                    <div class="hide-on-close d-flex justify-content-center box-gx-4">
                        <div>
                            <span class="font-weight-sm text-secondary">Buyer:</span>
                            <span>12</span>
                        </div>
                        <div>
                            <span class="font-weight-sm text-primary">Supplier:</span>
                            <span>15</span>
                        </div>
                    </div>
                    <div class="hide-on-open d-flex align-items-center justify-content-center box-gx-4">
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
                        <div class="hide-on-close">
                            <div class="form-group">
                                <span class="input-icon input-icon material-icons">search</span>
                                <input type="text" placeholder="Search" class="form-control form-control-rounded">
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-rounded btn-outlined-dark px-5" data-collapse="#collapseid-2"
                                data-collapse-status="open" data-collapse-parent="#card-header-parent-id">
                                <span class="font-weight-sm hide-on-open">More Detais</span>
                                <span class="material-icons-outlined icon-xs hide-on-open">arrow_downward</span>
                                <span class="font-weight-sm">Hide</span>
                                <span class="material-icons-outlined icon-xs">arrow_upward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-gy-3 collapse show" id="collapseid-2">
                <div class="row-divider"></div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center box-gx-2">
                        <span class="font-weight-sm">Showing</span>
                        <select class="form-control form-control-xs">
                            <option value=" 10" selected>10</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="font-weight-sm">Entities</span>
                    </div>
                    <div class="d-flex box-gx-2">
                        <button class="btn btn-outlined btn-sm btn-square" disabled>
                            <span class="material-icons-outlined">chevron_left</span>
                        </button>
                        <button class="btn btn-outlined-primary btn-sm btn-square">1</button>
                        <button class="btn btn-outlined btn-sm btn-square">
                            <span class="material-icons-outlined">chevron_right</span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1">
                        <div class="data-card data-card-sm box-gy-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="box-gy-2">
                                    <div class="font-lg text-dark">East Riding of Yorkshire Council</div>
                                    <div class="box-gx-1">
                                        <span class="text-muted font-weight-sm">Tender Published : </span>
                                        <span>2</span>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-square data-card-hover-content   ">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>

<?php include_once './includes/footer.php'; ?>