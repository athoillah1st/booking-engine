<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $judul ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= $judul ?> </h5>

            <!-- Bordered Table -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kamar</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Cek In</th>
                        <th scope="col">Cek Out</th>
                        <th scope="col">Status</th>
                        <th scope="col">Cek Out</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($kamar as $key => $value) { ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $value['room'] ?></td>
                            <td><?= $value['harga'] ?></td>
                            <td><?= $value['cek_in'] ?></td>
                            <td><?= $value['cek_out'] ?></td>
                            <td><?= $value['status'] == 0 ? "<span class='badge bg-success'>Tersedia</span>" : "<span class='badge bg-danger'>Terisi</span>" ?></td>
                            <td width="10%">
                                <button type="button" class="btn btn-info <?= $value['status'] == 1 ? "" : "disabled" ?>" data-bs-toggle="modal" data-bs-target="#basicModal<?= $value['id_room'] ?>"><i class="bi bi-cart-plus-fill"></i></button>

                            </td>
                        </tr>
                    <?php } ?>


                </tbody>
            </table>
            <!-- End Bordered Table -->
        </div>
    </div>

</main>

<?php foreach ($kamar as $key => $value) { ?>

    <div class="modal fade" id="basicModal<?= $value['id_room'] ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin akan Cek Out <strong><?= $value['room'] ?> ??</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="<?= base_url('book/proses_cek_out/' . $value['id_room']) ?>" type="button" class="btn btn-success">Iya Tentu</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>