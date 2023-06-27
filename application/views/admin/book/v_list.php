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
                        <th scope="col">Cek In</th>
                        <th scope="col">Cek Out</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Jumlah Orang</th>
                        <th scope="col">Harga Total</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($book as $key => $value) { ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $value['id_room'] ?></td>
                            <td><?= $value['cek_in'] ?></td>
                            <td><?= $value['cek_out'] ?></td>
                            <td><?= $value['nama_customer'] ?></td>
                            <td><?= $value['jumlah_orang'] ?></td>
                            <td><?= $value['harga_total'] ?></td>

                        </tr>
                    <?php } ?>


                </tbody>
            </table>
            <!-- End Bordered Table -->
        </div>
    </div>

</main>