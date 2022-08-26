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
                <div class="row match-height">
                    <div class="col-lg-4 col-12">
                        <div class="row match-height">

                            <!-- Earnings Card -->
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="card earnings-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h4 class="card-title mb-1">Cari Data Siswa</h4>
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Isi untuk mencari jurnal"
                                                    aria-describedby="button-addon3" />
                                                <button class="btn btn-outline-primary" id="button-addon3"
                                                    type="button">Tampilkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Earnings Card -->
                            <!-- Earnings Card -->


                        </div>

                    </div>
                </div>
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
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th>id</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Date</th>
                                                                        <th>Salary</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
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
