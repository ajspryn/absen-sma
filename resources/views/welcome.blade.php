@include('welcomeheader')
                <div class="shadow-bottom"></div>
                <!-- Horizontal menu content-->
                <div class="navbar-container main-menu-content" data-menu="menu-container">
                    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                        <li class="active" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/" data-bs-toggle=""><i data-feather="home"></i><span data-i18n="Dashboards">Dashboards</span></a>
                        </li>
                        <li class="nav-item" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/welcome2" data-bs-toggle=""><i data-feather="bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Point's Siswa</span></a>
                        </li>
                        <li class="nav-item" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/welcome3" data-bs-toggle=""><i data-feather="file-text"></i><span data-i18n="Pages">Jurnal guru</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Main Menu-->

            <!-- BEGIN: Content-->
            <div class="app-content content ">
                <div class="content-overlay"></div>
                <div class="header-navbar-shadow"></div>
                <div class="content-wrapper container-xxl p-0">
                    <div class="content-header row"></div>
                    <div class="content-body">
                        <!-- Dashboard Ecommerce Starts -->
                        <section id="dashboard-ecommerce">

                            <div class="row match-height">
                                <div class="col-lg-4 col-12">
                                    <div class="row match-height">

                                        <!-- Earnings Card -->
                                        <div class="col-lg-12 col-md-6 col-12">
                                            <div class="card earnings-card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <h4 class="card-title mb-1">Peringkat point's siswa</h4>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Nama</th>
                                                                        <th>kelas</th>
                                                                        <th>Point's</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Ahmad</td>
                                                                        <td>XII MIPA 3</td>
                                                                        <td>125 pts</td>

                                                                    <tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ Earnings Card -->
                                        <!-- Earnings Card -->
                                        <div class="col-lg-12 col-md-6 col-12">
                                            <div class="card card-statistics">
                                                <div class="card-header">
                                                    <h4 class="card-title">Statistik kehadiran siswa</h4>
                                                    <div class="d-flex align-items-center">
                                                        <p class="card-text font-small-2 me-25 mb-0">Jumlah siswa orang</p>
                                                    </div>
                                                </div>
                                                <div class="card-body statistics-body">
                                                    <div class="row">
                                                        <div class="col-sm-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                                            <div class="d-flex flex-row">
                                                                <div class="avatar bg-light-primary me-2">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="user" class="avatar-icon"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h4 class="fw-bolder mb-0">300</h4>
                                                                    <p class="card-text font-small-3 mb-0">Hadir</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                                            <div class="d-flex flex-row">
                                                                <div class="avatar bg-light-info me-2">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="user" class="avatar-icon"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h4 class="fw-bolder mb-0">10</h4>
                                                                    <p class="card-text font-small-3 mb-0">Sakit</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div class="col-sm-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                                            <div class="d-flex flex-row">
                                                                <div class="avatar bg-light-warning me-2">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="user" class="avatar-icon"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h4 class="fw-bolder mb-0">5</h4>
                                                                    <p class="card-text font-small-3 mb-0">Izin</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-sm-6 col-12">
                                                            <div class="d-flex flex-row">
                                                                <div class="avatar bg-light-danger me-2">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="user" class="avatar-icon"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h4 class="fw-bolder mb-0">2</h4>
                                                                    <p class="card-text font-small-3 mb-0">Alfa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ Earnings Card -->
                                        <!-- Earnings Card -->
                                        <div class="col-lg-12 col-md-6 col-12">
                                            <div class="card card-statistics">
                                                <div class="card-header">
                                                    <h4 class="card-title">Statistik kehadiran guru</h4>
                                                    <div class="d-flex align-items-center">
                                                        <p class="card-text font-small-2 me-25 mb-0">Jumlah guru orang</p>
                                                    </div>
                                                </div>
                                                <div class="card-body statistics-body">
                                                    <div class="row">
                                                        <div class="col-sm-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                                            <div class="d-flex flex-row">
                                                                <div class="avatar bg-light-primary me-2">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="user" class="avatar-icon"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h4 class="fw-bolder mb-0">300</h4>
                                                                    <p class="card-text font-small-3 mb-0">Hadir</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                                            <div class="d-flex flex-row">
                                                                <div class="avatar bg-light-info me-2">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="user" class="avatar-icon"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h4 class="fw-bolder mb-0">10</h4>
                                                                    <p class="card-text font-small-3 mb-0">Sakit</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div class="col-sm-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                                            <div class="d-flex flex-row">
                                                                <div class="avatar bg-light-warning me-2">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="user" class="avatar-icon"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h4 class="fw-bolder mb-0">5</h4>
                                                                    <p class="card-text font-small-3 mb-0">Izin</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-sm-6 col-12">
                                                            <div class="d-flex flex-row">
                                                                <div class="avatar bg-light-danger me-2">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="user" class="avatar-icon"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h4 class="fw-bolder mb-0">2</h4>
                                                                    <p class="card-text font-small-3 mb-0">Alfa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ Earnings Card -->

                                    </div>
                                </div>

                                <!-- Revenue Report Card -->
                                <div class="col-lg-8 col-12">
                                    <div class="card card-revenue-budget">
                                        <div class="row mx-0">
                                            <div class="col-md-8 col-12 revenue-report-wrapper">
                                                <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                                    <h4 class="card-title mb-50 mb-sm-0">Jadwal mata pelajaran</h4>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                                                            <span>Earning</span>
                                                        </div>
                                                        <div class="d-flex align-items-center ms-75">
                                                            <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                                                            <span>Expense</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="revenue-report-chart"></div>
                                            </div>
                                            <div class="col-md-4 col-12 budget-wrapper">
                                                <div class="btn-group">
                                                    <button
                                                        type="button"
                                                        class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        2020
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">2020</a>
                                                        <a class="dropdown-item" href="#">2019</a>
                                                        <a class="dropdown-item" href="#">2018</a>
                                                    </div>
                                                </div>
                                                <h2 class="mb-25">$25,852</h2>
                                                <div class="d-flex justify-content-center">
                                                    <span class="fw-bolder me-25">Budget:</span>
                                                    <span>56,800</span>
                                                </div>
                                                <div id="budget-chart"></div>
                                                <button type="button" class="btn btn-primary">Increase Budget</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Revenue Report Card -->
                            </div>
                        </section>
                        <!-- Dashboard Ecommerce ends -->
                    </div>
                </div>
            </div>
            <!-- END: Content-->

@include('welcomefooter')
