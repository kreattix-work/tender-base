<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined&family=Material+Icons"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/plugins/bootstrap/bootstrap-grid.css" />
    <link rel="stylesheet" href="/assets/plugins/datepicker/bootstrap-datepicker3.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/scss/styles.css">
</head>

<body>

    <div class="page-layout">

        <header class="page-header">
            <div class="page-header-item page-header-main align-items-center">
                <div class="open-sidebar-container">
                    <button class="btn btn-square btn-outlined me-3">
                        <span class="material-icons-outlined">menu</span>
                    </button>
                </div>
                <a href="#" class="page-header-logo">
                    <img src="../assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="page-header-item page-header-content">
                <div class="page-header-content-item">
                    <div class="profile-container">
                        <div class="avatar">JM</div>
                        <div class="profile-name">Jewel Majumder</div>
                        <div class="profile-id">Customer ID : 263248</div>
                    </div>
                </div>
                <div class="page-header-content-item">
                    <div class="page-header-actions">
                        <button class="btn btn-rounded">
                            <span class="material-icons-outlined">email</span>
                            <span>Create</span>
                        </button>
                        <button class="btn btn-rounded btn-text">
                            <span class="material-icons-outlined">notifications</span>
                            <div class="badge badge-floating badge-secondary">9+</div>
                        </button>
                        <button class="btn btn-rounded">
                            <span class="material-icons-outlined">logout</span>
                            <span>Log out</span>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <aside class="page-sider">
            <div class="page-sider-content">
                <div class="close-sidebar-container">
                    <button class="btn btn-rounded btn-square">
                        <span class="material-icons-outlined">close</span>
                    </button>
                </div>
                <ul class="sider-menu">
                    <li class="sider-menu-item">
                        <a href="#" class="sider-menu-item-link">
                            <span class="material-icons">dashboard</span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sider-menu-item submenu-open">
                        <a href="#" class="sider-menu-item-link">
                            <span class="material-icons">assignment</span>
                            <span>Manage tender</span>
                            <span class="dropdown-menu-icon material-icons">arrow_drop_down</span>
                        </a>
                        <ul class="sider-submenu">
                            <li class="sider-submenu-item active">
                                <a href="#" class="sider-submenu-item-link">
                                    <span class="material-icons">trending_flat</span>
                                    <span>Search tender</span>
                                </a>
                            </li>
                            <li class="sider-submenu-item">
                                <a href="#" class="sider-submenu-item-link">
                                    <span class="material-icons">trending_flat</span>
                                    <span>My matching tender</span>
                                </a>
                            </li>
                            <li class="sider-submenu-item">
                                <a href="#" class="sider-submenu-item-link">
                                    <span class="material-icons">trending_flat</span>
                                    <span>Saved tenders</span>
                                    <span class="dropdown-menu-icon material-icons">arrow_drop_down</span>
                                </a>
                            </li>
                            <li class="sider-submenu-item">
                                <a href="#" class="sider-submenu-item-link">
                                    <span class="material-icons">trending_flat</span>
                                    <span>Tender assigned to team</span>
                                </a>
                            </li>
                            <li class="sider-submenu-item">
                                <a href="#" class="sider-submenu-item-link">
                                    <span class="material-icons">trending_flat</span>
                                    <span>Team saved tender</span>
                                </a>
                            </li>
                            <li class="sider-submenu-item">
                                <a href="#" class="sider-submenu-item-link">
                                    <span class="material-icons">trending_flat</span>
                                    <span>Tender Notice</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sider-menu-item">
                        <a href="#" class="sider-menu-item-link">
                            <span class="ci ci-chart-pie-slice"></span>
                            <span>Buyer Behaviour Analysis</span>
                        </a>
                    </li>
                    <li class="sider-menu-item">
                        <a href="#" class="sider-menu-item-link">
                            <span class="ci ci-chart-line-up"></span>
                            <span>Supplier Tracking</span>
                        </a>
                    </li>
                    <li class="sider-menu-item">
                        <a href="#" class="sider-menu-item-link">
                            <span class="ci ci-analysis-chart"></span>
                            <span>Category Tracking</span>
                        </a>
                    </li>
                    <li class="sider-menu-item">
                        <a href="#" class="sider-menu-item-link">
                            <span class="material-icons-outlined">local_library</span>
                            <span>Tender Training</span>
                        </a>
                    </li>
                    <li class="sider-menu-item">
                        <a href="#" class="sider-menu-item-link">
                            <span class="material-icons-outlined">groups</span>
                            <span>Manage Team</span>
                        </a>
                    </li>
                    <li class="sider-menu-item">
                        <a href="#" class="sider-menu-item-link">
                            <span class="material-icons-outlined">person</span>
                            <span>Manage Account</span>
                            <span class="dropdown-menu-icon material-icons">arrow_drop_down</span>
                        </a>
                    </li>
                    <li class="sider-menu-item">
                        <a href="#" class="sider-menu-item-link">
                            <span class="ci ci-24-hours-support"></span>
                            <span>Support</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="page-content">