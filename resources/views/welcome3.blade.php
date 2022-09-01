@include('welcomeheader')
<div class="shadow-bottom"></div>
<!-- Horizontal menu content-->
<div class="navbar-container main-menu-content" data-menu="menu-container">
    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/"
                data-bs-toggle=""><i data-feather="home"></i><span data-i18n="Dashboards">Dashboards</span></a>
        </li>
        <li class="nav-item" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/welcome2"
                data-bs-toggle=""><i data-feather="bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Point's
                    Siswa</span></a>
        </li>
        <li class="active" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/welcome3"
                data-bs-toggle=""><i data-feather="file-text"></i><span data-i18n="Pages">Jurnal guru</span></a>
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
                                                <input type="text" class="form-control"
                                                    placeholder="Isi untuk mencari jurnal"
                                                    aria-describedby="button-addon2" />
                                                <button class="btn btn-outline-primary" id="button-addon2"
                                                    type="button">Cari</button>
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
                                                                <th>
                                                                    <center>No</center>
                                                                </th>
                                                                <th>
                                                                    <center>Judul</center>
                                                                </th>
                                                                <th>
                                                                    <center>Deskripsi</center>
                                                                </th>
                                                                <th>
                                                                    <center>Nama guru</center>
                                                                </th>
                                                                <th>
                                                                    <center>File Jurnal</center>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $no = 1;
                                                            @endphp
                                                            @if (!empty($jurnals))

                                                                @foreach ($jurnals as $jurnal)
                                                                    <tr>
                                                                        <td>
                                                                            <center>{{ $no++ }}</center>
                                                                        </td>
                                                                        <td>
                                                                            <center>{{ $jurnal->judul_jurnal }}
                                                                            </center>
                                                                        </td>
                                                                        <td>
                                                                            <center>{{ $jurnal->deskripsi }}</center>
                                                                        </td>
                                                                        <td>
                                                                            <center>{{ $jurnal->nama_guru }}</center>
                                                                        </td>
                                                                        <td>
                                                                            <center>
                                                                                <a href="{{ asset('storage/' . $jurnal->file_jurnal) }}"
                                                                                    target="blank"
                                                                                    class="btn btn-icon btn-success border-0"><span
                                                                                        data-feather="eye"></span></a>
                                                                            </center>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endif
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
