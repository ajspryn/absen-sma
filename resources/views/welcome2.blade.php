@include('welcomeheader')
                <div class="shadow-bottom"></div>
                <!-- Horizontal menu content-->
                <div class="navbar-container main-menu-content" data-menu="menu-container">
                    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                        <li class="nav-item" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/" data-bs-toggle=""><i data-feather="home"></i><span data-i18n="Dashboards">Dashboards</span></a>
                        </li>
                        <li class="active" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/welcome2" data-bs-toggle=""><i data-feather="bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Point's Siswa</span></a>
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
                                                        <h4 class="card-title mb-1">Cari point's saya</h4>
                                                        <div class="input-group">
                                                            <input
                                                              type="text"
                                                              class="form-control"
                                                              placeholder="Masukan NISN anda"
                                                              aria-describedby="button-addon2"
                                                            />
                                                            <button class="btn btn-outline-primary" id="button-addon2" type="button">Cari</button>
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
                                                    <h4 class="card-title">Kelompokan hasil</h4>
                                                </div>
                                                <div class="card-body">
                                                    <!-- Basic Select -->
                                                    <div class="mb-1">
                                                        <label class="form-label" for="basicSelect">Jenjang kelas</label>
                                                        <select class="form-select" id="basicSelect">
                                                            <option>None</option>
                                                            <option>X</option>
                                                            <option>XI</option>
                                                            <option>XII</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label class="form-label" for="basicSelect">Jurusan</label>
                                                        <select class="form-select" id="basicSelect">
                                                            <option>None</option>
                                                            <option>MIPA</option>
                                                            <option>IIS</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label class="form-label" for="basicSelect">Kelas</label>
                                                        <select class="form-select" id="basicSelect">
                                                            <option>None</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
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
