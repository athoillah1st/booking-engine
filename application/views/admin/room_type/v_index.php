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
            <a href="<?= base_url('RoomType/tambah') ?>" type="button" class="btn btn-primary float-end mt-3">Tambah</a>
            <h5 class="card-title"><?= $judul ?> </h5>

            <!-- Bordered Table -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Type Ruangan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($tipe_kamar as $key => $tipe) { ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $tipe['type'] ?></td>
                            <td><?= $tipe['deskripsi'] ?></td>
                            <td width="15%">
                                <a href="<?= base_url('RoomType/edit/' . $tipe['id']) ?>" type="button" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?= base_url('RoomType/delete/' . $tipe['id']) ?>" type="button" class="btn btn-danger"><i class="bi bi-x-square"></i></a>
                            </td>
                        </tr>
                    <?php } ?>


                </tbody>
            </table>
            <!-- End Bordered Table -->
        </div>
    </div>

</main>