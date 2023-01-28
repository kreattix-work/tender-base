<?php include_once './includes/header.php'; ?>

<div class="content-header">
    <div class="content-header-title">Tender Alert Settings</div>
    <div>
        <button class="btn btn-outlined-primary btn-rounded">
            <span>Save Changes</span>
        </button>
    </div>
</div>
<div class="content-body pb-0 font-lg font-weight-sm">We will find tenders and notify you based on selected locations.
    You can change location any time.</div>
<div class="content-body">
    <div class="card">
        <div class="card-body">
            <div class="font-xxl font-weight-sm text-dark">Email Notifications</div>
            <div class="show box-gy-3 py-4">
                <div class="d-flex align-items-center">
                    <label class="form-checkbox-container">
                        <input type="checkbox" class="form-checkbox" checked>
                        <div class="form-checkbox-indicator">
                            <span class="material-icons-outlined">done</span>
                        </div>
                        <span class="font-lg">New and Awarded Tender notification emails</span>
                    </label>
                </div>
            </div>
            <div class="box-gy-3">
                <div class="d-flex align-items-center box-gx-2">
                    <div class="text-muted font-weight-sm">You will get email notification DAILY at <span
                            class="text-dark">10:00 AM ,
                            3:00 PM</span>
                    </div>
                    <button class="btn btn-square btn-sm">
                        <span class="text-muted icon-xs material-symbols-outlined">border_color</span>
                    </button>
                </div>
                <div class="card bg-default no-shadow">
                    <div class="card-body card-body-sm">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="row g-2 chip-row-colored">
                                    <div class="col-auto no-wrap">
                                        <div class="chip">UK (ALL)</div>
                                    </div>
                                    <div class="col-auto no-wrap">
                                        <div class="chip chip-secondary">
                                            <span>Ireland</span>
                                            <span class="chip-icon material-icons-outlined">close</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-outlined-primary btn-lg bg-white">Add Email</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-muted font-weight-sm">Add unlimited members of your team to receive tender email
                    notifications.</div>
            </div>
            <div class="row-divider mt-6"></div>
            <div class="font-xxl font-weight-sm text-dark py-4">Buyer/Competitors email notification settings</div>
            <div class="box-gy-3">
                <label class="form-checkbox-container">
                    <input type="checkbox" class="form-checkbox" checked>
                    <div class="form-checkbox-indicator">
                        <span class="material-icons-outlined">done</span>
                    </div>
                    <span class="font-lg">Buyer tender publish notifications</span>
                </label>
                <label class="form-checkbox-container">
                    <input type="checkbox" class="form-checkbox" checked>
                    <div class="form-checkbox-indicator">
                        <span class="material-icons-outlined">done</span>
                    </div>
                    <span class="font-lg">Competitors tender awarded notifications</span>
                </label>
            </div>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php'; ?>