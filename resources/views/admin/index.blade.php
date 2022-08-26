@include('admin.headeradmin')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Menu Admin</h2>
                        <div class="breadcrumb-wrapper">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- CARD MENU ADMIN -->
            <section id="knowledge-base-content">
                <div class="row kb-search-content-info match-height">
                    <!-- PENGATURAAN SEKOLAH -->
                    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="/pengaturanmapel">
                                <img src="../../../app-assets/images/illustration/sales.svg" class="card-img-top"
                                    alt="knowledge-base-image" />

                                <div class="card-body text-center">
                                    <h4>Pengaturan Matapelajaran</h4>
                                    <p class="text-body mt-1 mb-0">
                                        Mengatur dan Menambahkan Mata Pelajaran
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="/pengaturanguru">
                                <img src="../../../app-assets/images/illustration/sales.svg" class="card-img-top"
                                    alt="knowledge-base-image" />

                                <div class="card-body text-center">
                                    <h4>Pengaturan Guru</h4>
                                    <p class="text-body mt-1 mb-0">
                                        Update dan Ganti Password
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="/pengaturanjadwal">
                                <img src="../../../app-assets/images/illustration/sales.svg" class="card-img-top"
                                    alt="knowledge-base-image" />

                                <div class="card-body text-center">
                                    <h4>Pengaturan Jadwal</h4>
                                    <p class="text-body mt-1 mb-0">
                                        Menentukan Jadwal Guru
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row kb-search-content-info match-height">
                    <!-- sales card -->
                    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="/tambahsiswa">
                                <img src="../../../app-assets/images/illustration/sales.svg" class="card-img-top"
                                    alt="knowledge-base-image" />

                                <div class="card-body text-center">
                                    <h4>Tambah Siswa</h4>
                                    <p class="text-body mt-1 mb-0">
                                        Menambahkan data siswa baru
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- marketing -->
                    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="/pengaturansiswa">
                                <img src="../../../app-assets/images/illustration/marketing.svg" class="card-img-top"
                                    alt="knowledge-base-image" />
                                <div class="card-body text-center">
                                    <h4>Pengaturan Siswa</h4>
                                    <p class="text-body mt-1 mb-0">
                                        Naik Kelas & Tinggal Kelas
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- api -->
                    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="/gurupiket">
                                <img src="../../../app-assets/images/illustration/api.svg" class="card-img-top"
                                    alt="knowledge-base-image" />
                                <div class="card-body text-center">
                                    <h4>Pengaturan Piket Guru</h4>
                                    <p class="text-body mt-1 mb-0">Tentukan Jadwal Piket Guru</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- no result -->
                    <div class="col-12 text-center no-result no-items">
                        <h4 class="mt-4">Search result not found!!</h4>
                    </div>
                </div>
            </section>
            <!-- Knowledge base ends -->

        </div>
    </div>
</div>
<!-- END: Content-->

@include('admin.footeradmin')
