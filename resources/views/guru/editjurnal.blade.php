@include('guru.headerguru')
<div class="shadow-bottom"></div>
<!-- Horizontal menu content-->
<div class="navbar-container main-menu-content" data-menu="menu-container">
    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/home"
                data-bs-toggle=""><i data-feather="home"></i><span data-i18n="Dashboards">Dashboards</span></a>
        </li>
        <li class="nav-item" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/rekapabsensi"
                data-bs-toggle=""><i data-feather="bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Rekap
                    Absensi</span></a>
        </li>
        <li class="active" data-menu=""><a class="dropdown-item d-flex align-items-center" href="/jurnalguru"
                data-bs-toggle=""><i data-feather="file-text"></i><span data-i18n="Charts &amp; Maps">Jurnal</span></a>
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
                        <h2 class="content-header-title float-start mb-0">Edit Data Jurnal</h2>
                    </center>
                </div>

            </div>
        </div>
        <div class="content-body">
            <!-- Card Advance -->

            <div class="row match-height">
                <!-- Payment Card -->
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card card-payment">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Jurnal</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ url('/jurnalguru', $jurnal->id) }}" class="form"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label" for="judul_jurnal">Judul</label>
                                            <input type="text" id="judul_jurnal" class="form-control"
                                                placeholder="Masukkan Judul Jurnal" name="judul_jurnal"
                                                value="{{ $jurnal->judul_jurnal }}" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label" for="deskripsi">Deskripsi</label>
                                            <input type="text" id="deskripsi" class="form-control"
                                                placeholder="Masukkan Deskripsi" name="deskripsi"
                                                value="{{ $jurnal->deskripsi }}" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label" for="nama_guru">Nama Guru (yang
                                                mengupload)</label>
                                            <input type="text" id="nama_guru" class="form-control"
                                                placeholder="Nama Guru" name="nama_guru"
                                                value="{{ $jurnal->nama_guru }}" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label" for="file_jurnal">File Jurnal</label>
                                            <input type="hidden" name="oldfile_jurnal"
                                                value="{{ $jurnal->file_jurnal }}">
                                            <label class="form-label">: {{ $jurnal->file_jurnal }}</label>
                                            <input type="file" id="file_jurnal" class="form-control"
                                                placeholder="Upload File Jurnal" name="file_jurnal"
                                                value="{{ $jurnal->file_jurnal }}" />
                                        </div>
                                    </div>
                                    <div class="d-grid col-12">
                                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/ Payment Card -->
            </div>

            <!--/ Card Advance -->

        </div>
    </div>
</div>
<!-- END: Content-->

@include('guru.footerguru')
