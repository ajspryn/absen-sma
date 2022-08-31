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
                <div class="card-header">
                    <h4 class="card-title">Data Guru</h4>
                </div>
                <div class="col-lg-12 col-12">
                    <div class="card card-revenue-budget">
                        <div class="row mx-0">
                            <div class="card-body">
                                <!-- Bordered table start -->
                                <div class="row" id="table-bordered">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Data Guru</h4>
                                            </div>
                                            <!-- Basic table -->

                                            <section id="basic-datatable">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <table class="datatables-basic table">
                                                                <thead>
                                                                    <tr>

                                                                        <th></th>
                                                                        <th>Nama Guru</th>
                                                                        <th>NIP</th>
                                                                        <th>E-mail</th>
                                                                        <th>Password</th>
                                                                        <th>Atur Mapel</th>
                                                                        <th>Action</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($gurus as $guru)
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>{{ $guru->name }}</td>
                                                                            <td></td>
                                                                            <td>{{ $guru->email }}</td>
                                                                            <td>
                                                                                <!-- Disabled Backdrop -->
                                                                                <div class="disabled-backdrop-ex">
                                                                                    <!-- Button trigger modal -->
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-warning"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#backdrop">
                                                                                        Ganti Password
                                                                                    </button>
                                                                                    <!-- Modal -->
                                                                                    <div class="modal fade text-start"
                                                                                        id="backdrop" tabindex="-1"
                                                                                        aria-labelledby="myModalLabel4"
                                                                                        data-bs-backdrop="false"
                                                                                        aria-hidden="true">
                                                                                        <div
                                                                                            class="modal-dialog modal-dialog-centered">
                                                                                            <div class="modal-content">
                                                                                                <div
                                                                                                    class="modal-header">
                                                                                                    <h4 class="modal-title"
                                                                                                        id="myModalLabel4">
                                                                                                        Ganti Password
                                                                                                    </h4>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-close"
                                                                                                        data-bs-dismiss="modal"
                                                                                                        aria-label="Close"></button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <form
                                                                                                        class="form form-horizontal"
                                                                                                        method="POST"
                                                                                                        action="/pengaturanguru/{{ $guru->id }} ">
                                                                                                        @method('put')
                                                                                                        @csrf
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-12">
                                                                                                                <div
                                                                                                                    class="mb-1 row">
                                                                                                                    <div
                                                                                                                        class="row mb-3">
                                                                                                                        <p>{{ $guru->name }}
                                                                                                                        </p>
                                                                                                                        <label
                                                                                                                            for="password"
                                                                                                                            class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                                                                                                        <div
                                                                                                                            class="col-md-6">
                                                                                                                            <input
                                                                                                                                id="password"
                                                                                                                                type="password"
                                                                                                                                class="form-control @error('password') is-invalid @enderror"
                                                                                                                                name="password"
                                                                                                                                required
                                                                                                                                autocomplete="new-password">

                                                                                                                            @error('password')
                                                                                                                                <span
                                                                                                                                    class="invalid-feedback"
                                                                                                                                    role="alert">
                                                                                                                                    <strong>{{ $message }}</strong>
                                                                                                                                </span>
                                                                                                                            @enderror
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="mb-1 row">

                                                                                                                    <div
                                                                                                                        class="col-sm-9">
                                                                                                                        <input
                                                                                                                            type="hidden"
                                                                                                                            id="id"
                                                                                                                            class="form-control"
                                                                                                                            name="id"
                                                                                                                            placeholder="Masukan Password Baru"
                                                                                                                            value="{{ Auth::user()->id }}" />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div
                                                                                                                class="col-sm-9 offset-sm-3">
                                                                                                                <button
                                                                                                                    type="sumbit"
                                                                                                                    class="btn btn-success me-1">Simpan</button>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Disabled Backdrop end-->
                                                                            <td>
                                                                                <div
                                                                                    class="modal-size-xl d-inline-block">
                                                                                    <!-- Button trigger modal -->
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#xlarge"><i
                                                                                            data-feather="briefcase"
                                                                                            class="me-25"></i>
                                                                                    </button>
                                                                                    <!-- Modal -->
                                                                                    <div class="modal fade text-start"
                                                                                        id="xlarge" tabindex="-1"
                                                                                        aria-labelledby="myModalLabel16"
                                                                                        aria-hidden="true">
                                                                                        <div
                                                                                            class="modal-dialog modal-dialog-centered modal-xl">
                                                                                            <div class="modal-content">
                                                                                                <div
                                                                                                    class="modal-header">
                                                                                                    <h4 class="modal-title"
                                                                                                        id="myModalLabel16">
                                                                                                    </h4>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-close"
                                                                                                        data-bs-dismiss="modal"
                                                                                                        aria-label="Close"></button>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="modal-body">
                                                                                                    <form
                                                                                                        action="#"
                                                                                                        class="invoice-repeater">
                                                                                                        <div
                                                                                                            data-repeater-list="invoice">
                                                                                                            <div
                                                                                                                data-repeater-item>
                                                                                                                <div
                                                                                                                    class="row d-flex align-items-end">
                                                                                                                    <div
                                                                                                                        class="col-md-2 mb-1">
                                                                                                                        <label
                                                                                                                            class="form-label"
                                                                                                                            for="select2-disabled-result">Hari</label>
                                                                                                                        <select
                                                                                                                            class="select2 form-select"
                                                                                                                            id="select2-disabled-result">
                                                                                                                            <option
                                                                                                                                value="1">
                                                                                                                                Option
                                                                                                                            </option>
                                                                                                                            <option
                                                                                                                                value="2">
                                                                                                                                Option2
                                                                                                                            </option>
                                                                                                                            <option
                                                                                                                                value="3">
                                                                                                                                Option3
                                                                                                                            </option>
                                                                                                                            <option
                                                                                                                                value="4">
                                                                                                                                Option4
                                                                                                                            </option>
                                                                                                                        </select>
                                                                                                                    </div>

                                                                                                                    <div
                                                                                                                        class="col-md-2 mb-1">
                                                                                                                        <label
                                                                                                                            class="form-label"
                                                                                                                            for="select2-disabled-result">Mapel</label>
                                                                                                                        <select
                                                                                                                            class="select2 form-select"
                                                                                                                            id="select2-disabled-result">
                                                                                                                            <option
                                                                                                                                value="1">
                                                                                                                                Option
                                                                                                                            </option>
                                                                                                                            <option
                                                                                                                                value="2">
                                                                                                                                Option2
                                                                                                                            </option>
                                                                                                                            <option
                                                                                                                                value="3">
                                                                                                                                Option3
                                                                                                                            </option>
                                                                                                                            <option
                                                                                                                                value="4">
                                                                                                                                Option4
                                                                                                                            </option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="col-md-2 mb-1">
                                                                                                                        <label
                                                                                                                            class="form-label"
                                                                                                                            for="select2-disabled-result">kelas</label>
                                                                                                                        <select
                                                                                                                            class="select2 form-select"
                                                                                                                            id="select2-disabled-result">
                                                                                                                            <option
                                                                                                                                value="1">
                                                                                                                                Option
                                                                                                                            </option>
                                                                                                                            <option
                                                                                                                                value="2">
                                                                                                                                Option2
                                                                                                                            </option>
                                                                                                                            <option
                                                                                                                                value="3">
                                                                                                                                Option3
                                                                                                                            </option>
                                                                                                                            <option
                                                                                                                                value="4">
                                                                                                                                Option4
                                                                                                                            </option>
                                                                                                                        </select>
                                                                                                                    </div>



                                                                                                                    <div
                                                                                                                        class="col-md-2 col-12">
                                                                                                                        <div
                                                                                                                            class="mb-1">
                                                                                                                            <label
                                                                                                                                class="form-label"
                                                                                                                                for="itemcost">Jam
                                                                                                                                Mulai</label>
                                                                                                                            <input
                                                                                                                                type="number"
                                                                                                                                class="form-control"
                                                                                                                                id="itemcost"
                                                                                                                                aria-describedby="itemcost"
                                                                                                                                placeholder="32" />
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div
                                                                                                                        class="col-md-2 col-12">
                                                                                                                        <div
                                                                                                                            class="mb-1">
                                                                                                                            <label
                                                                                                                                class="form-label"
                                                                                                                                for="itemquantity">Jam
                                                                                                                                Berakhir</label>
                                                                                                                            <input
                                                                                                                                type="number"
                                                                                                                                class="form-control"
                                                                                                                                id="itemquantity"
                                                                                                                                aria-describedby="itemquantity"
                                                                                                                                placeholder="1" />
                                                                                                                        </div>
                                                                                                                    </div>



                                                                                                                    <div
                                                                                                                        class="col-md-2 col-12 mb-50">
                                                                                                                        <div
                                                                                                                            class="mb-1">
                                                                                                                            <button
                                                                                                                                class="btn btn-outline-danger text-nowrap px-1"
                                                                                                                                data-repeater-delete
                                                                                                                                type="button">
                                                                                                                                <i data-feather="x"
                                                                                                                                    class="me-25"></i>
                                                                                                                                <span>Delete</span>
                                                                                                                            </button>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <hr />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-12">
                                                                                                                <button
                                                                                                                    class="btn btn-icon btn-primary"
                                                                                                                    type="button"
                                                                                                                    data-repeater-create>
                                                                                                                    <i data-feather="plus"
                                                                                                                        class="me-25"></i>
                                                                                                                    <span>Add
                                                                                                                        New</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <br>
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-md-2 col-12 mb-50">
                                                                                                                <button
                                                                                                                    type="sumbit"
                                                                                                                    class="btn btn-success me-1">Simpan</button>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="modal-footer">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-primary"
                                                                                                        data-bs-dismiss="modal">Accept</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </td>
                                                                            <td></td>




                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </section>
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
