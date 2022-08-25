@include('guru.headerguru')
<div class="shadow-bottom"></div>
<!-- Horizontal menu content-->
<div class="navbar-container main-menu-content" data-menu="menu-container">
    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="active" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/home"
                data-bs-toggle=""><i data-feather="home"></i><span data-i18n="Dashboards">Dashboards</span></a>
        </li>
        <li class="nav-item" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/rekapabsensi"
                data-bs-toggle=""><i data-feather="bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Rekap
                    Absensi</span></a>
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
                    <div class="col-12">
                        <div class="row match-height">

                            <!-- Greetings Card starts -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="card card-congratulations">
                                    <div class="card-body text-center">
                                        <img src="../../../app-assets/images/elements/decore-left.png"
                                            class="congratulations-img-left" alt="card-img-left" />
                                        <img src="../../../app-assets/images/elements/decore-right.png"
                                            class="congratulations-img-right" alt="card-img-right" />
                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i data-feather="award" class="font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-1 text-white">Congratulations John,</h1>
                                            <p class="card-text m-auto w-75">
                                                You have done <strong>57.6%</strong> more sales today. Check your
                                                new
                                                badge in your profile.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Greetings Card ends -->
                            <!-- Greetings Card starts -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="card card-congratulations">
                                    <div class="card-body text-center">
                                        {{-- <img src="../../../app-assets/images/elements/decore-left.png"
                                            class="congratulations-img-left" alt="card-img-left" />
                                        <img src="../../../app-assets/images/elements/decore-right.png"
                                            class="congratulations-img-right" alt="card-img-right" />
                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i data-feather="award" class="font-large-1"></i>
                                            </div>
                                        </div> --}}
                                        <div class="text-start">
                                            <!-- Basic Select -->
                                            <div class="mb-1">
                                                <p class="form-label" for="basicSelect" style="color:white">Mata
                                                    Pelajaran</p>
                                                <select class="form-select" id="basicSelect">
                                                    <option>Matematika</option>
                                                    <option>IPA</option>
                                                    <option>B. Indonesia</option>
                                                </select>
                                            </div>
                                            <div class="mb-1">
                                                <p class="form-label" for="basicSelect" style="color:white">Kelas</p>
                                                <select class="form-select" id="basicSelect">
                                                    <option>X MIPA 1</option>
                                                    <option>XI MIPA 2</option>
                                                    <option>XII MIPA 3</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-12">
                                                <a href="/sesiabsensi" type="button" class="btn btn-warning">Mulai
                                                    Absensi</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Greetings Card ends -->
                            <!-- Greetings Card starts -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="card card-congratulations">
                                    <div class="card-body text-center">
                                        <div class="text-start">
                                            <h3 class="mb-1 text-white">Kelas X MIPA 1 - MATEMATIKA</h3>
                                        </div>
                                        <br>
                                        <p class="card-text m-auto w-75">
                                            Jumlah Siswa
                                        </p>
                                        <br>
                                        <h1 class="mb-1 text-white">33</h1>
                                    </div>
                                </div>
                            </div>
                            <!-- Greetings Card ends -->
                            <!-- Dashboard Ecommerce Starts -->

                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-5/images/illustration/email.svg"
                                        alt="Meeting Pic" height="170" />
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="meetup-header d-flex align-items-center">
                                                <div class="meetup-day">
                                                    <h6 class="mb-0">THU</h6>
                                                    <h3 class="mb-0">24</h3>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="card-title mb-25">MATEMATIKA</h4>
                                                    <p class="card-text mb-0">X MIPA 1</p>
                                                </div>
                                            </div>
                                            <div class="mt-0">
                                                <div class="avatar float-start bg-light-primary rounded me-1">
                                                    <div class="avatar-content">
                                                        <i data-feather="calendar"
                                                            class="avatar-icon font-medium-3"></i>
                                                    </div>
                                                </div>
                                                <div class="more-info">
                                                    <h6 class="mb-0">Sat, May 25, 2020</h6>
                                                    <small>10:AM to 6:PM</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="meetup-header d-flex align-items-center">
                                                <div class="meetup-day">
                                                    <h6 class="mb-0">THU</h6>
                                                    <h3 class="mb-0">24</h3>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="card-title mb-25">BIOLOGI</h4>
                                                    <p class="card-text mb-0">X MIPA 1</p>
                                                </div>
                                            </div>
                                            <div class="mt-0">
                                                <div class="avatar float-start bg-light-primary rounded me-1">
                                                    <div class="avatar-content">
                                                        <i data-feather="calendar"
                                                            class="avatar-icon font-medium-3"></i>
                                                    </div>
                                                </div>
                                                <div class="more-info">
                                                    <h6 class="mb-0">Sat, May 25, 2020</h6>
                                                    <small>10:AM to 6:PM</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="meetup-header d-flex align-items-center">
                                                <div class="meetup-day">
                                                    <h6 class="mb-0">THU</h6>
                                                    <h3 class="mb-0">24</h3>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="card-title mb-25">KIMIA</h4>
                                                    <p class="card-text mb-0">X MIPA 1</p>
                                                </div>
                                            </div>
                                            <div class="mt-0">
                                                <div class="avatar float-start bg-light-primary rounded me-1">
                                                    <div class="avatar-content">
                                                        <i data-feather="calendar"
                                                            class="avatar-icon font-medium-3"></i>
                                                    </div>
                                                </div>
                                                <div class="more-info">
                                                    <h6 class="mb-0">Sat, May 25, 2020</h6>
                                                    <small>10:AM to 6:PM</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="meetup-header d-flex align-items-center">
                                                <div class="meetup-day">
                                                    <h6 class="mb-0">THU</h6>
                                                    <h3 class="mb-0">24</h3>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="card-title mb-25">GEOGRAFI</h4>
                                                    <p class="card-text mb-0">X MIPA 1</p>
                                                </div>
                                            </div>
                                            <div class="mt-0">
                                                <div class="avatar float-start bg-light-primary rounded me-1">
                                                    <div class="avatar-content">
                                                        <i data-feather="calendar"
                                                            class="avatar-icon font-medium-3"></i>
                                                    </div>
                                                </div>
                                                <div class="more-info">
                                                    <h6 class="mb-0">Sat, May 25, 2020</h6>
                                                    <small>10:AM to 6:PM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <!-- Revenue Report Card -->
                    <div class="col-lg-8 col-12">
                        <div class="card card-revenue-budget">
                            <div class="row mx-0">
                                <div class="col-md-8 col-12 revenue-report-wrapper">
                                    <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title mb-50 mb-sm-0">Jadwal mata pelajaran</h4>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center me-2">
                                                <span
                                                    class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                                                <span>Earning</span>
                                            </div>
                                            <div class="d-flex align-items-center ms-75">
                                                <span
                                                    class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                                                <span>Expense</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="revenue-report-chart"></div>
                                </div>
                                <div class="col-md-4 col-12 budget-wrapper">
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <!--/ Revenue Report Card --> --}}
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->
        </div>
    </div>
</div>
<!-- END: Content-->


@include('guru.footerguru')
