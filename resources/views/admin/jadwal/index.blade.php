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
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pengaturan Jadwal</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form action="/pengaturanjadwalmapel" method="post" class="invoice-repeater">
                                    @csrf
                                    <div data-repeater-list="jadwalmapel">
                                        <div data-repeater-item>
                                            <div class="row d-flex align-items-end">
                                                <div class="row match-height">
                                                    <div class="col-lg-4 col-12">
                                                        <div class="row">
                                                            <div class="row match-height">
                                                                <!-- Earnings Card -->
                                                                <div class="col-lg-12 col-md-6 col-8">
                                                                    <label class="form-label"
                                                                        for="hari">Hari</label>
                                                                    <select class="select2 form-select" name="hari"
                                                                        id="hari">
                                                                        <option label="hari"></option>

                                                                        <option value="Senin">
                                                                            Senin</option>

                                                                        <option value="Selasa">
                                                                            Selasa</option>

                                                                        <option value="Rabu">
                                                                            Rabu</option>

                                                                        <option value="Kamis">
                                                                            Kamis</option>

                                                                        <option value="Jumat">
                                                                            Jumat</option>

                                                                        <option value="Sabtu">
                                                                            Sabtu</option>

                                                                    </select>
                                                                </div>
                                                                <!--/ Earnings Card -->
                                                                <!-- Bar Chart - Orders -->
                                                                <div class="col-lg-6 col-md-3 col-4">

                                                                    <label class="form-label" for="jam_mulai">Jam
                                                                        Mulai</label>
                                                                    <input type="text" id="jam_mulai"
                                                                        name="jam_mulai"
                                                                        class="form-control flatpickr-time text-start"
                                                                        placeholder="HH:MM" />

                                                                </div>
                                                                <!--/ Bar Chart - Orders -->
                                                                <!-- Line Chart - Profit -->
                                                                <div class="col-lg-6 col-md-3 col-4">

                                                                    <label class="form-label" for="jam_akhir">Jam
                                                                        Akhir</label>
                                                                    <input type="text" id="jam_akhir"
                                                                        name="jam_akhir"
                                                                        class="form-control flatpickr-time text-start"
                                                                        placeholder="HH:MM" />
                                                                </div>
                                                                <!--/ Line Chart - Profit -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-12">
                                                        <div class="row">
                                                            <div class="row match-height">
                                                                <!-- Earnings Card -->
                                                                <div class="col-lg-12 col-md-6 col-8">

                                                                    <label class="form-label"
                                                                        for="jurusan_id">Jurusan</label>
                                                                    <select class="select2 form-select"
                                                                        name="jurusan_id" id="jurusan_id">
                                                                        <option label="jurusan_id"></option>
                                                                        @foreach ($jurusans as $jurusan)
                                                                            <option value="{{ $jurusan->id }}">
                                                                                {{ $jurusan->jurusan }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--/ Earnings Card -->
                                                            <!-- Bar Chart - Orders -->
                                                            <div class="col-lg-6 col-md-3 col-4">

                                                                <label class="form-label"
                                                                    for="tingkatan_kelas_id">Tingkatan Kelas</label>
                                                                <select class="select2 form-select"
                                                                    name="tingkatan_kelas_id" id="tingkatan_kelas_id">
                                                                    <option label="tingkatan_kelas_id"></option>
                                                                    @foreach ($tingkatans as $tingkatan)
                                                                        <option value="{{ $tingkatan->id }}">
                                                                            {{ $tingkatan->tingkatan_kelas }}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                            <!--/ Bar Chart - Orders -->

                                                            <!-- Line Chart - Profit -->
                                                            <div class="col-lg-6 col-md-3 col-4">

                                                                <label class="form-label" for="kelas_id">Kelas</label>
                                                                <select class="select2 form-select" name="kelas_id"
                                                                    id="kelas_id">
                                                                    <option label="kelas_id"></option>
                                                                    @foreach ($kelass as $kelas)
                                                                        <option value="{{ $kelas->id }}">
                                                                            {{ $kelas->kelas }}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                            <!--/ Line Chart - Profit -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col match-height">
                                                    <div class="col-lg-10 mb-12">
                                                        <label class="form-label" for="mapel_ajar">Mata
                                                            Pelajaran</label>
                                                        <select class="select2 form-select" name="mapel_id"
                                                            id="mapel_ajar">
                                                            <option label="maper_ajar"></option>
                                                            @foreach ($mapels as $mapel)
                                                                <option value="{{ $mapel->id }}">
                                                                    {{ $mapel->mata_pelajaran }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-10 mb-12">
                                                        <label class="form-label" for="user_id">Guru
                                                            Pengampu</label>
                                                        <select class="select2 form-select" name="user_id"
                                                            id="user_id">
                                                            <option label="user_id"></option>
                                                            @foreach ($gurus as $guru)
                                                                <option value="{{ $guru->id }}">
                                                                    {{ $guru->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />

                                        </div>
                                        <hr />
                                    </div>
                            </div>


                            <div class="row">
                                <div class="col-md-2 col-12 mb-50">
                                    <button type="sumbit" class="btn btn-success me-1">Simpan</button>

                                </div>
                            </div>

                            </form>
                            <section id="basic-datatable">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <table class="datatables-basic table">
                                                <thead>
                                                    <tr>

                                                        <th></th>
                                                        <th>Hari</th>
                                                        <th>Jam Mulai</th>
                                                        <th>Jam Berakhir</th>
                                                        <th>Mata Pelajaran</th>
                                                        <th>Jurusan</th>
                                                        <th>Tingkatan Kelas</th>
                                                        <th>Kelas</th>
                                                        <th>Guru Pengampu</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($jadwalmapels as $jadwalmapel)
                                                        <tr>
                                                            <td></td>
                                                            <td>{{ $jadwalmapel->hari }}</td>

                                                            <td>{{ $jadwalmapel->jam_mulai }}</td>
                                                            <td>{{ $jadwalmapel->jam_akhir }}</td>
                                                            <td>{{ $jadwalmapel->mapel_id }}</td>
                                                            <td>{{ $jadwalmapel->jurusan_id }}</td>
                                                            <td>{{ $jadwalmapel->tingkatan_kelas_id }}</td>
                                                            <td>{{ $jadwalmapel->kelas_id }}</td>
                                                            <td>{{ $jadwalmapel->user_id }}</td>

                                                            <td></td>




                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </section>
                        </div>

                    </div>
                </div>
        </div>
        <!-- /FORM  -->





        </section>
        <!-- Basic Horizontal form layout section end -->


    </div>
</div>
</div>
<!-- END: Content-->



@include('admin.footeradmin')
