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
        <div class="card-body card-filter-container">
            <button class="btn btn-text p-0 no-hover">
                <span class="material-icons-outlined">filter_alt</span>
                <span>Filter</span>
            </button>
            <div class="col-divider"></div>
            <button class="btn btn-text p-0 no-hover">
                <span class="material-icons">arrow_drop_down</span>
                <span>Location</span>
            </button>
            <div class="col-divider"></div>
            <button class="btn btn-text p-0 no-hover">
                <span class="material-icons">arrow_drop_down</span>
                <span>Published Duration</span>
            </button>
            <div class="col-divider"></div>
            <button class="btn btn-text p-0 no-hover">
                <span class="material-icons">arrow_drop_down</span>
                <span>Price</span>
            </button>
            <div class="col-divider"></div>
            <div class="form-group">
                <span class="input-icon input-icon material-icons">search</span>
                <input type="text" placeholder="Search by town" class="form-control form-control-sm">
            </div>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php'; ?>