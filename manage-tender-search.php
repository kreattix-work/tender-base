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
    <div class="card shadow-sm">
        <div class="card-body card-filter-container">
            <button class="btn btn-text p-0 no-hover">
                <span class="material-icons">arrow_drop_down</span>
                <span>Anything</span>
            </button>
            <div class="col-divider"></div>
            <div class="form-group form-group-type-text flex-1">
                <span class="input-icon input-icon-prefix material-icons">search</span>
                <input type="text" placeholder="Title or Tender id"
                    class="form-control form-control-rounded form-control-sm">
            </div>
            <span>In:</span>
            <div class="col-divider"></div>
            <button data-trigger-popover="#popover-categories" class="btn btn-text p-0 no-hover">
                <span class="material-icons">format_list_bulleted</span>
                <span>Categories</span>
            </button>
            <div id="popover-categories" class="popover-dialog" id="popoverid-4">
                <div class="popover-content box-gy-3">
                    <div class="popover-header">
                        <div class="text-muted font-weight-sm">All Categories</div>
                        <div>
                            <button class="btn btn-sm btn-text p-0 no-hover close-popover">
                                <span class="material-icons-outlined">close</span>
                            </button>
                        </div>
                    </div>
                    <div class="row-divider pb-1"></div>
                    <div class="popover-body">
                        <div class="box-gy-4">
                            <div class="d-flex align-items-center">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>Agriculture and food</span>
                                </label>
                                <span data-collapse="#collapseid-1" data-collapse-status="open"
                                    class="dropdown-menu-icon material-icons rotate-180-on-open">arrow_drop_down</span>
                            </div>
                            <div id="collapseid-1" class="collapse show ps-3 ms-3 box-gy-3">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Agricultural, forestry, horticultural, aquacultural and
                                        apicultural services.</span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>Computer and related service</span>
                                </label>
                                <span data-collapse="#collapseid-2" data-collapse-status="close"
                                    class="dropdown-menu-icon material-icons rotate-180-on-open">arrow_drop_down</span>
                            </div>
                            <div id="collapseid-2" class="collapse ps-3 ms-3 box-gy-3">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 1</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 2</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 3</span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>Construction & Real estate</span>
                                </label>
                                <span data-collapse="#collapseid-3" data-collapse-status="close"
                                    class="dropdown-menu-icon material-icons rotate-180-on-open">arrow_drop_down</span>
                            </div>
                            <div id="collapseid-3" class="collapse ps-3 ms-3 box-gy-3">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 1</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 2</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 3</span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>Education</span>
                                </label>
                                <span data-collapse="#collapseid-4" data-collapse-status="close"
                                    class="dropdown-menu-icon material-icons rotate-180-on-open">arrow_drop_down</span>
                            </div>
                            <div id="collapseid-4" class="collapse ps-3 ms-3 box-gy-3">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 1</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 2</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 3</span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>Other</span>
                                </label>
                                <span data-collapse="#collapseid-5" data-collapse-status="close"
                                    class="dropdown-menu-icon material-icons rotate-180-on-open">arrow_drop_down</span>
                            </div>
                            <div id="collapseid-5" class="collapse ps-3 ms-3 box-gy-3">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 1</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 2</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 3</span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>Other</span>
                                </label>
                                <span data-collapse="#collapseid-6" data-collapse-status="close"
                                    class="dropdown-menu-icon material-icons rotate-180-on-open">arrow_drop_down</span>
                            </div>
                            <div id="collapseid-6" class="collapse ps-3 ms-3 box-gy-3">
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 1</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 2</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span class="font-weight-sm">Item 3</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popover-actions">
                    <button class="btn btn-primary btn-flat flex-1 close-popover">Save</button>
                </div>
            </div>
            <div class="col-divider"></div>
            <button data-trigger-popover="#popover-advance" class="btn btn-text p-0 no-hover">
                <span class="material-icons">saved_search</span>
                <span>Advance</span>
            </button>
            <div id="popover-advance" class="popover-dialog" id="popoverid-4">
                <div class="popover-content box-gy-3">
                    <div class="popover-header">
                        <div class="text-muted font-weight-sm">Advance Search</div>
                        <div>
                            <button class="btn btn-sm btn-text p-0 no-hover close-popover">
                                <span class="material-icons-outlined">close</span>
                            </button>
                        </div>
                    </div>
                    <div class="row-divider pb-1"></div>
                    <div class="popover-body">
                        <div class="box-gy-5">
                            <div class="form-group">
                                <label for="" class="form-label">Tender type</label>
                                <input type="text" class="form-control" placeholder="All">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Buyer name</label>
                                <input type="text" class="form-control" placeholder="Type name">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Supplier name</label>
                                <input type="text" class="form-control" placeholder="Type name">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">CPV Code</label>
                                <input type="text" class="form-control" placeholder="Type code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popover-actions">
                    <button class="btn btn-primary btn-flat flex-1 close-popover">Apply</button>
                </div>
            </div>
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
    <div class="card shadow-sm">
        <div class="card-body d-flex justify-content-between">
            <div class="card-filter-container">
                <button class=" btn btn-text btn-outlined-dark p-0 no-hover">
                    <span class="material-icons-outlined">filter_alt</span>
                    <span class="font-weight-sm">Filter</span>
                </button>
                <div class="col-divider"></div>
                <button class="btn btn-text p-0 no-hover" data-trigger-popover="#popover-location">
                    <span class="material-icons">arrow_drop_down</span>
                    <span class="font-weight-sm">Location</span>
                </button>
                <div id="popover-location" class="popover-dialog" id="popoverid-4">
                    <div class="popover-content box-gy-3">
                        <div class="popover-header">
                            <div class="text-muted font-weight-sm">All Location</div>
                            <div>
                                <button class="btn btn-sm btn-text p-0 no-hover close-popover">
                                    <span class="material-icons-outlined">close</span>
                                </button>
                            </div>
                        </div>
                        <div class="row-divider pb-1"></div>
                        <div class="popover-body">
                            <div class="box-gy-4">
                                <div class="d-flex align-items-center">
                                    <label class="form-checkbox-container">
                                        <input type="checkbox" class="form-checkbox">
                                        <div class="form-checkbox-indicator">
                                            <span class="material-icons-outlined">done</span>
                                        </div>
                                        <span>UK</span>
                                    </label>
                                    <span data-collapse="#collapse-location-1" data-collapse-status="open"
                                        class="dropdown-menu-icon material-icons rotate-180-on-open">arrow_drop_down</span>
                                </div>
                                <div id="collapse-location-1" class="collapse show ps-3 ms-3 box-gy-3">
                                    <label class="form-checkbox-container">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <div class="form-checkbox-indicator">
                                            <span class="material-icons-outlined">done</span>
                                        </div>
                                        <span class="font-weight-sm">Channel islands</span>
                                    </label>
                                    <label class="form-checkbox-container">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <div class="form-checkbox-indicator">
                                            <span class="material-icons-outlined">done</span>
                                        </div>
                                        <span class="font-weight-sm">East midlands</span>
                                    </label>
                                    <label class="form-checkbox-container">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <div class="form-checkbox-indicator">
                                            <span class="material-icons-outlined">done</span>
                                        </div>
                                        <span class="font-weight-sm">East of England</span>
                                    </label>
                                    <label class="form-checkbox-container">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <div class="form-checkbox-indicator">
                                            <span class="material-icons-outlined">done</span>
                                        </div>
                                        <span class="font-weight-sm">England</span>
                                    </label>
                                    <label class="form-checkbox-container">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <div class="form-checkbox-indicator">
                                            <span class="material-icons-outlined">done</span>
                                        </div>
                                        <span class="font-weight-sm">London</span>
                                    </label>
                                    <label class="form-checkbox-container">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <div class="form-checkbox-indicator">
                                            <span class="material-icons-outlined">done</span>
                                        </div>
                                        <span class="font-weight-sm">Nort East</span>
                                    </label>
                                    <label class="form-checkbox-container">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <div class="form-checkbox-indicator">
                                            <span class="material-icons-outlined">done</span>
                                        </div>
                                        <span class="font-weight-sm">North West</span>
                                    </label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label class="form-checkbox-container">
                                        <input type="checkbox" class="form-checkbox">
                                        <div class="form-checkbox-indicator">
                                            <span class="material-icons-outlined">done</span>
                                        </div>
                                        <span>Ireland</span>
                                    </label>
                                    <span data-collapse="#collapse-location-2" data-collapse-status="close"
                                        class="dropdown-menu-icon material-icons rotate-180-on-open">arrow_drop_down</span>
                                </div>
                                <div id="collapse-location-2" class="collapse ps-3 ms-3 box-gy-3">
                                    <label class="form-checkbox-container">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <div class="form-checkbox-indicator">
                                            <span class="material-icons-outlined">done</span>
                                        </div>
                                        <span class="font-weight-sm">Ireland</span>
                                    </label>
                                    <label class="form-checkbox-container">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <div class="form-checkbox-indicator">
                                            <span class="material-icons-outlined">done</span>
                                        </div>
                                        <span class="font-weight-sm">Other</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popover-actions">
                        <button class="btn btn-primary btn-flat flex-1 close-popover">Save</button>
                    </div>
                </div>
                <div class="col-divider"></div>
                <button class="btn btn-text p-0 no-hover" data-trigger-popover="#popover-publish">
                    <span class="material-icons">arrow_drop_down</span>
                    <span class="font-weight-sm">Published Duration</span>
                </button>
                <div id="popover-publish" class="popover-dialog" id="popoverid-4">
                    <div class="popover-content box-gy-3">
                        <div class="popover-header">
                            <div class="text-muted font-weight-sm">By Duration</div>
                            <div>
                                <button class="btn btn-sm btn-text p-0 no-hover close-popover">
                                    <span class="material-icons-outlined">close</span>
                                </button>
                            </div>
                        </div>
                        <div class="row-divider pb-1"></div>
                        <div class="popover-body">
                            <div class="box-gy-5">
                                <div class="form-group">
                                    <label for="" class="form-label">Tender type</label>
                                    <select class="form-control">
                                        <option value="6">Last 6 months</option>
                                        <option value="8">Last 8 months</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Published from</label>
                                    <span class="input-icon input-icon-sufix material-icons">date_range</span>
                                    <input class="form-control date-picker" value="04-11-2022" placeholder="Type name">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Published to</label>
                                    <span class="input-icon input-icon-sufix material-icons">date_range</span>
                                    <input type="text" class="form-control date-picker" value="04-12-2022"
                                        placeholder="Type name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popover-actions">
                        <button class="btn btn-primary btn-flat flex-1 close-popover">Apply</button>
                    </div>
                </div>
                <div class="col-divider"></div>
                <button class="btn btn-text p-0 no-hover" data-trigger-popover="#popover-price">
                    <span class="material-icons">arrow_drop_down</span>
                    <span class="font-weight-sm">Price</span>
                </button>
                <div id="popover-price" class="popover-dialog" id="popoverid-4">
                    <div class="popover-content box-gy-3">
                        <div class="popover-header">
                            <div class="text-muted font-weight-sm">By Duration</div>
                            <div>
                                <button class="btn btn-sm btn-text p-0 no-hover close-popover">
                                    <span class="material-icons-outlined">close</span>
                                </button>
                            </div>
                        </div>
                        <div class="row-divider pb-1"></div>
                        <div class="popover-body">
                            <div class="box-gy-5">
                                <div class="form-group">
                                    <label for="" class="form-label">Tender value range</label>
                                    <div class="form-group">
                                        <span class="input-icon input-icon-prefix font-md mb-7px text-no-wrap">From :
                                            <span class="text-dark">£</span></span>
                                        <input class="form-control date-picker ps-62px" value="0"
                                            placeholder="Type name">
                                    </div>
                                    <div class="form-group">
                                        <span class="input-icon input-icon-prefix font-md mb-7px text-no-wrap">To :
                                            <span class="text-dark">£</span></span>
                                        <input class="form-control date-picker ps-48px" value="0"
                                            placeholder="Type name">
                                    </div>
                                </div>
                                <div>
                                    <div class="form-range-group">
                                        <input type="range" min="0" max="100" value="0">
                                        <input type="range" min="0" max="100" value="100">
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>£0</div>
                                        <div> £1T</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="popover-actions">
                        <button class="btn btn-primary btn-flat flex-1 close-popover">Apply</button>
                    </div>
                </div>
                <div class="col-divider"></div>
                <div class="form-group" data-trigger-popover="#popover-search">
                    <span class="input-icon material-icons">search</span>
                    <input type="text" placeholder="Search by town"
                        class="form-control form-control-rounded form-control-sm">
                </div>
                <div id="popover-search" class="popover-dialog" id="popoverid-4">
                    <div class="popover-content box-gy-3">
                        <div class="popover-body">
                            <div class="box-gy-4">
                                <div class="text-muted font-weight-sm box-gy-2">
                                    <div class="d-flex align-items-center box-gx-2">
                                        <span class="icon-sm material-icons">search</span>
                                        <span>Sugestions</span>
                                    </div>
                                    <div class="d-flex align-items-center box-gx-2">
                                        <span class="icon-sm material-icons">search</span>
                                        <span>Sugestions</span>
                                    </div>
                                    <div class="d-flex align-items-center box-gx-2">
                                        <span class="icon-sm material-icons">search</span>
                                        <span>Sugestions</span>
                                    </div>
                                </div>
                                <div class="row-divider"></div>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>Channel islands</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>East midlands</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>East of England</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>Town name</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>London</span>
                                </label>
                                <label class="form-checkbox-container">
                                    <input type="checkbox" class="form-checkbox">
                                    <div class="form-checkbox-indicator">
                                        <span class="material-icons-outlined">done</span>
                                    </div>
                                    <span>Town name</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="popover-actions">
                        <button class="btn btn-primary btn-flat flex-1 close-popover">Apply</button>
                    </div>
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
                                <span class="font-lg text-dark">GB-Merseyside: RFCA (NW) Merseyside Cadet Hut
                                    Refurbishments</span>
                                <span class="font-weight-sm text-dark highlight-secondary-light">Possible bidding
                                    competitors</span>
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
                                <div class="box-gx-1 d-flex align-items-center"
                                    data-trigger-popover="#popover-assign-tender-1">
                                    <span class="text-muted icon-sm material-icons-outlined">person_add_alt_1</span>
                                    <span>Assign tender to</span>
                                </div>
                                <div id="popover-assign-tender-1" class="popover-dialog" id="popoverid-4">
                                    <div class="popover-content box-gy-3">
                                        <div class="popover-header">
                                            <div class="text-muted font-weight-sm">Assign tender to</div>
                                            <div>
                                                <button class="btn btn-sm btn-text p-0 no-hover close-popover">
                                                    <span class="material-icons-outlined">close</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row-divider pb-1"></div>
                                        <div class="popover-body">
                                            <div class="box-gy-5">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Select Team</label>
                                                    <select class="form-control">
                                                        <option value="6">Department Name</option>
                                                        <option value="6">Department Name 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popover-actions">
                                        <button class="btn btn-primary btn-flat flex-1 close-popover">Apply</button>
                                    </div>
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
                                <span class="font-lg text-dark">GB-Merseyside: RFCA (NW) Merseyside Cadet Hut
                                    Refurbishments</span>
                                <span class="font-weight-sm text-dark highlight-secondary-light">Possible bidding
                                    competitors</span>
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
                                <div class="box-gx-1 d-flex align-items-center"
                                    data-trigger-popover="#popover-assign-tender-2">
                                    <span class="text-secondary icon-sm material-icons-outlined">person_add_alt_1</span>
                                    <span>Assigned To :</span>
                                    <span class="text-secondary">TEAM NAME (Member Name)</span>
                                </div>
                                <div id="popover-assign-tender-2" class="popover-dialog" id="popoverid-4">
                                    <div class="popover-content box-gy-3">
                                        <div class="popover-header">
                                            <div class="text-muted font-weight-sm">Assign tender to</div>
                                            <div>
                                                <button class="btn btn-sm btn-text p-0 no-hover close-popover">
                                                    <span class="material-icons-outlined">close</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row-divider pb-1"></div>
                                        <div class="popover-body">
                                            <div class="box-gy-5">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Select Team</label>
                                                    <select class="form-control">
                                                        <option value="6">Department Name</option>
                                                        <option value="6">Department Name 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popover-actions">
                                        <button class="btn btn-primary btn-flat flex-1 close-popover">Apply</button>
                                    </div>
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
                                <span class="font-lg text-dark">GB-Merseyside: RFCA (NW) Merseyside Cadet Hut
                                    Refurbishments</span>
                                <span class="font-weight-sm text-dark highlight-secondary-light">Possible bidding
                                    competitors</span>
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
                                <div class="box-gx-1 d-flex align-items-center"
                                    data-trigger-popover="#popover-assign-tender-3">
                                    <span class="text-primary icon-sm material-icons-outlined">person_add_alt_1</span>
                                    <span>Assigned To</span>
                                    <span class="text-primary">TEAM NAME (Member Name)</span>
                                </div>
                                <div id="popover-assign-tender-3" class="popover-dialog" id="popoverid-4">
                                    <div class="popover-content box-gy-3">
                                        <div class="popover-header">
                                            <div class="text-muted font-weight-sm">Assign tender to</div>
                                            <div>
                                                <button class="btn btn-sm btn-text p-0 no-hover close-popover">
                                                    <span class="material-icons-outlined">close</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row-divider pb-1"></div>
                                        <div class="popover-body">
                                            <div class="box-gy-5">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Select Team</label>
                                                    <select class="form-control">
                                                        <option value="6">Department Name</option>
                                                        <option value="6">Department Name 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popover-actions">
                                        <button class="btn btn-primary btn-flat flex-1 close-popover">Apply</button>
                                    </div>
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
                                <span class="font-lg text-dark">GB-Merseyside: RFCA (NW) Merseyside Cadet Hut
                                    Refurbishments</span>
                                <span class="font-weight-sm text-dark highlight-secondary-light">Possible bidding
                                    competitors</span>
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
                                <div class="box-gx-1 d-flex align-items-center"
                                    data-trigger-popover="#popover-assign-tender-4">
                                    <span class="text-primary icon-sm material-icons-outlined">person_add_alt_1</span>
                                    <span>Assigned To</span>
                                    <span class="text-primary">TEAM NAME (Member Name)</span>
                                </div>
                                <div id="popover-assign-tender-4" class="popover-dialog" id="popoverid-4">
                                    <div class="popover-content box-gy-3">
                                        <div class="popover-header">
                                            <div class="text-muted font-weight-sm">Assign tender to</div>
                                            <div>
                                                <button class="btn btn-sm btn-text p-0 no-hover close-popover">
                                                    <span class="material-icons-outlined">close</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row-divider pb-1"></div>
                                        <div class="popover-body">
                                            <div class="box-gy-5">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Select Team</label>
                                                    <select class="form-control">
                                                        <option value="6">Department Name</option>
                                                        <option value="6">Department Name 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popover-actions">
                                        <button class="btn btn-primary btn-flat flex-1 close-popover">Apply</button>
                                    </div>
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