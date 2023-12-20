<?= include('partial/header.php'); ?>

<body>
    <div id="app">
        <div class="main-wrapper">

            <?= include('partial/sidebar.php'); ?>
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Mata Kuliah</h1>
                    </div>
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Terselenggara</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n = 1; // foreach ($customer as $mhs) : 
                            ?>
                            <tr>
                                <td><?= $n < 10 ? '0' . $n++ : $n++; ?></td>
                                <td>kode MK</td>
                                <td>Paradigma</td>
                                <td>0</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-secondary" id="button-edit" style="margin-right: 10px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-bars"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Lihat Pertemuan Kelas</a></li>
                                            <li><a class="dropdown-item" href="#">Lihat Daftar Pertemuan</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
</body>

<?= include('partial/footer.php'); ?>