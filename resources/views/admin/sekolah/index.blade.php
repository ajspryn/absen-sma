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




            <!-- Browser States Card -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card card-browser-states">
                    <div class="card-header">
                        <div>
                            <h4 class="card-title">Browser States</h4>
                            <p class="card-text font-small-2">Counter August 2020</p>
                        </div>
                        <div class="dropdown chart-dropdown">
                            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"
                                data-bs-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Last 28 Days</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="browser-states">
                            <div class="d-flex">
                                <img src="../../../app-assets/images/icons/google-chrome.png" class="rounded me-1"
                                    height="30" alt="Google Chrome" />
                                <h6 class="align-self-center mb-0">Google Chrome</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="fw-bold text-body-heading me-1">54.4%</div>
                                <div id="browser-state-chart-primary"></div>
                            </div>
                        </div>
                        <div class="browser-states">
                            <div class="d-flex">
                                <img src="../../../app-assets/images/icons/mozila-firefox.png" class="rounded me-1"
                                    height="30" alt="Mozila Firefox" />
                                <h6 class="align-self-center mb-0">Mozila Firefox</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="fw-bold text-body-heading me-1">6.1%</div>
                                <div id="browser-state-chart-warning"></div>
                            </div>
                        </div>
                        <div class="browser-states">
                            <div class="d-flex">
                                <img src="../../../app-assets/images/icons/apple-safari.png" class="rounded me-1"
                                    height="30" alt="Apple Safari" />
                                <h6 class="align-self-center mb-0">Apple Safari</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="fw-bold text-body-heading me-1">14.6%</div>
                                <div id="browser-state-chart-secondary"></div>
                            </div>
                        </div>
                        <div class="browser-states">
                            <div class="d-flex">
                                <img src="../../../app-assets/images/icons/internet-explorer.png" class="rounded me-1"
                                    height="30" alt="Internet Explorer" />
                                <h6 class="align-self-center mb-0">Internet Explorer</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="fw-bold text-body-heading me-1">4.2%</div>
                                <div id="browser-state-chart-info"></div>
                            </div>
                        </div>
                        <div class="browser-states">
                            <div class="d-flex">
                                <img src="../../../app-assets/images/icons/opera.png" class="rounded me-1"
                                    height="30" alt="Opera Mini" />
                                <h6 class="align-self-center mb-0">Opera Mini</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="fw-bold text-body-heading me-1">8.4%</div>
                                <div id="browser-state-chart-danger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Browser States Card -->

            <!-- Goal Overview Card -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Goal Overview</h4>
                        <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
                    </div>
                    <div class="card-body p-0">
                        <div id="goal-overview-radial-bar-chart" class="my-2"></div>
                        <div class="row border-top text-center mx-0">
                            <div class="col-6 border-end py-1">
                                <p class="card-text text-muted mb-0">Completed</p>
                                <h3 class="fw-bolder mb-0">786,617</h3>
                            </div>
                            <div class="col-6 py-1">
                                <p class="card-text text-muted mb-0">In Progress</p>
                                <h3 class="fw-bolder mb-0">13,561</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Goal Overview Card -->

            <!-- Transaction Card -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card card-transaction">
                    <div class="card-header">
                        <h4 class="card-title">Transactions</h4>
                        <div class="dropdown chart-dropdown">
                            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"
                                data-bs-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Last 28 Days</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="transaction-item">
                            <div class="d-flex">
                                <div class="avatar bg-light-primary rounded float-start">
                                    <div class="avatar-content">
                                        <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                                    </div>
                                </div>
                                <div class="transaction-percentage">
                                    <h6 class="transaction-title">Wallet</h6>
                                    <small>Starbucks</small>
                                </div>
                            </div>
                            <div class="fw-bolder text-danger">- $74</div>
                        </div>
                        <div class="transaction-item">
                            <div class="d-flex">
                                <div class="avatar bg-light-success rounded float-start">
                                    <div class="avatar-content">
                                        <i data-feather="check" class="avatar-icon font-medium-3"></i>
                                    </div>
                                </div>
                                <div class="transaction-percentage">
                                    <h6 class="transaction-title">Bank Transfer</h6>
                                    <small>Add Money</small>
                                </div>
                            </div>
                            <div class="fw-bolder text-success">+ $480</div>
                        </div>
                        <div class="transaction-item">
                            <div class="d-flex">
                                <div class="avatar bg-light-danger rounded float-start">
                                    <div class="avatar-content">
                                        <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                                    </div>
                                </div>
                                <div class="transaction-percentage">
                                    <h6 class="transaction-title">Paypal</h6>
                                    <small>Add Money</small>
                                </div>
                            </div>
                            <div class="fw-bolder text-success">+ $590</div>
                        </div>
                        <div class="transaction-item">
                            <div class="d-flex">
                                <div class="avatar bg-light-warning rounded float-start">
                                    <div class="avatar-content">
                                        <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                                    </div>
                                </div>
                                <div class="transaction-percentage">
                                    <h6 class="transaction-title">Mastercard</h6>
                                    <small>Ordered Food</small>
                                </div>
                            </div>
                            <div class="fw-bolder text-danger">- $23</div>
                        </div>
                        <div class="transaction-item">
                            <div class="d-flex">
                                <div class="avatar bg-light-info rounded float-start">
                                    <div class="avatar-content">
                                        <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                                    </div>
                                </div>
                                <div class="transaction-percentage">
                                    <h6 class="transaction-title">Transfer</h6>
                                    <small>Refund</small>
                                </div>
                            </div>
                            <div class="fw-bolder text-success">+ $98</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Transaction Card -->





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
