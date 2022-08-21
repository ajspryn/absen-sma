@include('welcomeheader')
                <div class="shadow-bottom"></div>
                <!-- Horizontal menu content-->
                <div class="navbar-container main-menu-content" data-menu="menu-container">
                    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                        <li class="nav-item" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/" data-bs-toggle=""><i data-feather="home"></i><span data-i18n="Dashboards">Dashboards</span></a>
                        </li>
                        <li class="nav-item" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/welcome2" data-bs-toggle=""><i data-feather="bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Point's Siswa</span></a>
                        </li>
                        <li class="active" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/welcome3" data-bs-toggle=""><i data-feather="file-text"></i><span data-i18n="Pages">Jurnal guru</span></a>
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
                                                        <h4 class="card-title mb-1">Cari jurnal</h4>
                                                        <div class="input-group">
                                                            <input
                                                              type="text"
                                                              class="form-control"
                                                              placeholder="Isi untuk mencari jurnal"
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


                                    </div>
                                </div>

                                <!-- Revenue Report Card -->
                                <div class="col-lg-8 col-12">
                                    <div class="card card-revenue-budget">
                                        <div class="row mx-0">
                                            <div class="card-body">
                                                <!-- Bordered table start -->
                                                <div class="row" id="table-bordered">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">Kumpulan jurnal guru</h4>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Judul</th>
                                                                            <th>Penulis</th>
                                                                            <th>Publikasi</th>
                                                                            <th>Bidang mapel</th>
                                                                            <th>Actions</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <img
                                                                                    src="../../../app-assets/images/icons/angular.svg"
                                                                                    class="me-75"
                                                                                    height="20"
                                                                                    width="20"
                                                                                    alt="Angular"
                                                                                />
                                                                                <span class="fw-bold">Angular Project</span>
                                                                            </td>
                                                                            <td>Peter Charls</td>
                                                                            <td>
                                                                                <div class="avatar-group">
                                                                                    <div
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-popup="tooltip-custom"
                                                                                        data-bs-placement="top"
                                                                                        class="avatar pull-up my-0"
                                                                                        title="Lilian Nenez"
                                                                                    >
                                                                                        <img
                                                                                            src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                                                                            alt="Avatar"
                                                                                            height="26"
                                                                                            width="26"
                                                                                        />
                                                                                    </div>
                                                                                    <div
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-popup="tooltip-custom"
                                                                                        data-bs-placement="top"
                                                                                        class="avatar pull-up my-0"
                                                                                        title="Alberto Glotzbach"
                                                                                        >
                                                                                        <img
                                                                                            src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                                                                                            alt="Avatar"
                                                                                            height="26"
                                                                                            width="26"
                                                                                        />
                                                                                    </div>
                                                                                    <div
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-popup="tooltip-custom"
                                                                                        data-bs-placement="top"
                                                                                        class="avatar pull-up my-0"
                                                                                        title="Alberto Glotzbach"
                                                                                    >
                                                                                        <img
                                                                                            src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                                                            alt="Avatar"
                                                                                            height="26"
                                                                                            width="26"
                                                                                        />
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                                                        <i data-feather="more-vertical"></i>
                                                                                    </button>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="#">
                                                                                        <i data-feather="edit-2" class="me-50"></i>
                                                                                        <span>Edit</span>
                                                                                    </a>
                                                                                    <a class="dropdown-item" href="#">
                                                                                        <i data-feather="trash" class="me-50"></i>
                                                                                        <span>Delete</span>
                                                                                    </a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Bordered table end -->
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
