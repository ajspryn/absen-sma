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
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header col-md-9 col-12 mb-2">

                <div class="col-12">
                    <center>
                        <h2 class="content-header-title float-start mb-0">Sesi Absensi Siswa</h2>
                    </center>
                </div>

            </div>
        </div>
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <center> NISN</center>
                                        </th>
                                        <th>
                                            <center>NIS</center>
                                        </th>
                                        <th>
                                            <center>NAMA</center>
                                        </th>
                                        <th>
                                            <span class="badge rounded-pill badge-light-primary me-1">Masuk</span>

                                        </th>
                                        <th>
                                            <span class="badge rounded-pill badge-light-warning me-1">Sakit</span>

                                        </th>
                                        <th>
                                            <span class="badge rounded-pill badge-light-info me-1">Izin</span>

                                        </th>
                                        <th>
                                            <span class="badge rounded-pill badge-light-danger me-1">Alfa</span>

                                        </th>
                                        <th>
                                            <center>ACTION POINT</center>
                                        </th>
                                        <th>
                                            <center>KETERANGAN</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>123456789012</td>
                                        <td>1234567890</td>
                                        <td>Budi Sudarso</td>
                                        <td>
                                            <center>
                                                <div class="form-check form-check-primary">
                                                    <input type="checkbox" class="form-check-input" id="colorCheck1" />
                                                    <label class="form-check-label" for="colorCheck1"></label>
                                                </div>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <div class="form-check form-check-warning">
                                                    <input type="checkbox" class="form-check-input" id="colorCheck1" />
                                                    <label class="form-check-label" for="colorCheck1"></label>
                                                </div>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <div class="form-check form-check-info">
                                                    <input type="checkbox" class="form-check-input" id="colorCheck1" />
                                                    <label class="form-check-label" for="colorCheck1"></label>
                                                </div>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <div class="form-check form-check-danger">
                                                    <input type="checkbox" class="form-check-input" id="colorCheck1" />
                                                    <label class="form-check-label" for="colorCheck1"></label>
                                                </div>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <div class="d-flex inline">
                                                    <button class="badge bg-primary decrement-btn"
                                                        onclick="">-</button>
                                                    <input type="text" name="poin"
                                                        class="form-control point text-center" value="1"
                                                        style="width:50px;">
                                                    <button class="badge bg-primary increment-btn"
                                                        onclick="">+</button>
                                                </div>
                                            </center>
                                        </td>
                                        <td></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->

        </div>
    </div>
</div>
<!-- END: Content-->
<script>
    $(document).ready(function() {
        $('.increment-btn').click(function(e) {
            e.preventDefault();

            var inc_value = $('.point').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value++;
                $('.point').val(value);
            }
        });

        $('.decrement-btn').click(function(e) {
            e.preventDefault();

            var dec_value = $('.point').val();
            var value = parseInt(dec_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                $('.point').val(value);
            }
        });
    });
</script>

@include('guru.footerguru')
