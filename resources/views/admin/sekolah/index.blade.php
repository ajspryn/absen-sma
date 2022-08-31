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
            <section id="basic-horizontal-layouts">

                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pengaturan Sekolah</h4>
                        </div>
                        <div class="card-body">
                            <!-- Basic Horizontal form layout section start -->
                            <!-- FORM  -->
                            <span class="fw-bold">DAFTAR JURUSAN</span>
                            <div class="modal-size-xl d-inline-block">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#xlarge1"><i data-feather="plus" class="me-25"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade text-start" id="xlarge1" tabindex="-1"
                                    aria-labelledby="myModalLabel16" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel16">
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form form-horizontal" action="/jurusan" method="post">
                                                    @csrf
                                                    <div data-repeater-list="invoice">
                                                        <div data-repeater-item>
                                                            <div class="row d-flex align-items-end">
                                                                <div class="col-12">
                                                                    <div class="mb-1 row">
                                                                        <div class="col-sm-3">
                                                                            <label class="col-form-label"
                                                                                for="jurusan">Jurusan</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" id="jurusan"
                                                                                class="form-control" name="jurusan"
                                                                                placeholder="Masukan Jurusan" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-2 col-12 mb-50">
                                                                        <button type="sumbit"
                                                                            class="btn btn-success me-1">Simpan</button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <div class="table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Jurusan</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jurusans as $jurusan)
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">{{ $jurusan->jurusan }}</span>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <form action="/jurusan/{{ $jurusan->id }}" method="post"
                                                                class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button
                                                                    class="dropdown-item btn-flat-danger"><span>Hapus</span></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </div>
                            </table>
                            <br>
                            <!-- FORM  -->
                            <span class="fw-bold">DAFTAR TINGKATAN KELAS</span>
                            <div class="modal-size-xl d-inline-block">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#xlarge2"><i data-feather="plus" class="me-25"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade text-start" id="xlarge2" tabindex="-1"
                                    aria-labelledby="myModalLabel16" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel16">
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form form-horizontal" action="/tingkatankelas"
                                                    method="post">
                                                    @csrf
                                                    <div data-repeater-list="invoice">
                                                        <div data-repeater-item>
                                                            <div class="row d-flex align-items-end">
                                                                <div class="col-12">
                                                                    <div class="mb-1 row">
                                                                        <div class="col-sm-3">
                                                                            <label class="col-form-label"
                                                                                for="tingkatan_kelas">Tingkatan
                                                                                Kelas</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" id="tingkatan_kelas"
                                                                                class="form-control"
                                                                                name="tingkatan_kelas"
                                                                                placeholder="Masukan Tingkatan Kelas" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-2 col-12 mb-50">
                                                                        <button type="sumbit"
                                                                            class="btn btn-success me-1">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <div class="table-responsive">
                                    <thead>

                                        <tr>
                                            <th>Tingkatan Kelas</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tingkatan_kelass as $tingkatan_kelas)
                                            <tr>
                                                <td>

                                                    <span
                                                        class="fw-bold">{{ $tingkatan_kelas->tingkatan_kelas }}</span>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <form action="/tingkatankelas/{{ $tingkatan_kelas->id }}"
                                                                method="post" class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button
                                                                    class="dropdown-item btn-flat-danger"><span>Hapus</span></button>
                                                            </form>'
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                            <span class="fw-bold">DAFTAR KELAS</span>
                            <div class="modal-size-xl d-inline-block">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#xlarge3"><i data-feather="plus" class="me-25"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade text-start" id="xlarge3" tabindex="-1"
                                    aria-labelledby="myModalLabel16" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel16">
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form form-horizontal" action="/kelas" method="post">
                                                    @csrf
                                                    <div data-repeater-list="invoice">
                                                        <div data-repeater-item>
                                                            <div class="row d-flex align-items-end">

                                                                <div class="col-12">
                                                                    <div class="mb-1 row">
                                                                        <div class="col-sm-3">
                                                                            <label class="col-form-label"
                                                                                for="kelas">Kelas</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" id="kelas"
                                                                                class="form-control" name="kelas"
                                                                                placeholder="Masukan Kelas" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-2 col-12 mb-50">
                                                                        <button type="sumbit"
                                                                            class="btn btn-success me-1">Simpan</button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <div class="table-responsive">
                                    <thead>

                                        <tr>
                                            <th>Kelas</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelass as $kelas)
                                            <tr>
                                                <td>

                                                    <span class="fw-bold">{{ $kelas->kelas }}</span>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <form action="/kelas/{{ $kelas->id }}" method="post"
                                                                class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button
                                                                    class="dropdown-item btn-flat-danger"><span>Hapus</span></button>
                                                            </form>'
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>

                    </div>
                </div>
        </div>
    </div>
    <!-- Striped rows end -->

    <!-- Basic Horizontal form layout section end -->


</div>
</div>
</div>
<!-- END: Content-->



@include('admin.footeradmin')
