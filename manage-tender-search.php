<?php include_once './includes/header.php'; ?>

<div class="content-header">
    <div class="content-header-title">Search Live Tenders</div>
    <div>
        <button class="btn">
            <span class="material-icons-outlined">vertical_align_bottom</span>
            <span>Export All (100)</span>
            <span class="dropdown-menu-icon material-icons">arrow_drop_down</span>
        </button>
    </div>
</div>
<div class="content-body box-gy-3">
    <div class="card">
        <div class="card-body card-filter-container">
            <button class="btn btn-text p-0 no-hover">
                <span class="material-icons">arrow_drop_down</span>
                <span>Anything</span>
            </button>
            <div class="col-divider"></div>
            <div class="form-group form-group-type-text flex-1">
                <span class="input-icon input-icon-prefix material-icons">search</span>
                <input type="text" placeholder="Title or Tender id" class="form-control form-control-sm">
            </div>
            <span>In:</span>
            <div class="col-divider"></div>
            <button class="btn btn-text p-0 no-hover">
                <span class="material-icons">format_list_bulleted</span>
                <span>Categories</span>
            </button>
            <div class="col-divider"></div>
            <button class="btn btn-text p-0 no-hover">
                <span class="material-icons">saved_search</span>
                <span>Advance</span>
            </button>
            <div class="col-divider"></div>
            <button class="btn btn-text p-0 no-hover">
                <span class="material-icons">turned_in_not</span>
                <span>Saved</span>
            </button>
            <div class="col-divider"></div>
            <button class="btn btn-outlined-primary btn-lg">
                <span>Search</span>
            </button>
        </div>
    </div>
    <div class="card">
        <div class="card-body d-flex justify-content-between">
            <div class="card-filter-container">
                <button class=" btn btn-text btn-outlined-dark p-0 no-hover">
                    <span class="material-icons-outlined">filter_alt</span>
                    <span class="font-weight-sm">Filter</span>
                </button>
                <div class="col-divider"></div>
                <button class="btn btn-text p-0 no-hover">
                    <span class="material-icons">arrow_drop_down</span>
                    <span class="font-weight-sm">Location</span>
                </button>
                <div class="col-divider"></div>
                <button class="btn btn-text p-0 no-hover">
                    <span class="material-icons">arrow_drop_down</span>
                    <span class="font-weight-sm">Published Duration</span>
                </button>
                <div class="col-divider"></div>
                <button class="btn btn-text p-0 no-hover">
                    <span class="material-icons">arrow_drop_down</span>
                    <span class="font-weight-sm">Price</span>
                </button>
                <div class="col-divider"></div>
                <div class="form-group">
                    <span class="input-icon input-icon material-icons">search</span>
                    <input type="text" placeholder="Search by town" class="form-control form-control-sm">
                </div>
            </div>
            <div class="card-filter-container">
                <button class=" btn btn-text p-0 no-hover">
                    <span class="material-icons-outlined">sort</span>
                    <span>Sort by</span>
                </button>
                <div class="col-divider"></div>
                <button class="btn btn-text btn-outlined-dark p-0 no-hover">
                    <span class="material-icons">arrow_drop_down</span>
                    <span>Live tenders</span>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-filter-container">
                    <div>
                        <span class="text-muted font-weight-sm">Search result:</span>
                        <span>100 Tenders</span>
                    </div>
                </div>
                <div class="card-filter-container">
                    <div class="font-weight-sm">Suitable for SME</div>
                    <label class="input-switch">
                        <input type="checkbox">
                        <span class="input-switch-indicator"></span>
                    </label>
                    <button class=" btn btn-text p-0 no-hover">
                        <span class="font-weight-sm">Order by</span>
                    </button>
                    <div class="col-divider"></div>
                    <button class="btn btn-text btn-outlined-dark p-0 no-hover">
                        <span class="material-icons rotate-90">code</span>
                        <span>Decending</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body no-border card-body-sm pt-0">
            <div class="data-card-group">
                <div class="data-card box-gy-6">
                    <div class="row">
                        <div class="col box-gy-3">
                            <div class="d-flex align-items-center box-gx-2">
                                <span class="font-lg text-dark">GB-Merseyside: RFCA (NW) Merseyside Cadet Hut Refurbishments</span>
                                <span class="font-weight-sm text-dark highlight-secondary-light">Possible bidding competitors</span>
                                <span class="material-icons-outlined icon-sm">done_all</span>
                                <button class="btn btn-xs btn-rounded no-hover">
                                    <span class="text-muted">Seen by</span> <span class="text-dark">You</span>
                                </button>
                            </div>
                            <div class="d-flex align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">schedule</span>
                                    <span class="text-muted font-weight-sm">Published :</span>
                                    <span>02/11/2022</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">room</span>
                                    <span>Remote</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">Lots :</span>
                                    <span>12</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">Buyer :</span>
                                    <span>Council Of Reserve Forces And Cadets Associations</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-flex box-gx-5">
                                <div class="d-flex box-gx-2 data-card-hover-content">
                                    <button class="btn btn-outlined-primary px-2">
                                        <span class="material-icons-outlined">done</span>
                                    </button>
                                    <button class="btn btn-outlined-secondary px-2">
                                        <span class="material-icons-outlined">close</span>
                                    </button>
                                </div>
                                <div class="box-gy-2">
                                    <div class="text-primary font-xl font-weight-lg">2 Days</div>
                                    <div class="font-weight-sm">Deadline</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">attach_file</span>
                                    <span>Attachment</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">folder</span>
                                    <span>Save</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">person_add_alt_1</span>
                                    <span>Assign tender to</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-flex box-gx-4">
                            <button class="btn btn-outlined-default btn-lg">Ask to expert</button>
                            <button class="btn btn-outlined-primary btn-lg">Ask for summary</button>
                        </div>
                    </div>
                </div>
                <div class="row-divider my-2"></div>
                <div class="data-card box-gy-6">
                    <div class="row">
                        <div class="col box-gy-3">
                            <div class="d-flex align-items-center box-gx-2">
                                <span class="font-lg text-dark">GB-Merseyside: RFCA (NW) Merseyside Cadet Hut Refurbishments</span>
                                <span class="font-weight-sm text-dark highlight-secondary-light">Possible bidding competitors</span>
                                <span class="material-icons-outlined icon-sm">done_all</span>
                                <button class="btn btn-xs btn-rounded no-hover">
                                    <span class="text-muted">Seen by</span> <span class="text-dark">You</span>
                                </button>
                            </div>
                            <div class="d-flex align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">schedule</span>
                                    <span class="text-muted font-weight-sm">Published :</span>
                                    <span>02/11/2022</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">room</span>
                                    <span>Remote</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">Lots :</span>
                                    <span>12</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">Buyer :</span>
                                    <span>Council Of Reserve Forces And Cadets Associations</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-flex box-gx-5">
                                <div class="d-flex box-gx-2 data-card-hover-content">
                                    <button class="btn btn-outlined-primary px-2">
                                        <span class="material-icons-outlined">done</span>
                                    </button>
                                    <button class="btn btn-outlined-secondary px-2">
                                        <span class="material-icons-outlined">close</span>
                                    </button>
                                </div>
                                <div class="box-gy-2">
                                    <div class="text-primary font-xl font-weight-lg">2 Days</div>
                                    <div class="font-weight-sm">Deadline</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">attach_file</span>
                                    <span>Attachment</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">folder</span>
                                    <span>Save</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-secondary icon-sm material-icons-outlined">person_add_alt_1</span>
                                    <span>Assigned To :</span>
                                    <span class="text-secondary">TEAM NAME (Member Name)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-flex box-gx-4">
                            <button class="btn btn-outlined-default btn-lg">Ask to expert</button>
                            <button class="btn btn-outlined-primary btn-lg">Ask for summary</button>
                        </div>
                    </div>
                </div>
                <div class="row-divider my-2"></div>
                <div class="data-card box-gy-6">
                    <div class="row">
                        <div class="col box-gy-3">
                            <div class="d-flex align-items-center box-gx-2">
                                <span class="font-lg text-dark">GB-Merseyside: RFCA (NW) Merseyside Cadet Hut Refurbishments</span>
                                <span class="font-weight-sm text-dark highlight-secondary-light">Possible bidding competitors</span>
                                <span class="material-icons-outlined icon-sm">done_all</span>
                                <button class="btn btn-xs btn-rounded no-hover">
                                    <span class="text-muted">Seen by</span> <span class="text-dark">You</span>
                                </button>
                            </div>
                            <div class="d-flex align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">schedule</span>
                                    <span class="text-muted font-weight-sm">Published :</span>
                                    <span>02/11/2022</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">room</span>
                                    <span>Remote</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">Lots :</span>
                                    <span>12</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">Buyer :</span>
                                    <span>Council Of Reserve Forces And Cadets Associations</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-flex box-gx-5">
                                <div class="d-flex box-gx-2 data-card-hover-content">
                                    <button class="btn btn-outlined-primary px-2">
                                        <span class="material-icons-outlined">done</span>
                                    </button>
                                    <button class="btn btn-outlined-secondary px-2">
                                        <span class="material-icons-outlined">close</span>
                                    </button>
                                </div>
                                <div class="box-gy-2">
                                    <div class="text-primary font-xl font-weight-lg">2 Days</div>
                                    <div class="font-weight-sm">Deadline</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">attach_file</span>
                                    <span>Attachment</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-primary icon-sm material-icons-outlined">folder</span>
                                    <span>Saved to :</span>
                                    <span class="text-primary">Food</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-primary icon-sm material-icons-outlined">person_add_alt_1</span>
                                    <span>Assigned To</span>
                                    <span class="text-primary">TEAM NAME (Member Name)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-flex box-gx-4">
                            <button class="btn btn-outlined-default btn-lg">Ask to expert</button>
                            <button class="btn btn-outlined-primary btn-lg">Ask for summary</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php'; ?>