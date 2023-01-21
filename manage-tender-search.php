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
                <input type="text" placeholder="Title or Tender id" class="form-control form-control-rounded form-control-sm">
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
                    <input type="text" placeholder="Search by town" class="form-control form-control-rounded form-control-sm">
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
                    <div class="row gx-0">
                        <div class="col box-gy-3">
                            <div class="d-flex align-items-center box-gx-2">
                                <span class="font-lg text-dark">GB-Merseyside: RFCA (NW) Merseyside Cadet Hut Refurbishments</span>
                                <span class="font-weight-sm text-dark highlight-secondary-light">Possible bidding competitors</span>
                                <span class="material-icons-outlined icon-sm">done_all</span>
                                <button class="btn btn-xs btn-rounded no-hover">
                                    <div class="font-sm text-muted">
                                        <span class="font-weight-sm">Seen by</span>
                                        <span class="text-dark">You</span>
                                    </div>
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
                            <div class="d-flex box-gx-4">
                                <div class="d-flex box-gx-2 data-card-hover-content">
                                    <button class="btn btn-outlined-primary btn-sm btn-icon px-1">
                                        <span class="material-icons-outlined">done</span>
                                    </button>
                                    <button class="btn btn-outlined-secondary btn-sm btn-icon px-1">
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
                                <div class="d-flex align-items-center box-gx-1" data-trigger-popover="#popoverid-1">
                                    <span class="text-muted icon-sm material-icons-outlined">folder</span>
                                    <span>Save</span>
                                </div>
                                <div class="popover-dialog" id="popoverid-1">
                                    <div class="popover-content box-gy-3">
                                        <div class="popover-header">
                                            <div class="text-muted font-weight-sm">Select Folder</div>
                                            <div>
                                                <button class="btn btn-sm btn-text p-0 no-hover">
                                                    <span class="material-icons-outlined">add</span>
                                                    <span>Create New</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row-divider pb-1"></div>
                                        <div class="popover-header">
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
                    <div class="row gx-0">
                        <div class="col box-gy-3">
                            <div class="d-flex align-items-center box-gx-2">
                                <span class="font-lg text-dark">GB-Merseyside: RFCA (NW) Merseyside Cadet Hut Refurbishments</span>
                                <span class="font-weight-sm text-dark highlight-secondary-light">Possible bidding competitors</span>
                                <span class="material-icons-outlined icon-sm">done_all</span>
                                <button class="btn btn-hovered btn-rounded btn-xs p-1 no-border">
                                    <span class="material-icons-outlined icon-sm">remove_red_eye</span>
                                </button>
                                <button class="btn btn-xs btn-rounded no-hover">
                                    <div class="font-sm text-muted">
                                        <span class="font-weight-sm">Seen by</span>
                                        <span class="text-dark">ASHIQ, SALAM</span>
                                        <span class="font-weight-sm">+12 more</span>
                                    </div>
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
                            <div class="d-flex box-gx-4">
                                <div class="d-flex box-gx-2 data-card-hover-content">
                                    <button class="btn btn-outlined-primary btn-sm btn-icon px-1">
                                        <span class="material-icons-outlined">done</span>
                                    </button>
                                    <button class="btn btn-outlined-secondary btn-sm btn-icon px-1">
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
                                <div class="box-gx-1 d-flex align-items-center" data-trigger-popover="#popoverid-2">
                                    <span class="text-muted icon-sm material-icons-outlined">folder</span>
                                    <span>Save</span>
                                </div>
                                <div class="popover-dialog" id="popoverid-2">
                                    <div class="popover-content box-gy-3">
                                        <div class="popover-header">
                                            <div class="text-muted font-weight-sm">Select Folder</div>
                                            <div>
                                                <button class="btn btn-sm btn-text p-0 no-hover">
                                                    <span class="material-icons-outlined">add</span>
                                                    <span>Create New</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row-divider pb-1"></div>
                                        <div class="popover-header">
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
                    <div class="row gx-0">
                        <div class="col box-gy-3">
                            <div class="d-flex align-items-center box-gx-2">
                                <span class="font-lg text-dark">GB-Merseyside: RFCA (NW) Merseyside Cadet Hut Refurbishments</span>
                                <span class="font-weight-sm text-dark highlight-secondary-light">Possible bidding competitors</span>
                                <span class="material-icons-outlined icon-sm">done_all</span>
                                <button class="btn btn-hovered btn-rounded btn-xs p-1 no-border">
                                    <span class="material-icons-outlined icon-sm">remove_red_eye</span>
                                </button>
                                <button class="btn btn-xs btn-rounded no-hover">
                                    <div class="font-sm text-muted">
                                        <span class="font-weight-sm">Seen by</span>
                                        <span class="text-dark">ASHIQ, SALAM</span>
                                        <span class="font-weight-sm">+12 more</span>
                                    </div>
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
                            <div class="d-flex box-gx-4">
                                <div class="d-flex box-gx-2 data-card-hover-content">
                                    <button class="btn btn-outlined-primary btn-sm btn-icon px-1">
                                        <span class="material-icons-outlined">done</span>
                                    </button>
                                    <button class="btn btn-outlined-secondary btn-sm btn-icon px-1">
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
                                <div class="box-gx-1 d-flex align-items-center" data-trigger-popover="#popoverid-3">
                                    <span class="text-primary icon-sm material-icons-outlined">folder</span>
                                    <span>Saved to :</span>
                                    <span class="text-primary">Food</span>
                                </div>
                                <div class="popover-dialog" id="popoverid-3">
                                    <div class="popover-content box-gy-3">
                                        <div class="popover-header">
                                            <div class="text-muted font-weight-sm">Select Folder</div>
                                            <div>
                                                <button class="btn btn-sm btn-text p-0 no-hover">
                                                    <span class="material-icons-outlined">add</span>
                                                    <span>Create New</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row-divider pb-1"></div>
                                        <div class="popover-header">
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
                <div class="row-divider my-2"></div>
                <div class="data-card box-gy-6">
                    <div class="row gx-0">
                        <div class="col box-gy-3">
                            <div class="d-flex align-items-center box-gx-2">
                                <span class="font-lg text-dark">GB-Merseyside: RFCA (NW) Merseyside Cadet Hut Refurbishments</span>
                                <span class="font-weight-sm text-dark highlight-secondary-light">Possible bidding competitors</span>
                                <button class="btn btn-hovered btn-rounded btn-xs p-1 no-border">
                                    <span class="material-icons-outlined icon-sm">remove_red_eye</span>
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
                            <div class="d-flex box-gx-4">
                                <div class="d-flex box-gx-2 data-card-hover-content">
                                    <button class="btn btn-outlined-primary btn-sm btn-icon px-1">
                                        <span class="material-icons-outlined">done</span>
                                    </button>
                                    <button class="btn btn-outlined-secondary btn-sm btn-icon px-1">
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
                                <div class="box-gx-1 d-flex align-items-center" data-trigger-popover="#popoverid-4">
                                    <span class="text-primary icon-sm material-icons-outlined">folder</span>
                                    <span>Saved to :</span>
                                    <span class="text-primary">Food</span>
                                </div>
                                <div class="popover-dialog" id="popoverid-4">
                                    <div class="popover-content box-gy-3">
                                        <div class="popover-header">
                                            <div class="text-muted font-weight-sm">Select Folder</div>
                                            <div>
                                                <button class="btn btn-sm btn-text p-0 no-hover">
                                                    <span class="material-icons-outlined">add</span>
                                                    <span>Create New</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row-divider pb-1"></div>
                                        <div class="popover-header">
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
                                                    <input type="checkbox" class="form-checkbox" checked>
                                                    <div class="form-checkbox-indicator">
                                                        <span class="material-icons-outlined">done</span>
                                                    </div>
                                                    <span>Agriculture and food</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popover-actions">
                                        <button class="btn btn-primary btn-flat flex-1 close-popover">Save</button>
                                    </div>
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
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center box-gx-2">
                    <span class="font-weight-sm">Showing Entities</span>
                    <select class="form-control form-control-xs">
                        <option value=" 10" selected>10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="font-weight-sm">Page 1 of 5</span>
                </div>
                <div class="d-flex box-gx-2">
                    <button class="btn btn-outlined btn-sm btn-square" disabled>
                        <span class="material-icons-outlined">chevron_left</span>
                    </button>
                    <button class="btn btn-outlined-secondary btn-sm btn-square">1</button>
                    <button class="btn btn-outlined btn-sm btn-square">2</button>
                    <button class="btn btn-outlined btn-sm btn-square">3</button>
                    <button class="btn btn-outlined-secondary btn-sm btn-square">
                        <span class="material-icons-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php'; ?>