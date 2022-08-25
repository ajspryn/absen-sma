@include('guru.headerguru')
<div class="shadow-bottom"></div>
<!-- Horizontal menu content-->
<div class="navbar-container main-menu-content" data-menu="menu-container">
    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/home"
                data-bs-toggle=""><i data-feather="home"></i><span data-i18n="Dashboards">Dashboards</span></a>
        </li>
        <li class="active" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/rekapabsensi"
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
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header col-md-9 col-12 mb-2">

                <div class="col-12">
                    <center>
                        <h2 class="content-header-title float-start mb-0">Rekap Absensi Siswa</h2>
                    </center>
                </div>

            </div>
        </div>
        <div class="content-body">
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>
                                            <center>No</center>
                                        </th>
                                        <th>
                                            <center>NIS</center>
                                        </th>
                                        <th>
                                            <center>NISN</center>
                                        </th>
                                        <th>
                                            <center>Nama Siswa</center>
                                        </th>
                                        <th>
                                            <center>L/P</center>
                                        </th>
                                        <th>
                                            <center>P1</center>
                                        </th>
                                        <th>
                                            <center>P2</center>
                                        </th>
                                        <th>
                                            <center>P3</center>
                                        </th>
                                        <th>
                                            <center>P4</center>
                                        </th>
                                        <th>
                                            <center>P5</center>
                                        </th>
                                        <th>
                                            <center>P6</center>
                                        </th>
                                        <th>
                                            <center>P7</center>
                                        </th>
                                        <th>
                                            <center>P8</center>
                                        </th>
                                        <th>
                                            <center>P9</center>
                                        </th>
                                        <th>
                                            <center>P10</center>
                                        </th>
                                        <th>
                                            <center>P11</center>
                                        </th>
                                        <th>
                                            <center>P12</center>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Modal to add new record -->
                <div class="modal modal-slide-in fade" id="modals-slide-in">
                    <div class="modal-dialog sidebar-sm">
                        <form class="add-new-record modal-content pt-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <div class="mb-1">
                                    <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                    <input type="text" class="form-control dt-full-name"
                                        id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="basic-icon-default-post">Post</label>
                                    <input type="text" id="basic-icon-default-post" class="form-control dt-post"
                                        placeholder="Web Developer" aria-label="Web Developer" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="basic-icon-default-email">Email</label>
                                    <input type="text" id="basic-icon-default-email" class="form-control dt-email"
                                        placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                                    <small class="form-text"> You can use letters, numbers & periods </small>
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                    <input type="text" class="form-control dt-date" id="basic-icon-default-date"
                                        placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                    <input type="text" id="basic-icon-default-salary" class="form-control dt-salary"
                                        placeholder="$12000" aria-label="$12000" />
                                </div>
                                <button type="button" class="btn btn-primary data-submit me-1">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!--/ Basic table -->
            {{-- <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>No</center>
                                        </th>
                                        <th>
                                            <center>NIS</center>
                                        </th>
                                        <th>
                                            <center>NISN</center>
                                        </th>
                                        <th>
                                            <center>Nama Siswa</center>
                                        </th>
                                        <th>
                                            <center>L/P</center>
                                        </th>
                                        <th>
                                            <center>P1</center>
                                        </th>
                                        <th>
                                            <center>P2</center>
                                        </th>
                                        <th>
                                            <center>P3</center>
                                        </th>
                                        <th>
                                            <center>P4</center>
                                        </th>
                                        <th>
                                            <center>P5</center>
                                        </th>
                                        <th>
                                            <center>P6</center>
                                        </th>
                                        <th>
                                            <center>P7</center>
                                        </th>
                                        <th>
                                            <center>P8</center>
                                        </th>
                                        <th>
                                            <center>P9</center>
                                        </th>
                                        <th>
                                            <center>P10</center>
                                        </th>
                                        <th>
                                            <center>P11</center>
                                        </th>
                                        <th>
                                            <center>P12</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>123</td>
                                        <td>1234</td>
                                        <td>Budi</td>
                                        <td>L</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>+</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end --> --}}

        </div>
    </div>
</div>
<!-- END: Content-->

@include('guru.footerguru')
