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
                        <button type="button" class="btn btn-outline-primary">
                            <a href="/home"><i data-feather="home" class="me-25"></i>
                                Home</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Horizontal form layout section start -->
            <!-- FORM  -->
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Siswa</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-horizontal" method="POST"
                                    action="/tambahsiswa/{{ $siswa->id }} ">
                                    @method('put')
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="nis_siswa">NIS</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="number" id="nis_siswa" class="form-control"
                                                        name="nis_siswa" placeholder="Masukan Nomer NIS"
                                                        value="{{ $siswa->nis_siswa }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="nisn_siswa">NISN</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="number" id="nisn_siswa" class="form-control"
                                                        name="nisn_siswa" placeholder="Masukan Nisn"
                                                        value="{{ $siswa->nisn_siswa }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="nama_siswa">Nama</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="nama_siswa" class="form-control"
                                                        name="nama_siswa" placeholder="Masukan nama"
                                                        value="{{ $siswa->nama_siswa }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="jenis_kelamin">Jenis
                                                        Kelamin</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="jenis_kelamin" class="form-control"
                                                        name="jenis_kelamin" placeholder="Masukan Jenis Kelamin"
                                                        value="{{ $siswa->jenis_kelamin }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="jurusan_siswa">Jurusan</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="jurusan_siswa" class="form-control"
                                                        name="jurusan_siswa" placeholder="Masukan Jurusan"
                                                        value="{{ $siswa->jurusan_siswa }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="tingkatan_kelas">Tingkatan
                                                        Kelas</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="tingkatan_kelas" class="form-control"
                                                        name="tingkatan_kelas" placeholder="Masukan kelas"
                                                        value="{{ $siswa->tingkatan_kelas }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="kelas_siswa">Kelas</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="kelas_siswa" class="form-control"
                                                        name="kelas_siswa" placeholder="Masukan kelas"
                                                        value="{{ $siswa->kelas_siswa }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="sumbit" class="btn btn-primary me-1">Update</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /FORM  -->

                    <!-- Basic Horizontal form layout section end -->


                </div>
        </div>
    </div>
    <!-- END: Content-->



    @include('admin.footeradmin')
