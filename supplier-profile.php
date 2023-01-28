<?php include_once './includes/header.php'; ?>

<div class="content-body bg-white">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center box-gx-3">
            <img src="/assets/images/icons/child_friendly.svg" alt="">
            <div>Apuc Limited On Behalf Of Borders College</div>
        </div>
        <div>
            <button class="btn btn-text btn-rounded">
                <span class="material-icons-outlined">add_alert</span>
            </button>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-between mt-3">
        <div class="d-flex justify-content-between box-gx-8">
            <div class="box-gy-1">
                <div class="font-sm text-muted">Located</div>
                <div>USA</div>
            </div>
            <div class="box-gy-1">
                <div class="font-sm text-muted">Type</div>
                <div>Public sector</div>
            </div>
            <div class="box-gy-1">
                <div class="font-sm text-muted">Contact</div>
                <div>Email/number</div>
            </div>
        </div>
        <div>
            <button class="btn btn-rounded">
                <span>Follow Supplier</span>
            </button>
        </div>
    </div>
    <div class="row mt-6">
        <div class="col-23">
            <div class="row gx-60">
                <div class="col">
                    <div class="box-gy-1">
                        <div class="font-title-lg text-dark">169B</div>
                        <div class="text-muted">Total Awarded Value</div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="col-divider-full"></div>
                </div>
                <div class="col">
                    <div class="box-gy-1">
                        <div class="font-title-lg text-dark">56B</div>
                        <div class="text-muted">Avg Awarded Value</div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="col-divider-full"></div>
                </div>
                <div class="col">
                    <div class="box-gy-1">
                        <div class="font-title-lg text-dark">169K</div>
                        <div class="text-muted">Min Awarded Tenders Value </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="col-divider-full"></div>
                </div>
                <div class="col">
                    <div class="box-gy-1">
                        <div class="font-title-lg text-dark">169B</div>
                        <div class="text-muted">Min Awarded Tenders Value </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui-tabs mt-6 pt-5">
        <div class="ui-tabs-header d-flex align-items-center justify-content-between">
            <ul class="ui-tabs-action">
                <li class="ui-tabs-action-item"><a href="#tabs-1">Summary</a></li>
                <li class="ui-tabs-action-item"><a href="#tabs-2">Awarded Tenders</a></li>
                <li class="ui-tabs-action-item"><a href="#tabs-3">Buyer details</a></li>
                <li class="ui-tabs-action-item"><a href="#tabs-4">Region details</a></li>
                <li class="ui-tabs-action-item"><a href="#tabs-5">CPV’s lists</a></li>
            </ul>
            <div class="ui-tabs-buttons">
                <button class="text-primary btn btn-text">
                    <span class="material-icons">arrow_drop_down</span>
                    <span>Historicl awards</span>
                </button>
                <div class="col-divider"></div>
                <button class="btn btn-text">
                    <span>From the past Duration</span>
                    <span class="material-icons">arrow_drop_down</span>
                    <span class="text-primary">1 Year</span>
                </button>
            </div>
        </div>
        <div id="tabs-1">
            <div class="row">
                <div class="col py-4">
                    <div class="card no-shadow border-placeholder">
                        <div class="card-body box-gy-4">
                            <div class="font-lg font-weight-sm text-dark">Total VS Supplier awarded tenders</div>
                            <div class="row-divider"></div>
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto d-flex box-gx-6 align-items-center">
                                    <div class="font-weight-sm ">Buyer Worked With :</div>
                                    <div class="border-placeholder text-dark px-3 py-1 radius-1">1</div>
                                </div>
                                <div class="col-auto d-flex box-gx-6 align-items-center">
                                    <div class="font-weight-sm ">Total Awarded Tender :</div>
                                    <div class="border-primary text-primary px-3 py-1 radius-1">3</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pt-5 pb-4">
                                <div class="w-50">
                                    <canvas id="myDoughnutChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col py-4">
                    <div class="card no-shadow border-placeholder">
                        <div class="card-body box-gy-4">
                            <div class="font-lg font-weight-sm text-dark">Awarded Tenders Overtime</div>
                            <div class="row-divider"></div>
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto d-flex box-gx-6 align-items-center">
                                    <div class="font-weight-sm ">Total Awarded Tender :</div>
                                    <div class="border-primary text-primary px-3 py-1 radius-1">3</div>
                                </div>
                                <div class="col-auto d-flex box-gx-6 align-items-center">
                                    <div class="font-weight-sm ">Awarded Tender in NOV</div>
                                    <div class="border-placeholder text-dark px-3 py-1 radius-1">1</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pt-5 pb-4">
                                <div class="w-100">
                                    <canvas id="myBarChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tabs-2">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="w-40">Tender Title</th>
                            <th>Total Value</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Buyer Name</th>
                            <th>Contact start date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-dark">
                                Award Of Borders College - Mini-Competition Cloud Services Framework Sp-18-027
                            </td>
                            <td>185K</td>
                            <td>08/03/2021</td>
                            <td>N/A</td>
                            <td class="text-secondary">Apuc Limited</td>
                            <td>08/03/2021</td>
                        </tr>
                        <tr>
                            <td class="text-dark">
                                Award Of Borders College - Mini-Competition Cloud Services Framework Sp-18-027
                            </td>
                            <td>185K</td>
                            <td>08/03/2021</td>
                            <td>N/A</td>
                            <td class="text-secondary">Apuc Limited</td>
                            <td>08/03/2021</td>
                        </tr>
                        <tr>
                            <td class="text-dark">
                                Award Of Borders College - Mini-Competition Cloud Services Framework Sp-18-027
                            </td>
                            <td>185K</td>
                            <td>08/03/2021</td>
                            <td>N/A</td>
                            <td class="text-secondary">Apuc Limited</td>
                            <td>08/03/2021</td>
                        </tr>
                        <tr>
                            <td class="text-dark">
                                Award Of Borders College - Mini-Competition Cloud Services Framework Sp-18-027
                            </td>
                            <td>185K</td>
                            <td>08/03/2021</td>
                            <td>N/A</td>
                            <td class="text-secondary">Apuc Limited</td>
                            <td>08/03/2021</td>
                        </tr>
                        <tr>
                            <td class="text-dark">
                                Award Of Borders College - Mini-Competition Cloud Services Framework Sp-18-027
                            </td>
                            <td>185K</td>
                            <td>08/03/2021</td>
                            <td>N/A</td>
                            <td class="text-secondary">Apuc Limited</td>
                            <td>08/03/2021</td>
                        </tr>
                        <tr>
                            <td class="text-dark">
                                Award Of Borders College - Mini-Competition Cloud Services Framework Sp-18-027
                            </td>
                            <td>185K</td>
                            <td>08/03/2021</td>
                            <td>N/A</td>
                            <td class="text-secondary">Apuc Limited</td>
                            <td>08/03/2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-5">
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
                    <button class="btn btn-outlined btn-sm btn-square">4</button>
                    <button class="btn btn-outlined btn-sm btn-square">5</button>
                    <button class="btn btn-outlined-secondary btn-sm btn-square">
                        <span class="material-icons-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
        <div id="tabs-3">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="w-40">Buyer name</th>
                            <th>Region</th>
                            <th>Total Value</th>
                            <th>Total Awarded Tenders</th>
                            <th>Top Supplier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-dark">Apuc Limited</td>
                            <td>Scotland</td>
                            <td>169B</td>
                            <td>3</td>
                            <td>Vwr International Ltd</td>
                        </tr>
                        <tr>
                            <td class="text-dark">Apuc Limited</td>
                            <td>Scotland</td>
                            <td>169B</td>
                            <td>3</td>
                            <td>Vwr International Ltd</td>
                        </tr>
                        <tr>
                            <td class="text-dark">Apuc Limited</td>
                            <td>Scotland</td>
                            <td>169B</td>
                            <td>3</td>
                            <td>Vwr International Ltd</td>
                        </tr>
                        <tr>
                            <td class="text-dark">Apuc Limited</td>
                            <td>Scotland</td>
                            <td>169B</td>
                            <td>3</td>
                            <td>Vwr International Ltd</td>
                        </tr>
                        <tr>
                            <td class="text-dark">Apuc Limited</td>
                            <td>Scotland</td>
                            <td>169B</td>
                            <td>3</td>
                            <td>Vwr International Ltd</td>
                        </tr>
                        <tr>
                            <td class="text-dark">Apuc Limited</td>
                            <td>Scotland</td>
                            <td>169B</td>
                            <td>3</td>
                            <td>Vwr International Ltd</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-5">
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
                    <button class="btn btn-outlined btn-sm btn-square">4</button>
                    <button class="btn btn-outlined btn-sm btn-square">5</button>
                    <button class="btn btn-outlined-secondary btn-sm btn-square">
                        <span class="material-icons-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
        <div id="tabs-4">
            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula
                accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent
                taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu
                urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem
                enim, pretium nec, feugiat nec, luctus a, lacus.</p>
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla
                facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti.
                Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio.
                Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat
                porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas
                commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
        </div>
        <div id="tabs-5">
            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula
                accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent
                taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu
                urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem
                enim, pretium nec, feugiat nec, luctus a, lacus.</p>
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla
                facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti.
                Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio.
                Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat
                porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas
                commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
        </div>
    </div>
</div>


<?php include_once './includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
//DoughnutChart 
const doughnutChart = document.getElementById('myDoughnutChart');

new Chart(doughnutChart, {
    type: 'doughnut',
    data: {
        labels: ['Awarded', 'Total'],
        datasets: [{
            backgroundColor: [
                '#E5F1F0',
                '#83BFB8'
            ],
            data: [25, 75],
            borderWidth: 0,
            cutout: '12%'
        }]
    },
    options: {
        scales: {
            y: {
                display: false
            },
            x: {
                display: false
            }
        }
    }
});

//BarChart   
const barChart = document.getElementById('myBarChart');

new Chart(barChart, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            data: [0, 0, 0, 0, 0, 0, 0.6, 1.5, 0, 0, 2.6, 0],
            borderWidth: 1,
            borderRadius: 50,
            backgroundColor: ["#CDEBE8", "#CDEBE8", "#CDEBE8", "#CDEBE8", "#CDEBE8", "#CDEBE8",
                "#CDEBE8", "#CDEBE8", "#CDEBE8", "#CDEBE8", "#83BFB8", "#83BFB8"
            ]
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true,
            },
            x: {
                display: true,
                grid: {
                    display: false
                }
            }
        }
    }
});
</script>