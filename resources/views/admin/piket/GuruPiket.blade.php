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
            <div class="content-body">
                <section class="form-control-repeater">
                    <div class="row">
                        <!-- Invoice repeater -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Penjadwalan Piket Guru</h4>
                                </div>
                                <div class="card-body">
                                    <form action="#" class="invoice-repeater">
                                        <div data-repeater-list="invoice">
                                            <div data-repeater-item>
                                                <div class="row d-flex align-items-end">
                                                    <div class="col-md-2 mb-1">
                                                        <label class="form-label"
                                                            for="select2-disabled-result">Hari</label>
                                                        <select class="select2 form-select"
                                                            id="select2-disabled-result">
                                                            <option value="senin">Senin</option>
                                                            <option value="selasa" disabled>Selasa</option>
                                                            <option value="Rabu">Rabu</option>
                                                            <option value="Kamis" disabled>Kamis</option>
                                                            <option value="Jum'at" disabled>Jum'at</option>
                                                            <option value="Sabtu" disabled>Sabtu</option>

                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="select2-disabled-result">Nama
                                                            Guru</label>
                                                        <select class="select2 form-select"
                                                            id="select2-disabled-result">
                                                            <option value="1">Option</option>
                                                            <option value="2" disabled>Option2</option>
                                                            <option value="3">Option3</option>
                                                            <option value="4" disabled>Option4</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-md-2 col-12 mb-50">
                                                        <label for="start-date" class="form-label">Start Date</label>
                                                        <input type="text" class="form-control" id="start-date"
                                                            name="start-date" placeholder="Start Date" />
                                                    </div>
                                                    <div class="col-md-2 col-12 mb-50">
                                                        <label for="start-date" class="form-label">Start Date</label>
                                                        <input type="text" class="form-control" id="start-date"
                                                            name="start-date" placeholder="Start Date" />
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
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice repeater -->
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->



    @include('admin.footeradmin')
