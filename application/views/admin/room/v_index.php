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
            <a href="<?= base_url('Room/tambah') ?>" type="button" class="btn btn-primary float-end mt-3">Tambah</a>
            <h5 class="card-title"><?= $judul ?> </h5>

            <!-- Bordered Table -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kamar</th>
                        <th scope="col">Tipe Kamar</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($kamar as $key => $kmr) { ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $kmr['room'] ?></td>
                            <td><?= $kmr['type'] ?></td>
                            <td><?= $kmr['room_desc'] ?></td>
                            <td width="15%">
                                <a href="<?= base_url('Room/edit/' . $kmr['id_room']) ?>" type="button" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal<?= $kmr['id_room'] ?>"><i class="bi bi-x-square"></i></button>
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
                    Apakah Anda Yakin akan menghapus data <strong><?= $value['room'] ?> ??</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="<?= base_url('Room/delete/' . $value['id_room']) ?>" type="button" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>