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
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">

                <!-- Revenue Report Card -->
                <div class="col-lg-12 col-12">
                    <div class="card card-revenue-budget">
                        <div class="row mx-0">
                            <div class="card-body">
                                <!-- Bordered table start -->
                                <div class="row" id="table-bordered">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Data Siswa</h4>
                                            </div>
                                            <!-- Basic table -->

                                            <section id="basic-datatable">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <table class="datatables-basic table">
                                                                <thead>
                                                                    <tr>

                                                                        <th>NISN</th>
                                                                        <th>NIS</th>
                                                                        <th>NAMA</th>
                                                                        <th>JURUSAN</th>
                                                                        <th>TINGKATAN KELAS</th>
                                                                        <th>KELAS</th>
                                                                        <th>ABSENSI</th>
                                                                        <th>POINT</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                        @foreach ($siswas as $siswa)
                                                                            <tr>
                                                                                <td>{{ $siswa->nisn_siswa }}</td>
                                                                                <td>{{ $siswa->nis_siswa }}</td>
                                                                                <td>{{ $siswa->nama_siswa }}</td>
                                                                                <td>{{ $siswa->jurusan_siswa }}</td>
                                                                                <td>{{ $siswa->tingkatan_kelas }}</td>
                                                                                <td>{{ $siswa->kelas_siswa }}</td>
                                                                                <td>
                                                                                    Hadir :
                                                                                    <br>
                                                                                    Sakit :
                                                                                    <br>
                                                                                    Izin :
                                                                                    <br>
                                                                                    Alfa :
                                                                                </td>
                                                                                <td>

                                                                                </td>
                                                                                <td>
                                                                                    <div class="btn-group">
                                                                                        <button type="button"
                                                                                            class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split"
                                                                                            data-bs-toggle="dropdown"
                                                                                            aria-expanded="false">
                                                                                        </button>
                                                                                        <div
                                                                                            class="dropdown-menu dropdown-menu-end">
                                                                                            <a class="dropdown-item"
                                                                                                href="/tambahsiswa/{{ $siswa->id }}/edit">Update</a>
                                                                                            <form action="/tamabahsiswa"
                                                                                                method="post"
                                                                                                class="d-inline">
                                                                                                @method('delete')
                                                                                                @csrf
                                                                                                <button
                                                                                                    class="dropdown-item btn-flat-danger"><span>Hapus</span></button>
                                                                                            </form>
                                                                                            <div
                                                                                                class="dropdown-divider">
                                                                                            </div>
                                                                                            <a class="dropdown-item"
                                                                                                href="">Naik
                                                                                                Kelas</a>
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


                                                <!--/ Basic table -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Revenue Report Card -->

            </section>
            <!-- Dashboard Ecommerce ends -->
        </div>
    </div>
</div>

<!-- END: Content-->



@include('admin.footeradmin')
