<?= include('views/partial/header.php'); ?>

<body>
    <div id="app">
        <div class="main-wrapper">

            <?= include('views/partial/sidebar.php'); ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total Mahasiswa</h4>
                                    </div>
                                    <div class="card-body">
                                        5 <!-- <= $countcustomer ?> setting nilai dari jumlah customer -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total MK</h4>
                                    </div>
                                    <div class="card-body">
                                        4 <!-- <= $countevent ?>  setting nilai dari jumlah lomba -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-success">
                                    <i class="fas fa-calendar"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Minggu Pertemuan</h4>
                                    </div>
                                    <div class="card-body">
                                        8 <!-- setting nilai dari jumlah Pendapatan -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Statistics</h4>
                                </div>
                                <div>
                                    <div class="code-example">
                                        <h1>Isi Konten</h1>
                                        </style>
                                        <div id="column-example-14 m-0">
                                            <!-- konten -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12 col-sm-12">

                    </div>
                </section>
            </div>

        </div>

        <?= include('views/partial/footer.php'); ?>