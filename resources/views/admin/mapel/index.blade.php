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
                            <h4 class="card-title">Pengaturan Mapel</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form action="/pengaturanmapel" method="post" class="invoice-repeater">
                                    @csrf
                                    <div data-repeater-list="mapel">
                                        <div data-repeater-item>
                                            <div class="row d-flex align-items-end">
                                                <div class="col-md-4 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="itemcost">Mata
                                                            Pelajaran</label>
                                                        <input type="text" class="form-control" id="mata_pelajaran"
                                                            name="mata_pelajaran" aria-describedby="itemcost"
                                                            placeholder="Isikan mata pelajaran" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="jurusan_id">Jurusan</label>
                                                        <select class="form-select" id="jurusan_id">
                                                            </option>
                                                            @foreach ($jurusans as $jurusan)
                                                                <option value="{{ $jurusan->id }}">
                                                                    {{ $jurusan->jurusan }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="tingkatan_kelas_id">Tingkatan
                                                            Kwlas</label>
                                                        <select class="form-select" id="tingkatan_kelas_id">
                                                            </option>
                                                            </option>
                                                            @foreach ($tingkatans as $tingkatan)
                                                                <option value="{{ $tingkatan->id }}">
                                                                    {{ $tingkatan->tingkatan_kelas }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12 mb-50">
                                                    <div class="mb-1">
                                                        <button class="btn btn-outline-danger text-nowrap px-1"
                                                            data-repeater-delete type="button">
                                                            <i data-feather="x" class="me-25"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-icon btn-primary" type="button"
                                                data-repeater-create>
                                                <i data-feather="plus" class="me-25"></i>
                                                <span>Add New</span>
                                            </button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 col-12 mb-50">
                                            <button type="sumbit" class="btn btn-success me-1">Simpan</button>

                                        </div>
                                    </div>
                                </form>
                                <div class="col-12">
                                    <div class="card">
                                        <table class="datatables-basic table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Mata Pelajaran</th>
                                                    <th>Jurusan</th>
                                                    <th>Tingkatan_Kelas</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($mapels as $mapel)
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $mapel->mata_pelajaran }}</td>
                                                        <td>{{ $mapel->jurusan_id }}</td>
                                                        <td>{{ $mapel->tingkatan_kelas_id }}</td>

                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <div class="modal-size-xl d-inline-block"><a
                                                                            class="dropdown-item" data-bs-toggle="modal"
                                                                            data-bs-target="#xlarge">Update</a> </div>
                                                                    <form action="/pengaturanmapel/{{ $mapel->id }}"
                                                                        method="post" class="d-inline">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <button
                                                                            class="dropdown-item btn-flat-danger"><span>Hapus</span></button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!-- Modal -->
                                                        <div class="modal fade text-start" id="xlarge" tabindex="-1"
                                                            aria-labelledby="myModalLabel16" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel16">
                                                                        </h4>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="invoice-repeater" method="POST"
                                                                            action="/pengaturanmapel/{{ $mapel->id }} ">
                                                                            @method('put')

                                                                            @csrf
                                                                            <div data-repeater-list="mapel">
                                                                                <div data-repeater-item>
                                                                                    <div
                                                                                        class="row d-flex align-items-end">


                                                                                        <div class="col-md-4 col-12">
                                                                                            <div class="mb-1">
                                                                                                <label
                                                                                                    class="form-label"
                                                                                                    for="itemcost">Mata
                                                                                                    Pelajaran</label>
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    id="mata_pelajaran"
                                                                                                    name="mata_pelajaran"
                                                                                                    aria-describedby="itemcost"
                                                                                                    placeholder="Isikan mata pelajaran"
                                                                                                    value="{{ $mapel->mata_pelajaran }}" />
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-4 col-12">
                                                                                            <label class="form-label"
                                                                                                for="mapel_ajar">Jurusan</label>
                                                                                            <select
                                                                                                class="select2 form-select"
                                                                                                name="mapel_id"
                                                                                                id="mapel_ajar">
                                                                                                <option
                                                                                                    label="maper_ajar">
                                                                                                </option>
                                                                                                @foreach ($jurusans as $jurusanl)
                                                                                                    <option
                                                                                                        value="{{ $jurusan->id }}">
                                                                                                        {{ $jurusan->jurusan }}
                                                                                                    </option>
                                                                                                @endforeach


                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-12">
                                                                                            <label class="form-label"
                                                                                                for="mapel_ajar">Jurusan</label>
                                                                                            <select
                                                                                                class="select2 form-select"
                                                                                                name="mapel_id"
                                                                                                id="mapel_ajar">
                                                                                                <option
                                                                                                    label="maper_ajar">
                                                                                                </option>
                                                                                                @foreach ($tingkatans as $tingkatan)
                                                                                                    <option
                                                                                                        value="{{ $tingkatan->id }}">
                                                                                                        {{ $tingkatan->tingkatan_kelass }}
                                                                                                    </option>
                                                                                                @endforeach


                                                                                            </select>
                                                                                        </div>



                                                                                    </div>
                                                                                    <hr />
                                                                                </div>
                                                                            </div>

                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col-md-2 col-12 mb-50">
                                                                                    <button type="sumbit"
                                                                                        class="btn btn-success me-1">Simpan</button>

                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-primary"
                                                                            data-bs-dismiss="modal">Accept</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


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
