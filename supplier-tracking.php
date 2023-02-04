<?php include_once './includes/header.php'; ?>

<div class="content-header">
    <div class="content-header-title">Search for Supplier</div>
    <div>100+ Buyer available</div>
</div>
<div class="content-body box-gy-3">
    <div class="card">
        <div class="card-body">
            <div class="row gy-3">
                <div class="col card-filter-container">
                    <button class="btn btn-text p-0 no-hover">
                        <span class="material-icons">arrow_drop_down</span>
                        <span>Contains</span>
                    </button>
                    <div class="col-divider"></div>
                    <div class="form-group form-group-type-text flex-1">
                        <span class="input-icon input-icon-prefix material-icons">search</span>
                        <input type="text" placeholder="Supplier name | address"
                            class="form-control form-control-rounded form-control-sm">
                    </div>
                </div>
                <div class="col-auto card-filter-container">
                    <span>In:</span>
                    <div class="col-divider"></div>
                    <button data-trigger-popover="#popover-categories" class="btn btn-text p-0 no-hover">
                        <span class="material-icons">format_list_bulleted</span>
                        <span>Categories</span>
                    </button>
                    <div id="popover-categories" class="popover-dialog"
                        style="display: block; top: 187px; left: 1430.08px; height: 404px;">
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
                                        <span data-collapse="#collapseid-1" data-collapse-status="close"
                                            class="dropdown-menu-icon material-icons rotate-180-on-open">arrow_drop_down</span>
                                    </div>
                                    <div id="collapseid-1" class="collapse ps-3 ms-3 box-gy-3" style="display: none;">
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span class="font-weight-sm">Agricultural, forestry, horticultural,
                                                aquacultural and
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
                                            <input type="checkbox" class="form-checkbox" checked="">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span class="font-weight-sm">Item 1</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span class="font-weight-sm">Item 2</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
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
                                            <span>Construction &amp; Real estate</span>
                                        </label>
                                        <span data-collapse="#collapseid-3" data-collapse-status="close"
                                            class="dropdown-menu-icon material-icons rotate-180-on-open">arrow_drop_down</span>
                                    </div>
                                    <div id="collapseid-3" class="collapse ps-3 ms-3 box-gy-3">
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span class="font-weight-sm">Item 1</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span class="font-weight-sm">Item 2</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
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
                                            <input type="checkbox" class="form-checkbox" checked="">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span class="font-weight-sm">Item 1</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span class="font-weight-sm">Item 2</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
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
                                            <input type="checkbox" class="form-checkbox" checked="">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span class="font-weight-sm">Item 1</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span class="font-weight-sm">Item 2</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
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
                                            <input type="checkbox" class="form-checkbox" checked="">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span class="font-weight-sm">Item 1</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
                                            <div class="form-checkbox-indicator">
                                                <span class="material-icons-outlined">done</span>
                                            </div>
                                            <span class="font-weight-sm">Item 2</span>
                                        </label>
                                        <label class="form-checkbox-container">
                                            <input type="checkbox" class="form-checkbox" checked="">
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
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row gy-3">
                <div class="col-24 col-md">
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
                        <div id="popover-location" class="popover-dialog">
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
                                                <input type="checkbox" class="form-checkbox" checked="">
                                                <div class="form-checkbox-indicator">
                                                    <span class="material-icons-outlined">done</span>
                                                </div>
                                                <span class="font-weight-sm">Channel islands</span>
                                            </label>
                                            <label class="form-checkbox-container">
                                                <input type="checkbox" class="form-checkbox" checked="">
                                                <div class="form-checkbox-indicator">
                                                    <span class="material-icons-outlined">done</span>
                                                </div>
                                                <span class="font-weight-sm">East midlands</span>
                                            </label>
                                            <label class="form-checkbox-container">
                                                <input type="checkbox" class="form-checkbox" checked="">
                                                <div class="form-checkbox-indicator">
                                                    <span class="material-icons-outlined">done</span>
                                                </div>
                                                <span class="font-weight-sm">East of England</span>
                                            </label>
                                            <label class="form-checkbox-container">
                                                <input type="checkbox" class="form-checkbox" checked="">
                                                <div class="form-checkbox-indicator">
                                                    <span class="material-icons-outlined">done</span>
                                                </div>
                                                <span class="font-weight-sm">England</span>
                                            </label>
                                            <label class="form-checkbox-container">
                                                <input type="checkbox" class="form-checkbox" checked="">
                                                <div class="form-checkbox-indicator">
                                                    <span class="material-icons-outlined">done</span>
                                                </div>
                                                <span class="font-weight-sm">London</span>
                                            </label>
                                            <label class="form-checkbox-container">
                                                <input type="checkbox" class="form-checkbox" checked="">
                                                <div class="form-checkbox-indicator">
                                                    <span class="material-icons-outlined">done</span>
                                                </div>
                                                <span class="font-weight-sm">Nort East</span>
                                            </label>
                                            <label class="form-checkbox-container">
                                                <input type="checkbox" class="form-checkbox" checked="">
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
                                                <input type="checkbox" class="form-checkbox" checked="">
                                                <div class="form-checkbox-indicator">
                                                    <span class="material-icons-outlined">done</span>
                                                </div>
                                                <span class="font-weight-sm">Ireland</span>
                                            </label>
                                            <label class="form-checkbox-container">
                                                <input type="checkbox" class="form-checkbox" checked="">
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
                                            <input class="form-control date-picker" value="04-11-2022"
                                                placeholder="Type name">
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
                                                <span
                                                    class="input-icon input-icon-prefix font-md mb-7px text-no-wrap">From
                                                    :
                                                    <span class="text-dark">£</span></span>
                                                <input class="form-control date-picker ps-62px" value="0"
                                                    placeholder="Type name">
                                            </div>
                                            <div class="form-group">
                                                <span
                                                    class="input-icon input-icon-prefix font-md mb-7px text-no-wrap">To
                                                    :
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
                </div>
                <div class="col-auto">
                    <div class="card-filter-container">
                        <button class="btn btn-text p-0 no-hover">
                            <span class="material-icons-outlined">sort</span>
                            <span class="font-weight-sm">Sort by</span>
                        </button>
                        <div class="col-divider"></div>
                        <button class="btn btn-text btn-outlined-dark p-0 no-hover">
                            <span class="material-icons">arrow_drop_down</span>
                            <span>Buyer name</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row gy-4 justify-content-between">
                <div class="col-auto card-filter-container">
                    <div>
                        <span class="text-muted font-weight-sm">Search result:</span>
                        <span class="text-dark">100 Buyers</span>
                    </div>
                </div>
                <div class="col-auto card-filter-container">
                    <div class="font-weight-sm">Suitable for SME</div>
                    <label class="input-switch">
                        <input type="checkbox">
                        <span class="input-switch-indicator"></span>
                    </label>
                    <div class="col-divider"></div>
                    <button class=" btn btn-text p-0 no-hover">
                        <span class="font-weight-sm">Order by</span>
                    </button>
                    <div class="col-divider"></div>
                    <button class="btn btn-text btn-outlined-dark p-0 no-hover sort-btn sort-status-asc">
                        <div class="sort-icon-group">
                            <span class="material-icons-outlined sort-icon">keyboard_arrow_up</span>
                            <span class="material-icons-outlined sort-icon">keyboard_arrow_down</span>
                        </div>
                        <span>Ascending</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body no-border card-body-sm pt-0">
            <div class="data-card-group">
                <div class="data-card box-gy-6">
                    <div class="row gx-0">
                        <div class="col box-gy-3">
                            <div class="d-flex flex-wrap align-items-center box-gx-2">
                                <span class="font-lg text-dark">Apuc Limited On Behalf Of Borders College</span>
                                <span class="font-weight-sm text-dark highlight-primary-light">Supplier
                                    comparison</span>
                            </div>
                            <div class="d-flex flex-wrap align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">schedule</span>
                                    <span class="text-muted font-weight-sm text-nowrap">Last published :</span>
                                    <span>02/11/2022</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm text-nowrap">Tender :</span>
                                    <span>BTA167 Event management centre</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="box-gy-2">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">Total awarded tenders :</span>
                                    <span>50</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center justify-content-end">
                                    <span class="text-muted font-weight-sm">Total awarded price:</span>
                                    <span>63B</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">How frequently :</span>
                                    <span>Once in a month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-flex box-gx-4">
                            <button class="btn btn-rounded btn-outlined-primary">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="row-divider my-2"></div>
                <div class="data-card box-gy-6">
                    <div class="row gx-0">
                        <div class="col box-gy-3">
                            <div class="d-flex flex-wrap align-items-center box-gx-2">
                                <span class="font-lg text-dark">Apuc Limited On Behalf Of Borders College</span>
                                <span class="font-weight-sm text-dark highlight-primary-light">Supplier
                                    comparison</span>
                            </div>
                            <div class="d-flex flex-wrap align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">schedule</span>
                                    <span class="text-muted font-weight-sm text-nowrap">Last published :</span>
                                    <span>02/11/2022</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm text-nowrap">Tender :</span>
                                    <span>BTA167 Event management centre</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="box-gy-2">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">Total awarded tenders :</span>
                                    <span>11</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center justify-content-end">
                                    <span class="text-muted font-weight-sm">Total awarded price:</span>
                                    <span>163B</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">How frequently :</span>
                                    <span>Every Week</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-flex box-gx-4">
                            <button class="btn btn-rounded">Following</button>
                        </div>
                    </div>
                </div>
                <div class="row-divider my-2"></div>
                <div class="data-card box-gy-6">
                    <div class="row gx-0 gy-3">
                        <div class="col box-gy-3">
                            <div class="d-flex flex-wrap align-items-center box-gx-2">
                                <span class="font-lg text-dark">Apuc Limited On Behalf Of Borders College</span>
                                <span class="font-weight-sm text-dark highlight-primary-light">Supplier
                                    comparison</span>
                            </div>
                            <div class="d-flex flex-wrap align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">schedule</span>
                                    <span class="text-muted font-weight-sm text-nowrap">Last published :</span>
                                    <span>02/11/2022</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm text-nowrap">Tender :</span>
                                    <span>BTA167 Event management centre</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="box-gy-2">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">Total awarded tenders :</span>
                                    <span>50</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center justify-content-end">
                                    <span class="text-muted font-weight-sm">Total awarded price:</span>
                                    <span>63B</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">How frequently :</span>
                                    <span>Once in a month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-flex box-gx-4">
                            <button class="btn btn-rounded btn-outlined-primary">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="row-divider my-2"></div>
                <div class="data-card box-gy-6">
                    <div class="row gx-0 gy-3">
                        <div class="col box-gy-3">
                            <div class="d-flex flex-wrap align-items-center box-gx-2">
                                <span class="font-lg text-dark">Apuc Limited On Behalf Of Borders College</span>
                                <span class="font-weight-sm text-dark highlight-primary-light">Supplier
                                    comparison</span>
                            </div>
                            <div class="d-flex flex-wrap align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted icon-sm material-icons-outlined">schedule</span>
                                    <span class="text-muted font-weight-sm text-nowrap">Last published :</span>
                                    <span>02/11/2022</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm text-nowrap">Tender :</span>
                                    <span>BTA167 Event management centre</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="box-gy-2">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">Total awarded tenders :</span>
                                    <span>50</span>
                                </div>
                                <div class="box-gx-1 d-flex align-items-center justify-content-end">
                                    <span class="text-muted font-weight-sm">Total awarded price:</span>
                                    <span>63B</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex align-items-center box-gx-3">
                                <div class="box-gx-1 d-flex align-items-center">
                                    <span class="text-muted font-weight-sm">How frequently :</span>
                                    <span>Once in a month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-flex box-gx-4">
                            <button class="btn btn-rounded btn-outlined-primary">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="row-divider my-2"></div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row gy-3 justify-content-between align-items-center">
                <div class="col-auto d-flex align-items-center box-gx-2">
                    <span class="font-weight-sm">Showing Entities</span>
                    <select class="form-control form-control-xs">
                        <option value=" 10" selected>10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="font-weight-sm">Page 1 of 5</span>
                </div>
                <div class="col-auto d-flex box-gx-2">
                    <button class="btn btn-outlined btn-sm btn-square" disabled>
                        <span class="material-icons-outlined">chevron_left</span>
                    </button>
                    <button class="btn btn-outlined-secondary btn-sm btn-square">1</button>
                    <button class="btn btn-outlined btn-sm btn-square">2</button>
                    <button class="btn btn-outlined btn-sm btn-square">3</button>
                    <button class="btn btn-outlined btn-sm btn-square">4</button>
                    <button class="btn btn-outlined btn-sm btn-square">5</button>
                    <button class="btn btn-outlined-secondary btn-sm btn-square">
                        <span class="material-icons-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php'; ?>